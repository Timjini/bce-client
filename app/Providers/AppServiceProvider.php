<?php

namespace App\Providers;

use App\Listeners\SendAdminNotification;
use App\Listeners\SendVisitorNotification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            SendVisitorNotification::class,
            SendAdminNotification::class,
        );
    }
}
