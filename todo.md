

Create a screen

- [ ] Route
    - routes/web.php
- [ ] Controller
    - create controller using artisan command
    - php artisan make:controller UserController --resource --model=User --force
- [ ] View
    - create views

Artisan Commands

- [ ] Display list of routes: `php artisan route:list --path=users`


In resources/views...

navigation-menu.blade.php
    - [ ] Add link to user listing

users/create.blade.php

    - [ ] Form
        - method
        - csrf
        - action
    - [ ] Inputs
    - [ ] Submit button


php artisan make:model Post -a
define route in routes/web.php
create views
create migration
create factory
create seeder
seed data
...




Create a screen

- [ ] Route & Controller
    - routes/web.php
    - php artisan make:controller PostController --resource

Create a screen for CRUD

- [x] Route
    - [x] routes/web.php -> Route::resource('posts', PostController);
    - [x] Verify route has post routes: php artisan route:list --name=posts
- [x] Controller
- [x] Model
- [x] Migration
- [x] Factory
- [x] Seeder
    - php artisan db:seed --class=PostSeeder

php artisan make:model Post -a