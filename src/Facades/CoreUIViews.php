<?php

namespace molbal\CoreUIViews\Facades;

use Illuminate\Support\Facades\Facade;

class CoreUIViews extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'coreuiviews';
    }
}
