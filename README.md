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
php artisan make:model User -crm # 生成model
php artisan api:routes # 查看路由
php artisan migrate:fresh --seed # 删除所有表 & 迁移
php artisan api:docs --name API --output-file storage/app/api.md # 导出文档
php artisan make:migration create_name_table # 创建表


php artisan db:seed --class="Moell\Mojito\Database\MojitoTableSeeder"
npm run production
# 后台登陆地址为 http://localhost/admin/login
# 账号 admin@gmail.com
# 密码 secret
```
