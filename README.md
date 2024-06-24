composer install --ignore-platform-reqs
composer install
cp .env.example .env
php artisan migrate --seed
php artisan key:generate
php artisan storage:link
php artisan serve
![image](https://github.com/amrito502/PRF-Leave-management-system/assets/86122901/fae71bde-3677-47f6-b185-35021432f996)

![image](https://github.com/amrito502/PRF-Leave-management-system/assets/86122901/cc029dc8-d300-43f9-9102-dd07e68d17fa)
