<?php
/**
 *  ThinkWorker - THINK AND WORK FAST
 *  Copyright (c) 2017 http://thinkworker.cn All Rights Reserved.
 *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 *  Author: Dizy <derzart@gmail.com>
 */

/**
 *  Redis Settings
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