<?php
/**
 * Created by lobtao.
 * Date: 2018/5/25
 * Time: 下午10:44
 */

namespace app\index\controller;

use think\Db;
use think\Template;
use workermvc\Controller;

class IndexController extends Controller {

    function index() {
        return 'hello WorkerMvc';
    }

    /**
     * 获取参数示例
     * @return mixed
     */
    function input() {
        return input('get.name', 'test');

        return $this->request->getMethod();

        // input 获取参数值
        return input('?get.name', 'test');

        // 通过request获取参数值
        return $this->request->get('name', 'test');
    }

    /**
     * 网址跳转
     */
    function redirect() {
        $this->response->redirect('http://127.0.0.1:8080/index/index/dest');
    }

    function url() {
        // 生成网址,支持伪静态处理
        return url('index@index/index', ['name' => 'xiao'], true, true);
    }
}