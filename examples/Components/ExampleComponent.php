<?php

namespace Guanguans\Eii\Examples\Components;

use Guanguans\Eii\Component;
use Guanguans\Eii\Helpers\ArrayHelper;

/**
 * Class ExampleComponent.
 */
class ExampleComponent extends Component
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'example' => [
                'class' => \Guanguans\Eii\Examples\Behaviors\ExampleBehavior::class,
                'behaviorName' => \Guanguans\Eii\Examples\Behaviors\ExampleBehavior::class,
            ],
        ]);
    }

    /**
     * @var string
     */
    private $componentName = self::class;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function getComponentName(): string
    {
        return $this->componentName;
    }

    /**
     * @param  string  $className
     */
    public function setComponentName(string $className): void
    {
        $this->componentName = $className;
    }
}
