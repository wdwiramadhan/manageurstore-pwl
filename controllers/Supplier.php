<?php

class Supplier extends Controller{
  public function __construct(){
    Authenticate::isLoggedIn();
  }
  public function index(){
    $data['supplier'] = $this->model('SupplierModel')->getAll();
    $this->view('layouts/header', ['title' => 'Supplier']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('supplier/index', $data);
    $this->view('layouts/footer');
  }
  public function create(){
    $this->view('layouts/header', ['title' => 'supplier']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('supplier/create');
    $this->view('layouts/footer');
  }
  public function store(){
    $data = $this->model('SupplierModel')->store($_POST);
    if($data){
      $this->_sendNotification("Supplier berhasil ditambahkan","success");
      header('Location: '.BASEURL.'/Supplier');
      exit;
    }
  }
  public function edit($id){
    $data =  $this->model('SupplierModel')->getById($id);
    $this->view('layouts/header', ['title' => 'Supplier']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('supplier/edit', $data);
    $this->view('layouts/footer');
  }
  public function update($id){
    $data = $this->model('SupplierModel')->update($id, $_POST);
    if($data){
      $this->_sendNotification("Supplier berhasil diupdate","success");
      header('Location: '.BASEURL.'/Supplier');
      exit;
    }
  }
  public function delete($id){
    $data = $this->model('SupplierModel')->delete($id);
    if($data){
      $this->_sendNotification("Supplier berhasil dihapus","success");
      header('Location: '.BASEURL.'/Supplier');
      exit;
    }
  }
}