<?php

namespace javier\Boilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \javier\Boilerplate\Skeleton\SkeletonClass
 */
class BoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Boilerplate';
    }
}
