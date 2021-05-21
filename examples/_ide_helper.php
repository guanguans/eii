<?php

/**
 * @property Application $app
 * @property \Guanguans\EiiFoundation\Di\Container $container
 * @property array $aliases
 *
 * @method static getAlias($alias, $throwException = true)
 * @method static getRootAlias($alias)
 * @method static setAlias($alias, $path)
 * @method static createObject($type, array $params = [])
 * @method static createContainer($type, array $params = [])
 * @method static configure($object, $properties)
 */
class Eii
{
}

/**
 * @property \Guanguans\EiiFoundation\Examples\Components\ExampleComponent $example
 */
class Application
{
}

namespace Guanguans\EiiFoundation\Examples\Components {

    /**
     * @property string $behaviorName
     *
     * @method behaviorMethod()
     */
    class ExampleComponent
    {
    }
}
