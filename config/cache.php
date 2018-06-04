<?php
/**
 * Created by lobtao.
 * Date: 2018/5/25
 * Time: 下午10:44
 */

/**
 *  Redis 配置
 */
return [
    // 驱动方式（支持file/memcache/redis/xcache/wincache/sqlite）
    'type'       => 'redis',
    // 缓存保存目录
    'path'       => CACHE_PATH,
    'host'       => '127.0.0.1',
    'port'       => 6379,
    'password'   => '778899',
    'select'     => 0,
    'timeout'    => 0,
    'expire'     => 0,
    'persistent' => false,
    'prefix'     => '',
];