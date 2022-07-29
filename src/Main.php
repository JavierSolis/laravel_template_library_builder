<?php
//como capturar input de terminal
//https://code.tutsplus.com/tutorials/get-command-line-arguments-with-php-argv-or-getopt--cms-39201

$short_options = "f:";
$long_options = ["filename:"];
$options = getopt($short_options, $long_options);

$filename=".";
if(isset($options["f"]) || isset($options["filename"])) {
    $filename = $options["f"] ?? $options["filename"];
}

$string = file_get_contents($filename);
$json_a = json_decode($string, true);
$sss = $json_a["PACKAGE_NAME"];

$PACKAGE_NAME =$json_a["PACKAGE_NAME"];
$PACKAGE_BASE=$json_a["PACKAGE_BASE"];
$HOME_PAGE=$json_a["HOME_PAGE"];
$AUTHOR_NAME=$json_a["AUTHOR_NAME"];
$AUTHOR_EMAIL=$json_a["AUTHOR_EMAIL"];
$AUTHOR_ROLE=$json_a["AUTHOR_ROLE"];

$replacesReadmeSearch = [
    "[<PACKAGE_BASE>]",
    "[<PACKAGE_NAME>]",
    "[<HOME_PAGE>]",
    "[<AUTHOR_NAME>]",
    "[<AUTHOR_EMAIL>]",
    "[<AUTHOR_ROLE>]"
];
$replacesReadmeReplace = [
    $PACKAGE_BASE,
    $PACKAGE_NAME,
    $HOME_PAGE,
    $AUTHOR_NAME,
    $AUTHOR_EMAIL,
    $AUTHOR_ROLE,
];



$str_replace_pack_base = "[<PACKAGE_BASE>]";
$str_replace_pack_name = "[<PACKAGE_NAME>]";

$source = "resources/base/library/LaravelPackagePublishTest";
$dest= "build/output/$PACKAGE_NAME";

mkdir($dest, 0755);
foreach (
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST) as $item
) {
    if ($item->isDir()) {
        mkdir($dest . DIRECTORY_SEPARATOR . $iterator->getSubPathname());
    } else {
        //name
        $destFileName = $dest . DIRECTORY_SEPARATOR . $iterator->getSubPathname();
        if(str_contains($destFileName,$str_replace_pack_name)){
            $destFileName = str_replace($str_replace_pack_name,$PACKAGE_NAME,$destFileName);
        }
        copy($item, $destFileName);

        //replace
        $baseFileName = basename($destFileName);

        $path_to_file = $destFileName;
        $file_contents = file_get_contents($path_to_file);
        $file_contents = str_replace($replacesReadmeSearch, $replacesReadmeReplace, $file_contents);
        file_put_contents($path_to_file, $file_contents);
    }
}