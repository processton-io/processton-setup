<?php

namespace Processton\ProcesstonSetup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonSetup\Skeleton\SkeletonClass
 */
class ProcesstonSetupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-setup';
    }
}
