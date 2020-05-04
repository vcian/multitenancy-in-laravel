<h2 align="center">Multitenancy in laravel</h2>
## About Laravel

make changes in the .env file remove DB_DATABASE line and Add new information like:
- LANDLORD_DB_CONNECTION=tenant
- LANDLORD_DB_HOST=127.0.0.1
- LANDLORD_DB_PORT=3306
- LANDLORD_DB_DATABASE=landlord
- LANDLORD_DB_USERNAME=YOUR DB USERNAME
- LANDLORD_DB_PASSWORD=YOUR DB PASSWORD

## Steps
1.create migration and add tenants table in defoult database
##### php artisan migrate --database=landlord --path=database/migrations/landlord

2.add seed and database information in tenants table
##### php artisan migrate:fresh --database=landlord --path=database/migrations/landlord --seed  

all migration in specific tenant or in all tenants we make new command

3.in all tenants migrate database
##### php artisan tenants:migrate

4.if you want  in all tenants fresh and migate database in all tenants
##### php artisan tenants:migrate --fresh

5.if you want  in all tenants fresh and migate and seed database in all tenants
##### php artisan tenants:migrate --fresh --seed

6.if you want specific tenant migrate database
##### php artisan tenants:migrate --fresh --seed
