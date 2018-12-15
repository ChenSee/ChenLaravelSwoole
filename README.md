### readme

```shell
composer install
php artisan migrate # 导入表
php artisan key:generate --ansi # 初始化 laravel Key
php artisan jwt:secret # 初始化 jwt Key
php -r "file_exists('.env') || copy('.env.example', '.env');" # 配置文件生成
php artisan serve # 普通运行
php artisan laravels {start|stop|restart|reload|publish} # swoole 运行
php artisan db:seed  # 导出数据
php artisan code:models # 根据数据库生成model
```