<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TelegramService;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TelegramService::class, function () {
            return new TelegramService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
