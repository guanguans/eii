<?php

namespace Guanguans\EiiFoundation\Examples\Events;

use Guanguans\EiiFoundation\Event;

class ExampleEvent extends Event
{
    public $name = self::class;

    public const EXAMPLE_EVENT_NAME = self::class;
}
