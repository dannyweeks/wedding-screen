<?php

namespace Weeks\Wedding\Broadcast;

use ElephantIO\Client as Elephant;
use Weeks\Wedding\Event\BroadcastableEventInterface;

class ElephantIOBroadcaster implements BroadcasterInterface
{
    /**
     * @var Elephant
     */
    protected $elephant;

    /**
     * ElephantIOBroadcaster constructor.
     *
     * @param Elephant $elephant
     */
    public function __construct(Elephant $elephant)
    {
        $this->elephant = $elephant;
    }

    /**
     * Broadcast the given event.
     *
     * @param BroadcastableEventInterface $event
     *
     * @return void
     */
    public function broadcast(BroadcastableEventInterface $event)
    {
        $this->elephant->initialize();
        $this->elephant->emit(
            'broadcast',
            [
                'name' => $event->getName(),
                'data' => $event->getPayload(),
            ]
        );
        $this->elephant->close();
    }
}