<?php
/**
 * Created by lobtao.
 * Date: 2018/5/29
 * Time: 上午12:05
 */

namespace app\index\controller;


class CacheController {

    function index() {
        return 'cache.index';
    }

    function set() {
        return \think\Cache::set('name', '哈哈');
    }

    function get() {
        return \think\Cache::get('name');
    }
}