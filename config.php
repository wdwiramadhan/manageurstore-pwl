<?php 

function base_url(){
  $url = 'http://'. $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME']));
  return rtrim($url,'/');
}

define('BASEURL', base_url());
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'weblanjut');
define('DB_USER', 'heyboy');
define('DB_PASS', '123123123');
