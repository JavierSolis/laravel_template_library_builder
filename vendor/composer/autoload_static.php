<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit440662a51d63199ff66086f9db233eee
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Javiersolis\\Templatelibrariesbuildeer\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Javiersolis\\Templatelibrariesbuildeer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit440662a51d63199ff66086f9db233eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit440662a51d63199ff66086f9db233eee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit440662a51d63199ff66086f9db233eee::$classMap;

        }, null, ClassLoader::class);
    }
}
