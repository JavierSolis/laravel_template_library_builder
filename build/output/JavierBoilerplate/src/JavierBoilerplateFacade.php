<?php

namespace javierboilerplate\JavierBoilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \javierboilerplate\JavierBoilerplate\Skeleton\SkeletonClass
 */
class JavierBoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'JavierBoilerplate';
    }
}
