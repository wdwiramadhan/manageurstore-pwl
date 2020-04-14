<?php 
if($_SERVER['HTTP_HOST'] != 'localhost'){
  $TYPE = 'https://';
}else{
  $TYPE = 'http://';
}
define('BASEURL', $TYPE . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])));

//db
define('DB_HOST', 'localhost');
define('DB_NAME', 'weblanjut');
define('DB_USER', 'heyboy');
define('DB_PASS', '123123123');
