<?php
/**
 * Cache操作示例
 * Created by lobtao.
 * Date: 2018/5/29
 * Time: 上午12:05
 */

namespace app\index\controller;


class CacheController {

    /**
     * 读取缓存配置
     * @return array|bool|mixed|null
     */
    function index() {
        return config('cache');
    }

    /**
     * 设置缓存
     * @return mixed
     */
    function set() {
        return \think\Cache::set('name', '哈哈');
    }

    /**
     * 读取缓存
     * @return mixed
     */
    function get() {
        return \think\Cache::get('name');
    }
}