# yii2
1) создать web/index.php
  
        require  __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
        $config = require __DIR__. '/../config/web.php';
        (new yii\web\Application($config))->run();
        
2) создать .gitignore

        .idea
        vendor
    
3) запустить комманду
        
        composer global require "fxp/composer-asset-plugin:*"
        composer require "yiisoft/yii2:*"
        
4) создать config/web.php
>
    return [
        'id' => 'school',
        'basePath' => realpath(__DIR__ . '/../')
    ];

5) tests
>composer require "codeception/codeception:*"
 vendor/bin/codecept
 vendor/bin/codecept bootstrap
 vendor/bin/codecept generate:cept acceptance TestGuestPages
 vendor/bin/codecept run

6) bootstrap
>composer require "yiisoft/yii2-bootstrap:*"

7) Debug Extension for Yii 2
>https://www.yiiframework.com/extension/yiisoft/yii2-debug
mkdir('runtime');
chmod 775 runtime, vendor

8) tests
>vendor/bin/codecept generate:cept acceptance TestUserJoin
vendor/bin/codecept generate:stepobject acceptance TestUserJoin
imagineUser
joinUser
loginUser
logoutUser
isUserLogged
noUserLogged
created class 'tests/_support/Step/Acceptance/TestUserJoin.php'

9) console app
>php yii.php

10) migrate DB
>php yii.php migrate/create create_user_table
настроить db.config и запустить миграцию.
php yii.php migrate
можно удалить или установить миграцию
php yii.php migrate/down or php yii.php migrate/up

11) FAKER
>composer require "fzaninotto/faker:*"

12) Functional Testing
>
>vendor/bin/codecept generate:test functional PasswordHasher
>
>in tests/functional.suite.yml
>    config:
>        Yii2:
>            configFile: 'config/web.php' 
>
>in codeception.yml
>settings:
     bootstrap: _bootstrap.php
>
>create file tests/functional/PasswordHasherTest.php