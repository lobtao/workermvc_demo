workermvc的使用示例代码


首次运行,执行下面命令,下载最新依赖包
composer install

ab性能测试

ab -c10 -n1000 -k http://127.0.0.1:8080/index/index/db

Requests per second:    5817.64 [#/sec] (mean)