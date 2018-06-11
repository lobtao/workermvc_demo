<?php
/**
 * 测试Http服务
 * Created by lobtao.
 * Date: 2018/5/26
 * Time: 上午4:37
 */

namespace app\server;

use think\Cache;
use think\Db;
use Workerman\Connection\TcpConnection;
use Workerman\Worker;
use workermvc\server\BaseServer;
use workermvc\Session;

class HttpServer extends BaseServer {

    /**
     * @var Worker
     */
    protected $worker;
    protected $socket = '';
    protected $protocol = 'http';
    protected $hostname = '0.0.0.0';
    protected $hostport = '8081';
    protected $count = 4;
    protected $name = 'HttpServer';
    protected $max_request_restart = true;
    protected $max_request_limit = 1000;

    /**
     * @param TcpConnection $connection
     * @param $data
     */
    public function onMessage($connection, $data) {
        $connection->send('Hello World, http server');
    }

}