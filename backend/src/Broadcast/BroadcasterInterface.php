<?php

namespace Weeks\Wedding\Broadcast;

use Weeks\Wedding\Event\BroadcastableEventInterface;

interface BroadcasterInterface
{
    /**
     * Broadcast the given event.
     *
     * @param BroadcastableEventInterface $event
     *
     * @return void
     */
    public function broadcast(BroadcastableEventInterface $event);
}