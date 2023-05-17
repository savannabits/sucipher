<?php

namespace Savannabits\Sucipher;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Savannabits\Sucipher\Skeleton\SkeletonClass
 */
class SucipherFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sucipher';
    }
}
