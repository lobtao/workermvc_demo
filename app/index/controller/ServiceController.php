<?php
/**
 * 提供Rpc服务接口
 * Created by lobtao.
 * Date: 2018/6/7
 * Time: 下午9:03
 */

namespace app\index\controller;


use lobtao\tp5helper\RpcController;

class ServiceController extends RpcController {

    function index() {
        return $this->handle('app\\service\\');
    }
}