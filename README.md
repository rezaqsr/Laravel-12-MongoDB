


<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200">
<img src="https://en.vetores.org/d/mongodb.svg" width="200" alt="">

<h2>
CRUD Operations Using Laravel 9 & MongoDB
</h2>
<p>
just a Simple Template For CRUD Operations Using Laravel 9 , Mongodb & materialize css.
</p>
<br>
<h2>
instruction
</h2>
<h4>Step 1 : Install MongoDB</h4>
Use this <a href="https://www.mongodb.com/docs/manual/tutorial/">tutorial</a> for Installation
<br>
<small>note : you should add mongodb extension to php.ini </small>
<a href="https://www.php.net/manual/en/mongodb.installation.windows.php">tutorial</a>

<h4>Step 2 : MongoDB Database Configuration</h4>

open .env file and fill all details like this
<pre>
MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=bookDB // or any name you want
MONGO_DB_USERNAME= //DB Username (Leave it blank if you have not set it)
MONGO_DB_PASSWORD= //DB Password (Leave it blank if you have not set it)
</pre>

<h4>Step 3 : Install Composer Packages</h4>
<pre>
composer install
</pre>

<h4>Step 4 : Run Server </h4>
<pre>
php artisan serve
</pre>
