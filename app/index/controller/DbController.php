<?php
/**
 * Created by lobtao.
 * Date: 2018/6/10
 * Time: 上午12:06
 */

namespace app\index\controller;


use think\Db;

class DbController {

    /**
     * 缓存配置
     * @return array|bool|mixed|null
     */
    function index() {
        return config('database');
    }

    /**
     * 增加
     * @return string
     */
    function insert() {
        return Db::name('test')->insert([
            'fname' => 'WorkerMVC ' . time(),
            'ftime' => date('Y-m-d H:i:s', time()),
        ]);
    }

    /**
     * 删除
     * @return int
     */
    function delete() {
        return Db::name('test')->where([
            'fid' => 1,
        ])->delete();
    }

    /**
     * 修改
     * @return int|string
     */
    function update() {
        return Db::name('test')->where([
            'fid' => 2,
        ])->update([
            'fname' => 'test' . time(),
        ]);
    }

    /**
     * 查询
     * @return array|\PDOStatement|string|\think\Collection
     */
    function select() {
        return Db::name('test')->select();
    }

    /**
     * 查询配置
     * @return mixed
     */
    function query() {

        return Db::query('select * from tb_test');
    }
}