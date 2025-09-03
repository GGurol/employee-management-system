### Employe Manegement System ###

#Clone The Repository:
```
git clone https://github.com/GGurol/employee-management-system.git
cd employee-management-system
```

#Delete composer contents
```
rm -rf composer.lock``` #delete composer.lock file
```

#Permission and Ownership Laravel Spesific File/Folders
```
sudo chown -R {your_username}:{your_username} .
sudo chown -R www-data:www-data src/storage src/bootstrap/cache`
```

#Docker:
```
docker compose up --build -d
```

#Install Composer and components:
```
docker compose exec app composer install
```
    
#Generate new key
```
docker compose exec app php artisan key:generate
```
    
#Database Migrations:
```
docker compose exec app php artisan migrate:fresh
docker compose exec app php artisan migrate:fresh --seed
```
    *** if you get seeding errors;
    ```
    docker compose exec app composer dump-autoload
    docker compose exec app php artisan migrate:fresh --seed
    ```

#Visit:
```
http://localhost:8082
```

#Login:
    now you can login with seeded admin info. ( src/database/seeds/AdminTableSeeder.php )

    
    
