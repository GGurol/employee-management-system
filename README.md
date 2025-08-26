1-downlaod repo from https://github.com/sahabuddin123/Employee-Management-System-v2
( or fixed version of it from here)

2-create a docker file/folder system.

3-move downloaded repo files into src/ folder on your docker filesystem

4-create docker-compose.yml file

5-create Dockerfile for php extensions for laravel6

6-create .env file based on docker yml file.

7-"""docker compose up --build"""

8-missing composer and components:

    delete composer.lock file
    docker compose exec app composer install
    
9-persmission and ownership commands:

    sudo chown -R {your_username}:{your_username} .
    sudo chown -R www-data:www-data src/storage src/bootstrap/cache
    
    
10-new key generate for .env file:

    docker compose exec app php artisan key:generate
    
    
----http://localhost:8082---
    
    
11-fix missing route for "admin/" path on routes/web.php

12-run migrate and seeder:

    docker compose exec app php artisan migrate or
    docker compose exec app php artisan migrate:fresh
        -it will give multiple errors. Reason: migrate files probable created manually, datatypes and order of files are wrong.fixed
    
    //fill the tables
    docker compose exec app php artisan migrate:fresh --seed
        -it will give multiple error. Reason: DatabaseSeeder.php has missing entires. Also seeder files missing too. fixed.
        
        
    *** if you get seeding errors;
        -docker compose exec app composer dump-autoload
        -docker compose exec app php artisan migrate:fresh --seed
        
13-now you can login with seeded admin info. ( database/seeds/AdminTableSeeder.php )

14-login into http://localhost:8082
