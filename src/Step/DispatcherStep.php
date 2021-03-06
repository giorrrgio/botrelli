<?php

namespace PUGX\Bot\Step;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\Event;

abstract class DispatcherStep
{
    /**
     * @var $eventDispatcher
     */
    protected $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function dispatchEvent($eventName, Event $event = null)
    {
        $this->eventDispatcher->dispatch($eventName, $event);
    }

    /**
     * @param mixed $eventDispatcher
     */
    protected function setEventDispatcher($eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

}
