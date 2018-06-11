<?php
/**
 * 视图操作示例
 * Created by lobtao.
 * Date: 2018/6/10
 * Time: 下午5:16
 */

namespace app\index\controller;


use think\Db;
use workermvc\Controller;

class ViewController extends Controller{

    /**
     * 获取所有配置
     * @return array|bool|mixed|null
     */
    function index(){
        return config('tpl');
    }

    /**
     * 渲染母版视图
     * @return null|string
     * @throws \Error
     * @throws \Exception
     */
    function tpl() {
        $data = Db::query('select * from tb_test');

        return $this->fetch('index@index/tpl', [
            'data' => $data,
        ]);
    }
}