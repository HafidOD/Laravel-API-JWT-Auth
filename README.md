<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel 8 y JWT-Auth API

## Inicar el proyecto
<pre>
composer install
</pre>

<pre>
php artisan key:generate
</pre>

<pre>
mysql> CREATE DATABASE tu_base_de_datos;
php artisan migrate 
</pre>

<pre>
php artisan migrate 
</pre>

<br></br>

## Si existe error de PDO con conexción a la base de datos
sustituir name_user, password
<pre>
mysql> CREATE USER [name_user]@localhost identified with mysql_native_password by '[password]';

mysql> GRANT ALL PRIVILEGES ON *.* TO '[name_user]'@'localhost';
</pre>
