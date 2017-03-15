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

use Doctrine\ORM\EntityManager;
use Weeks\Wedding\Broadcast\BroadcasterInterface;

$app->get('/', function () use ($app) {
    /** @var EntityManager $em */
    $em = $app['em'];
    dd($em->getRepository(\Weeks\Wedding\Entity\Image::class));
});

$app->get('/b', function () use ($app) {
    /** @var BroadcasterInterface $broadcaster */
    $broadcaster = $app->make(BroadcasterInterface::class);
    $broadcaster->broadcast(
        new \App\Events\ExampleEvent()
    );
});
