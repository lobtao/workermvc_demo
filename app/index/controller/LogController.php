<?php
/**
 * Created by lobtao.
 * Date: 2018/6/10
 * Time: 上午1:06
 */

namespace app\index\controller;


use workermvc\Log;

class LogController {

    /**
     * Log配置
     */
    function index() {
        return config('log');
    }

    /**
     * 异常报错
     */
    function error() {
        Log::error('出错了');
    }

    /**
     * 调试记录
     */
    function debug() {
        Log::info('debug记录');
    }

    /**
     * 日志
     */
    function info() {
        Log::info('Info记录');
    }
}