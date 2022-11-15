# connect-starter-template-laravel

This is a template that can be used by developers to integrate a laravel project with new dashboard.

## Image
![Alt text](/mosaic/img/template.png?raw=true)


## Setup

##### 1. Install Laravel via composer
```
open terminal 
cd Desktop
composer create-project laravel/laravel:^8.0 example-app
Open new project in your preferred IDE

```

##### 2. Add Sqllite Test DB
```
The database is setup by default to use sqlite on local, deploy it by creating a database.sqlite file in database/ directory and add to .env(root):
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

php artisan migrate
```

##### 3.Replace package.json file in root directory of project
```
npm install 
npm run dev
```

##### 4. Add SSO login to laravel project
[https://github.com/gray-television/laravel-package-g-authentication].

##### 5. Install laravel Telescope
```
composer require laravel/telescope
php artisan telescope:install
php artisan migrate

```

##### 6. Add middleware and update telescopeServiceProdvider(For production use.)

```
Middleware
-----------------
Add TelescopeMiddleware.php to app/Http/Middleware directory
Add TelescopeServiceProvider.php to app/Providers directory
Update config/telescope.php:

    'middleware' => [
        'web',
        Authorize::class,
    ],
    
    TO
    
    'middleware' => [
      'web',
      TelescopeMiddleware::class
    ],
```

##### 7. Add installtion files to integrate template with laravel

```
Replace tailwind.config.js in root(/) with template verison

Add banner.php, header.php, sidebar.php to app/View/Components directory

Add img folder to public directory(/)

Add DashboardController.php to app/Http/Controllers directory

Add custom-sweet-alerts.js to public/js directory 

Replace resources/css folder with provided "css" folder

Add layout.blade.php file to resources/views directory

Add index.blade.php file to resources/views/dashboard directory

Add header.blade.php, sidebar.blade.php, and banner.blade.php to resources/views/components directory

Add web.php to routes(root) directory

run "npm run dev"

php artisan serve
```
## Notes
* This HTML template is shipped with the (Tailwind CLI tool)[https://tailwindcss.com/docs/installation].
* View full template at [https://preview.cruip.com/mosaic/index.html]
* Template source code [https://github.com/gray-television/mosaic-template-html]
* Icons used by template [https://tablericons.com/]
* SweetAlert2 Docs [https://sweetalert2.github.io/]
