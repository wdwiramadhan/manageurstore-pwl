<?php 
if($_SERVER['HTTP_HOST'] != 'localhost'){
  $TYPE = 'https://';
}else{
  $TYPE = 'http://';
}
define('BASEURL', $TYPE . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])));

$DATABASE_URL=parse_url('postgres://kwjegjqlvxsumw:6ed8f56052aa234c3681bb54935ae261be95f4c14618bb1bae523ecf23c059b0@ec2-54-165-36-134.compute-1.amazonaws.com:5432/d6jldq50fef8ug
');

define('DB_HOST', $DATABASE_URL["host"]);
define('DB_PORT', $DATABASE_URL["port"]);
define('DB_NAME', ltrim( $DATABASE_URL["path"],"/");
define('DB_USER',  $DATABASE_URL["user"]);
define('DB_PASS',  $DATABASE_URL["pass"]);
