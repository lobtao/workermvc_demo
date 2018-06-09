<?php
/**
 * Created by lobtao.
 * Date: 2018/6/10
 * Time: 上午12:32
 */

namespace app\index\controller;


class SessionController {

    /**
     * Session配置
     * @return array|bool|mixed|null
     */
    function index() {
        return config('session');
    }

    /**
     * session设置
     * @return bool|mixed|null
     */
    function set() {
        return session('name', 'hello WorkerMVC');
    }

    /**
     * session读取
     * @return bool|mixed|null
     */
    function get() {
        return session('name');
    }
}