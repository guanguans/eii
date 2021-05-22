<?php

/**
 * This file is part of the guanguans/eii.
 * This file is modified from https://github.com/yiisoft/yii2
 * (c) guanguans <ityaozm@gmail.com>
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Eii;

use Eii;
use Guanguans\Eii\Di\Container;
use Guanguans\Eii\Di\ServiceLocator;
use Guanguans\Eii\Exception\InvalidConfigException;

class Application extends ServiceLocator
{
    /**
     * @var string the application name
     */
    public $name = 'Eii';

    /**
     * Constructor.
     *
     * @param array $config name-value pairs that will be used to initialize the object properties.
     *                      Note that the configuration must contain both [[id]] and [[basePath]].
     *
     * @throws InvalidConfigException if either [[id]] or [[basePath]] configuration is missing
     */
    public function __construct($config = [])
    {
        Eii::$app = $this;

        Eii::$container = new Container();

        $this->preInit($config);

        Component::__construct($config);
    }

    /**
     * Pre-initializes the application.
     * This method is called at the beginning of the application constructor.
     * It initializes several important application properties.
     * If you override this method, please make sure you call the parent implementation.
     *
     * @param array $config the application configuration
     *
     * @throws InvalidConfigException if either [[id]] or [[basePath]] configuration is missing
     */
    public function preInit(&$config)
    {
        if (isset($config['container'])) {
            $this->setContainer($config['container']);

            unset($config['container']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->bootstrap();
    }

    /**
     * Initializes extensions and executes bootstrap components.
     * This method is called by [[init()]] after the application has been fully configured.
     * If you override this method, make sure you also call the parent implementation.
     */
    protected function bootstrap()
    {
    }

    /**
     * Configures [[Eii::$container]] with the $config.
     *
     * @param array $config values given in terms of name-value pairs
     *
     * @since 2.0.11
     */
    public function setContainer($config)
    {
        Component::configure(Eii::$container, $config);
    }
}
