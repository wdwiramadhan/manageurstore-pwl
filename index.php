<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once './Router.php';
require_once './controllers/Controller.php';
require_once './models/Database.php';
require_once './config.php';
require_once './utility/Session.php';
require_once './utility/Authenticate.php';

$router = new Router;
