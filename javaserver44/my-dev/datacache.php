<?php

# 必需設定 sg 編號
$sg = 44;
if ($sg === null) {
    exit('Error > datacache.php 必需設定 sg 編號！');
}
return array(

    # 是否使用 Redis 當資料快取 (資料優先於 NFS)
    'RedisCache' => array(
        'enabled' => 1,
        'db' => 0,
        'name' => "sg{$sg}",
        'host' => '127.0.0.1',
        'port' => 6379,
    ),

    # 是否使用 NFS 當資料快取
    'NFSCache' => array(
        'enabled' => 0,

        # 與 pathData 相同
        'path' => "/home/service4_data/javadata{$sg}/",
    ),

    # 是否使用 DB 當資料快取 ( DB的諸多限制, 停止使用)
    'DBCache' => array(
        'enabled' => 0,
        'host' => '127.0.0.1',
        'dbname' => 'sg0',
        'user' => 'root',
        'password' => '',
        'character' => 'UTF8',
    ),
);