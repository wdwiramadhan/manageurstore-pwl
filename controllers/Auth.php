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
      $this->_sendNotification("Email or password is incorrect","danger");
      header('Location: '.BASEURL.'/Auth/login');
    }
  }
  public function register(){
    $this->isLoggedIn();
    $data['title'] = 'Register';
    $this->view('auth/register', $data);
  }
  public function _register(){
    if($_POST['password'] != $_POST['password2']){
      $this->_sendNotification("Password did not match","danger");
      header('Location: '.BASEURL.'/Auth/register');
      exit;
    };
    $data = $this->model('UserModel')->store($_POST);
    if($data){
      $this->_sendNotification("Member successfully created","success");
      header('Location: '.BASEURL.'/Auth/login');
      exit;
    };
  }
  public function logout(){
    Session::init();
    Session::destroy();
    header('Location: '.BASEURL.'/Auth/login');
  }
}