<?php
namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use App\Listeners\UpdateLastLogin;
use App\Listeners\ClearOnlineStatus;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Login::class => [
            UpdateLastLogin::class,
        ],

        Logout::class => [
            ClearOnlineStatus::class,
        ],
        \Illuminate\Auth\Events\Login::class => [
            \App\Listeners\UpdateLastLogin::class,
        ],
    ];


}
