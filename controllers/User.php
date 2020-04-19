<?php 
class User extends Controller{
  public function __construct(){
    Authenticate::isLoggedIn();
  }
  public function index(){
    $data['user'] = $this->model('UserModel')->getAll();
    $this->view('layouts/header', ['title' => 'User']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('user/index', $data);
    $this->view('layouts/footer');
  }
  public function create(){
    $this->view('layouts/header', ['title' => 'user']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('user/create');
    $this->view('layouts/footer');
  }
  public function store(){
    $data = $this->model('UserModel')->store($_POST);
    if($data){
      $this->_sendNotification("Admin berhasil ditambahkan","success");
      header('Location: '.BASEURL.'/User');
      exit;
    }
  }
  public function edit($id){
    $data = $this->model('UserModel')->getById($id);
    $this->view('layouts/header', ['title' => 'Barang']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('user/edit', $data);
    $this->view('layouts/footer');
  }
  public function update($id){
    $data = $this->model('UserModel')->update($id, $_POST);
    if($data){
      $this->_sendNotification("Admin berhasil diupdate","success");
      header('Location: '.BASEURL.'/User');
      exit;
    }
  }
  public function delete($id){
    $data = $this->model('UserModel')->delete($id);
    if($data){
      $this->_sendNotification("Admin berhasil dihapus","success");
      header('Location: '.BASEURL.'/Admin');
      exit;
    }
  }
}