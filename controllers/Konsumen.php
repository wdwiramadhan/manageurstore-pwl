<?php

class Konsumen extends Controller{
  public function __construct(){
    Authenticate::isLoggedIn();
  }
  public function index(){
    $data['konsumen'] = $this->model('KonsumenModel')->getAll();
    $this->view('layouts/header', ['title' => 'Konsumen']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('konsumen/index', $data);
    $this->view('layouts/footer');
  }
  public function create(){
    $this->view('layouts/header', ['title' => 'Konsumen']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('konsumen/create');
    $this->view('layouts/footer');
  }
  public function store(){
    $data = $this->model('KonsumenModel')->store($_POST);
    if($data){
      $this->_sendNotification("Konsumen berhasil ditambahkan","success");
      header('Location: '.BASEURL.'/Konsumen');
      exit;
    }
  }
  public function edit($id){
    $data =  $this->model('KonsumenModel')->getById($id);
    $this->view('layouts/header', ['title' => 'Konsumen']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('konsumen/edit', $data);
    $this->view('layouts/footer');
  }
  public function update($id){
    $data = $this->model('KonsumenModel')->update($id, $_POST);
    if($data){
      $this->_sendNotification("Konsumen berhasil diupdate","success");
      header('Location: '.BASEURL.'/Konsumen');
      exit;
    }
  }
  public function delete($id){
    $data = $this->model('KonsumenModel')->delete($id);
    if($data){
      $this->_sendNotification("Konsumen berhasil dihapus","success");
      header('Location: '.BASEURL.'/Konsumen');
      exit;
    }
  }
}