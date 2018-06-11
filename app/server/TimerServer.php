<?php
/**
 * 测试定时进程
 * Created by lobtao.
 * Date: 2018/6/11
 * Time: 下午5:26
 */

namespace app\server;


use Workerman\Lib\Timer;
use Workerman\Worker;
use workermvc\server\BaseServer;

class TimerServer extends BaseServer {

    protected $worker;
    protected $socket = '';
    protected $protocol = '';
    protected $hostname = '';
    protected $hostport = '';
    protected $count = 1;
    protected $name = 'TimerServer';
    protected $max_request_restart = true;
    protected $max_request_limit = 1000;

    /**
     * @param Worker $worker
     */
    function onWorkerStart($worker) {
        //5秒走一波
        Timer::add(5, function () {
            echo 'timer ' . date('Y-m-d H:i:s', time()) . PHP_EOL;
        });
    }

}