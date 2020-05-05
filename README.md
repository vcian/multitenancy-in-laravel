<h2 align="center">Multitenancy in laravel</h2>

### Installation

<ul>
	<li><code>composer install</code></li>
	<li>Doesn't .env file into root folder then please copy from .env.example to .env <code>cp .env.example .env</code></li>
</ul>

### Setup database into environment file

Make changes in the .env file remove DB_DATABASE line and Add new information like:
<ul>
	<li><code>LANDLORD_DB_CONNECTION=tenant</code></li>
    <li><code>LANDLORD_DB_HOST=127.0.0.1</code></li>
    <li><code>LANDLORD_DB_PORT=3306</code></li>
    <li><code>LANDLORD_DB_DATABASE=landlord</code></li>
    <li><code>LANDLORD_DB_USERNAME=YOUR DB USERNAME</code></li>
    <li><code>LANDLORD_DB_PASSWORD=YOUR DB PASSWORD</code></li>
</ul>

## Steps
1.create migration and add tenants table in defoult database
<ul>
	<li><code>php artisan migrate --database=landlord --path=database/migrations/landlord</code></li>
</ul>

2.add seed and database information in tenants table
<ul>
	<li><code>php artisan migrate:fresh --database=landlord --path=database/migrations/landlord --seed</code></li>
</ul>  

make new command for all migration in specific tenant or in all tenants 

3.in all tenants migrate database
<ul>
	<li><code>php artisan tenants:migrate</code></li>
</ul>  

4.if you want  in all tenants fresh and migate database in all tenants
<ul>
	<li><code>php artisan tenants:migrate --fresh</code></li>
</ul>  

5.if you want  in all tenants fresh and migate and seed database in all tenants
<ul>
	<li><code>php artisan tenants:migrate --fresh --seed</code></li>
</ul>  

6.if you want specific tenant migrate database
<ul>
	<li><code>php artisan tenants:migrate laravel</code></li>
</ul>  
