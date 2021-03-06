<?php

namespace Itoufo\Notifynder\Facades;

use Illuminate\Support\Facades\Facade;

class Notifynder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notifynder';
    }
}
