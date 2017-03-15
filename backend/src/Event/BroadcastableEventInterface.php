<?php

namespace Weeks\Wedding\Event;

interface BroadcastableEventInterface
{
    /**
     * The name of the event
     *
     * @return string
     */
    public function getName();

    /**
     * Get the payload
     *
     * @return mixed
     */
    public function getPayload();
}