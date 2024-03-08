1. Install new laravel app 
   
   ```
   composer global require laravel/installer
   ```
   
   ```cil
   laravel new  api
   ```

2. test your app 

3. 
4.  install passport 
   
   ```
   
   composer require laravel/passport
   
   
   php artisan passport:install
   ```

5. Add function to  AppServiceProvider.php
   
   ```
   use Illuminate\Support\Facades\Schema;
   
   public function boot()
   {
       Schema::defaultStringLength(191); // Adjust the value according to your MySQL version
   }
   ```

6. migrate 
   
   ```
   php artisan migrate
   ```

7. create customer model 

```
php artisan make:model Customer --migration --controller --seed
```

5.1 edit customer model 

```php

```


