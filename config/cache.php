<?php

return [
    // 驱动方式
    'type'   => 'redis',
    // 缓存保存目录
    'path'   => '',
    // 缓存前缀
    'prefix' => '',
    // 缓存有效期 0表示永久缓存
    'expire' => 0,

    'host'       => '127.0.0.1',
    'port'       => 6379,
    'password'   => 'xsailxma',
    'select'     => 0,
    'timeout'    => 0,
    'persistent' => false,
    'serialize'  => true,
];
