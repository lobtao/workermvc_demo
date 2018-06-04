workermvc的使用示例项目代码

workermvc 是一个基于 workerman 的 mvc 框架，使用thinkphp5的composer包,使用习惯
尽量做到原来的配方、原来的味道

首次运行,执行下面命令,下载最新依赖包

1. composer install

2. php start.php start




机器配置mac pro 2017,i5cpu,8G内存

一. ab性能测试单表数据库查询

ab -c10 -n1000 -k http://127.0.0.1:8080/index/index/db

Requests per second:    5817.64 [#/sec] (mean)


二. ab性能测试hello world输出

ab -c10 -n1000 -k http://127.0.0.1:8080/index/index/index

Requests per second:    11722.78 [#/sec] (mean)