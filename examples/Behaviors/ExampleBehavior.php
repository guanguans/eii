<?php

namespace Guanguans\Eii\Examples\Behaviors;

use Guanguans\Eii\Behavior;
use Guanguans\Eii\Examples\Events\ExampleEvent;

class ExampleBehavior extends Behavior
{
    /**
     * @var string
     */
    public $behaviorName;

    /**
     * @inheritDoc
     */
    public function events()
    {
        return [
            ExampleEvent::EXAMPLE_EVENT_NAME => 'behaviorMethod',
        ];
    }

    public function behaviorMethod()
    {
        echo __FUNCTION__ . PHP_EOL;
    }
}
