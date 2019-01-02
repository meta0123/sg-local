<?php

$loaderClass = array(

    # func

    # func/classes
    'AppConfig' => 'func/classes/AppConfig',

    'DataBase' => 'func/classes/DataBase',

    'DataCache' => 'func/classes/Cache/DataCache',

    'DBCache' => 'func/classes/Cache/DBCache',

    'DbGroupRatio' => 'func/classes/DbGroupRatio',

    # 網站自定義功能參數
    'MyRedis' => 'func/classes/Cache/MyRedis',

    'NFSCache' => 'func/classes/Cache/NFSCache',

    # 規則剖析
    'ISG' => 'func/classes/ISG',

    'ISGRule' => 'func/classes/ISGRule',

    'BaseComplex' => 'func/classes/BaseComplex',

    'sqlLog' => 'func/classes/log.class',

    'CasinoMain' => 'func/classes/Casino/CasinoMain',

    'CasinoModule' => 'func/classes/Casino/CasinoModule',

);


/* autoload */
spl_autoload_register(function($class) use ($loaderClass) {

    # $loaderClass 設定的相關參數
    $class = (isset($loaderClass[$class])) ? $loaderClass[$class] : $class;
    $class = str_replace('\\', '/', $class);
    include pathHome . "{$class}.php";
});
