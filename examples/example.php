<?php

use Guanguans\EiiFoundation\Application;
use Guanguans\EiiFoundation\Examples\Components\ExampleComponent;
use Guanguans\EiiFoundation\Examples\Events\ExampleEvent;

define('YII_DEBUG', true);

require __DIR__ . '/../vendor/autoload.php';

$exampleComponent = new ExampleComponent();

// 组件调用所拥有行为的属性示例
var_dump($exampleComponent->behaviorName);

// 组件调用所拥有行为的方法示例
$exampleComponent->behaviorMethod();

// 组件触发事件示例
$exampleComponent->trigger(ExampleEvent::EXAMPLE_EVENT_NAME);

// 整体示例
var_dump($exampleComponent->componentName);
$config = require __DIR__ . '/config.php';
$application = new Application($config);
// var_dump(Eii::$app);
var_dump(Eii::$app->example->componentName);
// var_dump(Eii::$app->example);
