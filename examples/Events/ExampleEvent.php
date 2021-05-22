<?php

namespace Guanguans\Eii\Examples\Events;

use Guanguans\Eii\Event;

class ExampleEvent extends Event
{
    /**
     * @var string
     */
    public $name = self::class;

    public const EXAMPLE_EVENT_NAME = self::class;
}
