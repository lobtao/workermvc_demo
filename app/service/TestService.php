<?php
/**
 * Created by lobtao.
 * Date: 2018/6/7
 * Time: 下午6:39
 */

namespace app\service;


class TestService {

    static $iCount = 1;

    static function test() {
        return 'test1';
    }

    function index() {
        return 'index方法被调用了';
    }
}