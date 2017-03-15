<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Weeks\Wedding\Broadcast\BroadcasterInterface;
use ElephantIO\Client as Elephant;
use ElephantIO\Engine\SocketIO\Version1X;
use Weeks\Wedding\Broadcast\ElephantIOBroadcaster;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BroadcasterInterface::class, function ($app) {
            return new ElephantIOBroadcaster(
                new Elephant(new Version1X('http://localhost:8890'))
            );
        });
    }
}
