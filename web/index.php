<?php

//if (!defined('YII_DEBUG')) {
//    define('YII_DEBUG', true);
//}
//
//// регистрация загрузчика классов Composer
//require __DIR__ . '/../vendor/autoload.php';
//
// подключение файла класса Yii
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// загрузка конфигурации приложения
$config = require __DIR__ . '/../config/web.php';

// создание и конфигурация приложения, а также вызов метода для обработки входящего запроса
(new yii\web\Application($config))->run();