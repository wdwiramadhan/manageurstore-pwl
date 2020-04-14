<?php 

class Authenticate{
  public static function isLoggedIn(){
    Session::init();
    if (!isset($_SESSION['user_logged_in'])) {
      Session::destroy();
      header('location: ' . BASEURL . '/Auth/login');
    }
  }
}