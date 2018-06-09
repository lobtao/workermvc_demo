<?php
/**
 * Created by lobtao.
 * Date: 2018/6/10
 * Time: 上午1:23
 */

/**
 * Log 配置
 */
return [
    // 日志记录方式，内置 file socket 支持扩展
    'type'             => 'file',
    'host'             => '',
    //日志强制记录到配置的client_id
    'force_client_ids' => [],
    //限制允许读取日志的client_id
    'allow_client_ids' => [],
    // 日志保存目录
    'path'             => LOG_PATH,
    // 日志记录级别
    'level'            => ['emergency', 'alert', 'critical', 'warning', 'notice', 'info', 'debug', 'sql', 'error'],
];