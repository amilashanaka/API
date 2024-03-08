# New App:

1. laravel new app_name

2. php artisan sail:install --devcontainer

3. php artisan key:generate 

4. composer require laravel/ui

5. php artisan ui vue --auth

6. npm install

7. npm run dev

https://codeburst.io/how-to-use-laravel-sail-with-the-docker-desktop-wsl-2-backend-3768a126a85

curl -s https://laravel.build/epos | bash

curl -s https://laravel.build/new-sail-application | bash

curl -s [https://laravel.build/e](https://laravel.build/myapp)pos | bash

curl -s [https://laravel.build/posapp](https://laravel.build/myapp) | bash

curl -s [https://laravel.build/b](https://laravel.build/example-app)b_core | bash

[https://winnmp.wtriple.com/](https://winnmp.wtriple.com/)

# commands

//  Start

    * laravel new AppName --auth

    * cd AppName

      composer require infyomlabs/laravel-ui-adminlte

php artisan ui adminlte

php artisan ui adminlte --auth

    * composer require laravel/ui

    * php artisan  key:generate

    * npm install

    * npm run dev

    //8

    composer create-project laravel/laravel=8.0 laravel8app --prefer-dist

    composer create-project laravel/laravel easymart--prefer-dist

//create models

    $ php artisan make:model Admin --migration//Create Factories php artisan make:factory AdminFactory

    * php artisan migrate

    php artisan make:model Models/Promo -m

    php artisan make:model Models/CustomerPromo -m  

    php artisan make:model Models/CartSetting  -m

    php artisan make:model Models/Cart  -m  

    php artisan make:model Models/RecentView  -m

    php artisan make:model Models/CoinReward  -m

    php artisan make:model Models/CoinRewardSettings  -m

      php artisan make:model Models/Laptop -m

// model and controller

       php artisan make:model -mc Form --resource

php artisan make:model -mc Country   --resource

     php artisan make:model -mc Gallery --resource

// Contoller

    php artisan make:controller DeliveryController --resourcephp artisan make:middleware IsAdmin// Admin login

    $ php artisan make:controller Auth/AdminLoginController// Admin register

    $ php artisan make:controller Auth/AdminRegisterController// Admin dashboard$ php artisan make:controller Users/Customer/AdminController// Vendor login

    $ php artisan make:controller Auth/CustomerLoginController// Vendor register$ php artisan make:controller Auth/CustomerRegisterController// Vendor dashboard

    $ php artisan make:controller Users/Vendor/VendorController//

    php artisan make:controller PromoController

    php artisan make:controller PhotoController --resource --model=Photo

    php artisan make:controller SettingController --resource --model=CartSetting

    php artisan make:controller RecentViewController --resource --model=RecentView

    php artisan make:controller CartController --resource --model=Cart

    php artisan make:controller CustomerPromoController --resource --model=Models/CustomerPromo

    php artisan make:controller CoinRewardController --resource --model=Models/CoinReward  

    php artisan make:controller CoinRewardSettingController --resource --model=Models/CoinRewardSettings

    php artisan make:controller DemoController

    php artisan make:controller Api/Ninjavan/DeliveryController

//View Create

    $ touch resources/views/auth/admin-login.blade.php

    $ touch resources/views/auth/admin-register.blade.php

    $ touch resources/views/auth/vendor-login.blade.php

    $ touch resources/views/auth/vendor-register.blade.php

    php artisan db:seed --class=CreateUsersSeedercomposer require bitfumes/laravel-multiauthphp artisan multiauth:[installsuper@admin.com](mailto:installsuper@admin.com) email and password as 'secret123'npm install && npm run devcomposer require laravel/ui --devphp artisan ui bootstrap// orphp artisan ui vue// orphp artisan ui reacthttps://laravel-admin.org/docs/#/

    touch resources/views/auth/seller_forgot_password.blade.php

    touch resources/views/admin/promo_list.blade.php

    touch resources/views/admin/form.blade.php

    touch resources/views/frontend/brands.blade.php

 touch resources/views/sinup_with.blade.php

       touch resources/views/Admin/certified_product.blade.php

// Add column to table

    php artisan make:migration add_store_id_to_users_table --table=users

    php artisan make:migration update_banners --table=banners

    php artisan  make:migration add_seller_type_to_user_table --table=users

    php artisan  make:migration add_shop_banner_to_shops_table --table=shops

    php artisan  make:migration add_shop_about_to_shops_table --table=shops

    php artisan  make:migration add_qty_to_promos_table --table=promos

    php artisan  make:migration alter_ninja_vans_table --table=ninja_vans

    php artisan  make:migration alter_ninja_vans_table --table=ninja_vans

 php artisan  make:migration alter_ninja_vans_table --table=products

      php artisan  make:migration alter_products_table_add_origin   --table=products

    php artisan  make:migration alter_add_picking_time_shippings_table --table=shippings

    php artisan  make:migration alter_add_amount_coin_rewards_table --table=coin_rewards

php artisan  make:migration alter_products_table_add_origin --table=coin_rewards

    $table->integer('shop_type')->unsigned()->nullable()->after('shop-id');

    $table->unsignedBigInteger('customer_id');

        $table->foreign('customer_id')->references('id')->on('customers');

       $table->integer('status')->default('0');

            $table->dateTime('end_date')->nullable();

            $table->dateTime('start_date')->nullable();

            $table->text('name')->nullable();

            $table->longText('name')->nullable();

            $table->string('image');

            $table->unsignedBigInteger('create_by')->nullable();

            $table->foreign('create_by')->references('id')->on('users');

// migration

    php artisan migrate:refresh --path=/database/migrations/2020_11_04_083914_create_promos_table.php

    php artisan make:migration create_buckets_table  --create=buckets

//php artisan migrate:refresh --path=/database/migrations/2020_11_17_062120_create_buckets_table.php

// admin lte

composer require jeroennoten/laravel-adminlte

php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets

php artisan adminlte:install

php artisan make:adminlte

php artisan adminlte:install --type=full

php artisan adminlte:status

php artisan adminlte:install --only=main_views

simplesoftwareio/simple-qrcode 4.2.0 requires ext-gd * -> the requested PHP extension gd is missing from your system.

sudo apt-get install php7.4-gd

sudo apt-get install php7.4-intl

sudo apt-get install php7.4-xsl

php artisan migrate:refresh --path=/database/migrations/2020_12_09_055623_create_ninja_vans_table.php

[How to Implement Multiple Authentication Guards in Laravel 9 - TechvBlogs](https://techvblogs.com/blog/multiple-authentication-guards-laravel-9)

- laravel new multi-guard-auth

- composer require laravel/ui

- php artisan ui bootstrap --auth

- npm install

- ### Configure Database Details:

- php artisan make:model Admin -m

# Passport

php artisan passport:keys

```bash
php artisan cache:clear
```

sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache

php artisan optimize:clear

git rm -r --cached .
git add .
git commit -m "fixed untracked files"

php artisan cache:clear

php artisan migrate:refresh --seed

# Model:

php artisan make:model Flight --migration

```cil
# Generate a model and a FlightFactory class...
php artisan make:model Flight --factory
php artisan make:model Flight -f

# Generate a model and a FlightSeeder class...
php artisan make:model Flight --seed
php artisan make:model Flight -s

# Generate a model and a FlightController class...
php artisan make:model Flight --controller
php artisan make:model Flight -c

# Generate a model, FlightController resource class, and form request classes...
php artisan make:model Flight --controller --resource --requests
php artisan make:model Flight -crR

# Generate a model and a FlightPolicy class...
php artisan make:model Flight --policy

# Generate a model and a migration, factory, seeder, and controller...
php artisan make:model Flight -mfsc

# Shortcut to generate a model, migration, factory, seeder, policy, controller, and form requests...
php artisan make:model Flight --all

# Generate a pivot model...
php artisan make:model Member --pivot
php artisan make:model Member -p
```

samples 

```clike
 php artisan make:model Address -mfsc
```

inspecting model 

```
php artisan model:show User
```

# Passport

```cli
php artisan passport:keys
```

```cli
php artisan passport:install
```

# Mail

env 

```env
QUEUE_CONNECTION=database
```

cmd

```cil
php artisan queue:listen
```

model and migration

```cli
php artisan make:model loyalty -m
```

```
php artisan module:make-model Loyalty V2 
```

create migration 

```cil
php artisan make:migration create_loyalty_table
```
