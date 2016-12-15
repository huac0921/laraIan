# Laravel 5.3 PHP Framework
> 架构之路
- 20161214 下载了laravel最新版本5.3
## 中间件
php artisan make:middleware XXX,生成中间件，在目录Http/Middleware下，然后在Http/Kernel下注册中间件。
在指定路由分配中间件，进行过滤。
## 视图
Blade 模版中{{ }}会自动调用PHP的htmlentities 转义数据，防止xss攻击。
不想被转义，比如保留换行<br> 可以使用 {{!! !!}}

