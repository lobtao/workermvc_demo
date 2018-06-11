<?php
/**
 * 测试Rpc服务
 * Created by lobtao.
 * Date: 2018/6/7
 * Time: 下午6:39
 */

namespace app\service;

class TestService {

    static $iCount = 1;

    static function test() {
        return 'test 方法被调用了';
    }

    function index() {
        return 'index方法被调用了';
    }
}