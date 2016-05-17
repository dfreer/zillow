<?php

namespace Zillow;

use Illuminate\Support\Facades\Facade;

class ZillowFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zillow';
    }
}
