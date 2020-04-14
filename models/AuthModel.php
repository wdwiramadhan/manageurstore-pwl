<?php

class AuthModel{
  private $table = 'users';
  private $db;

  public function __construct(){
      $this->db = new Database;
  }
  public function getUserByEmail($email){
    $this->db->query('SELECT * FROM '.$this->table. ' WHERE email=:email');
    $this->db->bind('email', $email);
    return $this->db->single();
  }
  public function auth($data)
  {    
      $email = $data['email'];
      $password = $data['password'];
      $set_remember_me_cookie = $data['remember_me'];
      $results = $this->getUserByEmail($email);
      if($results){
        $verify = password_verify($password, $results['password']);
        if($verify){
          Session::init();
          Session::set('user_logged_in', true);
          Session::set('id', $results['id']);
          Session::set('name', $results['name']);
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
  }
}