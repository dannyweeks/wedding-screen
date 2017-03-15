<?php

namespace App\Events;

use Weeks\Wedding\Event\BroadcastableEventInterface;

class ExampleEvent extends Event implements BroadcastableEventInterface
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * The name of the event
     *
     * @return string
     */
    public function getName()
    {
        return 'foo';
    }

    /**
     * Get the payload
     *
     * @return mixed
     */
    public function getPayload()
    {
        return [
            'new' => 'thing',
        ];
    }
}
