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

5)