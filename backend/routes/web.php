<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Weeks\Wedding\Broadcast\BroadcasterInterface;

$app->get('/', function () use ($app) {
    /** @var BroadcasterInterface $broadcaster */
    $broadcaster = $app->make(BroadcasterInterface::class);
    $broadcaster->broadcast(
        new \App\Events\ExampleEvent()
    );
});
