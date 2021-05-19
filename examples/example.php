<?php

use Guanguans\EiiFoundation\Application;
use Guanguans\EiiFoundation\Examples\Components\pay;

define('YII_DEBUG', true);

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/config.php';
$application = new Application($config);

var_dump(Eii::$app);
var_dump(Eii::$app->pay);
var_dump(Eii::$app->get('pay'));
var_dump(Eii::$app->pay->wechat);
var_dump(Eii::$app->pay->getWechat());

$pay = new Pay(['wechat' => 'This is Wechat component.']);
var_dump($pay);
