<?php

namespace Neznam\XboxRestApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Neznam\XboxRestApi\XboxRestApi
 */
class XboxRestApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'xbox-rest-api';
    }
}
