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
https://www.yiiframework.com/extension/yiisoft/yii2-debug
mkdir('runtime');
chmod 775 runtime, vendor

8) tests
vendor/bin/codecept generate:cept acceptance TestUserJoin
vendor/bin/codecept generate:stepobject acceptance TestUserJoin
imagineUser
joinUser
loginUser
logoutUser
isUserLogged
noUserLogged
created class 'tests/_support/Step/Acceptance/TestUserJoin.php'