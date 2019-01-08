<?php

$loaderClass = array(

    'MysqlDb' => 'func/classes/db_mysql.class',

    'DataCache' => 'func/classes/Cache/DataCache',

    'MyRedis' => 'func/classes/Cache/MyRedis',

    'NFSCache' => 'func/classes/Cache/NFSCache',

    'DBCache' => 'func/classes/Cache/DBCache',

    // 'BaseComplex' => 'func/classes/BaseComplex',

    // 'SendCommand' => 'func/classes/sendCommand.class',

    // 'Supply' => 'func/supply/Supply',

    // 'PreOutMember' => 'func/supply/PreOutMember',

    'Smarty' => 'lib/Smarty/libs/Smarty.class',

    'CasinoMain' => 'func/classes/Casino/CasinoMain',

    'CasinoModule' => 'func/classes/Casino/CasinoModule',
);

/* autoload */
spl_autoload_register(function($class) use ($loaderClass) {
    # $loaderClass 設定的相關參數
    $class = (isset($loaderClass[$class])) ? $loaderClass[$class] : $class;
    $class = str_replace('\\', '/', $class);
    include __DIR__ . "/../{$class}.php";
});
