<?php 
if($_SERVER['HTTP_HOST'] != 'localhost'){
  $TYPE = 'https://';
}else{
  $TYPE = 'http://';
}
define('BASEURL', $TYPE . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])));

$DATABASE_URL=parse_url('postgres://bsbdslkinfdxdx:22405628b608bea73b5003a0f40a788881db8b9d61ea2595dc97f0e37b386a2e@ec2-3-211-48-92.compute-1.amazonaws.com:5432/dehvmki0abmqt3');

define('DB_DRIVER', 'pgsql');
define('DB_HOST', $DATABASE_URL["host"]);
define('DB_PORT', $DATABASE_URL["port"]);
define('DB_NAME', ltrim( $DATABASE_URL["path"],"/");
define('DB_USER',  $DATABASE_URL["user"]);
define('DB_PASS',  $DATABASE_URL["pass"]);
