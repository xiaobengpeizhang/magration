### 工作流系统的数据库创建工程

* 基于laravel框架，通过代码创建数据表
* 创建一些基本的工作流系统模型
* 创建migration文件时候执行php artisan命令时，一定注意加上后缀 --create=[数据表名],否则执行迁移命令时会报错。

> <code>php artisan make:migration create_user_table --create=users</code>