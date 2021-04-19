<?php

namespace MDCN\Pantau\Facades;

use Illuminate\Support\Facades\Facade;

class Pantau extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pantau';
    }
}
