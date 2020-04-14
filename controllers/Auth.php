<?php
class Auth extends Controller{
  public function isLoggedIn(){
    Session::init();
    if(Session::get('user_logged_in')){
      header('Location: '.BASEURL.'/Dashboard');
    }
  }
  public function login(){
    $this->isLoggedIn();
    $data['title'] = 'Login';
    $this->view('auth/login', $data);
  }
  public function _login(){
    $login = $this->model('AuthModel')->auth($_POST);
    if($login){
      header('Location: '.BASEURL.'/Dashboard');
    }else{
      header('Location: '.BASEURL.'/Auth/login');
    }
  }
  public function register(){
    $this->isLoggedIn();

  }
  public function store(){

  }
  public function logout(){
    Session::init();
    Session::destroy();
    header('Location: '.BASEURL.'/Auth/login');
  }
}