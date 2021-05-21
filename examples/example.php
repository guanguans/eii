<?php

use Guanguans\EiiFoundation\Application;
use Guanguans\EiiFoundation\Examples\Components\ExampleComponent;
use Guanguans\EiiFoundation\Examples\Events\ExampleEvent;

define('YII_DEBUG', true);

require __DIR__ . '/../vendor/autoload.php';

// 单独示例
$exampleComponent = new ExampleComponent();
$exampleComponent->behaviorMethod();
$exampleComponent->trigger(ExampleEvent::EXAMPLE_EVENT_NAME);
var_dump($exampleComponent->behaviorName);
var_dump($exampleComponent->componentName);

// 整合示例
$config = require __DIR__ . '/config.php';
$application = new Application($config);
// var_dump(Eii::$app);
var_dump(Eii::$app->example->componentName);
// var_dump(Eii::$app->example);
