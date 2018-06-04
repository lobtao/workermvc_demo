<?php
/**
 * Created by lobtao.
 * Date: 2018/5/25
 * Time: 下午10:44
 */

namespace app\Index\controller;


use think\Db;
use think\Template;
use workermvc\Controller;

class IndexController extends Controller {
    function index() {
        return 'hello world';
    }

    function test() {
        return 'test1';
    }

    function set() {
        return session('name', 'test');
    }

    function get() {
        return session('name');
    }

    function db() {
        $data = Db::query('select * from tb_test');
        return $data;
    }

    function files() {
        return count(get_included_files());
    }

    function tpl() {
        $data = Db::query('select * from tb_test');
        return $this->fetch('index@index/tpl', [
            'data' => $data,
        ]);
    }

    function config() {
        return config();
    }

    function bigData() {

        return 'bigData' . date('Y-m-d H:i:s', time());
    }

    function calc(){
        return 1&2&4*6;
    }

    function dest(){
        return '目标页面';
    }

    function redirect(){
        $this->resp->redirect('http://127.0.0.1:8080/index/index/dest');
    }
}