<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\TelegramService;

class TelegramFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    { 
        return TelegramService::class;
    }
}
