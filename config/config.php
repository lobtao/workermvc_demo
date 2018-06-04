<?php
/**
 *  ThinkWorker - THINK AND WORK FAST
 *  Copyright (c) 2017 http://thinkworker.cn All Rights Reserved.
 *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 *  Author: Dizy <derzart@gmail.com>
 */

return [

    /**
     *  Workerman Engine Settings
     */
    'worker'   => [
        'protocol'            => 'http',
        'hostname'            => '0.0.0.0',
        'hostport'            => 8080,
        'count'               => 8,
        'name'                => 'WorkerMVC',

//        'ssl'                 => false,
//        'ssl_local_cert'      => '/etc/nginx/conf.d/ssl/server.pem',
//        'ssl_local_pk'        => '/etc/nginx/conf.d/ssl/server.key',
//        'ssl_verify_peer'     => false,

        'max_request_restart' => true,
        'max_request_limit'   => 1000,

        'debug'               => true,
        /**
         * 检测app文件夹内文件变动自动重启服务
         */
        'debug_dirs'          => [
            APP_PATH,
        ],
    ],

    /**
     *  ThinkWorker Basic Settings
     */
    'think'    => [
        'debug'                        => true,//显示详细错误信息
        'tracing_max_lines'            => false,
        'default_filter'               => '',

        'app_namespace'                => 'app',
        'deny_app_list'                => ['common'],
        'default_app'                  => 'index',//默认模块
        'default_controller'           => 'Index',//默认控制器
        'default_action'               => 'index',//默认方法
        'default_lang'                 => 'zh-cn',//默认语言
        'auto_lang'                    => true,
        'var_lang'                     => '_lang',
        'controller_suffix'            => true,//控制器类后缀

        'default_return_array_encoder' => 'json',//默认返回值类型
        'jsonp_handler_setting_var'    => 'callback',
        'default_jsonp_handler'        => 'jsonpReturn',
        'xml_root_node'                => 'think',
        'xml_root_attr'                => '',
        'xml_item_node'                => 'item',
        'xml_item_key'                 => 'id',
    ],

    /**
     *  Template Engine Settings
     */
    'template' => [
        'view_path'          => '', // 模板路径
        'view_base'          => '',
        'view_suffix'        => 'php', // 默认模板文件后缀
        'view_depr'          => DIRECTORY_SEPARATOR,
        'cache_path'         => '',
        'cache_suffix'       => 'php', // 默认模板缓存后缀
        'tpl_deny_func_list' => 'echo,exit', // 模板引擎禁用函数
        'tpl_deny_php'       => false, // 默认模板引擎是否禁用PHP原生代码
        'tpl_begin'          => '{', // 模板引擎普通标签开始标记
        'tpl_end'            => '}', // 模板引擎普通标签结束标记
        'strip_space'        => false, // 是否去除模板文件里面的html空格与换行
        'tpl_cache'          => true, // 是否开启模板编译缓存,设为false则每次都会重新编译
        'compile_type'       => 'file', // 模板编译类型
        'cache_prefix'       => '', // 模板缓存前缀标识，可以动态改变
        'cache_time'         => 0, // 模板缓存有效期 0 为永久，(以数字为值，单位:秒)
        'layout_on'          => false, // 布局模板开关
        'layout_name'        => 'layout', // 布局模板入口文件
        'layout_item'        => '{__CONTENT__}', // 布局模板的内容替换标识
        'taglib_begin'       => '{', // 标签库标签开始标记
        'taglib_end'         => '}', // 标签库标签结束标记
        'taglib_load'        => true, // 是否使用内置标签库之外的其它标签库，默认自动检测
        'taglib_build_in'    => 'cx', // 内置标签库名称(标签使用不必指定标签库名称),以逗号分隔 注意解析顺序
        'taglib_pre_load'    => '', // 需要额外加载的标签库(须指定标签库名称)，多个以逗号分隔
        'display_cache'      => false, // 模板渲染缓存
        'cache_id'           => '', // 模板缓存ID
        'tpl_replace_string' => [],
        'tpl_var_identify'   => 'array', // .语法变量识别，array|object|'', 为空时自动识别
        'default_filter'     => 'htmlentities', // 默认过滤方法 用于普通标签输出
    ],

    /**
     *  Cookie Settings
     */
    'cookie'   => [
        'prefix'   => '',
        'expire'   => 0,
        'path'     => '/',
        'domain'   => '',
        'secure'   => false,
        'httponly' => '',
    ],

    /**
     *  Session Settings
     */
    'session'  => [
        'driver'     => 'file',
        'auto_start' => true,
        'prefix'     => '',
    ],

    /**
     *  Log Settings
     */
    'log'      => [
        // 日志记录方式，内置 file socket 支持扩展
        'type'             => 'socket',
        'host'             => 'yssoft.cn',
        //日志强制记录到配置的client_id
        'force_client_ids' => ['xt'],
        //限制允许读取日志的client_id
        'allow_client_ids' => ['xt'],
        // 日志保存目录
        'path'             => LOG_PATH,
        // 日志记录级别
        'level'            => ['error'],
    ],
];