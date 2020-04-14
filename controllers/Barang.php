<?php 
class Barang extends Controller{
  public function __construct(){
    Authenticate::isLoggedIn();
  }
  public function index(){
    $data['barang'] = $this->model('BarangModel')->getAll();
    $this->view('layouts/header', ['title' => 'Barang']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('barang/index', $data);
    $this->view('layouts/footer');
  }
  public function create(){
    $this->view('layouts/header', ['title' => 'Barang']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('barang/create');
    $this->view('layouts/footer');
  }
  public function store(){
    $data = $this->model('BarangModel')->store($_POST);
    if($data){
      $this->_sendNotification("Barang berhasil ditambahkan","success");
      header('Location: '.BASEURL.'/Barang');
      exit;
    }
  }
  public function edit($id){
    $data = $this->model('BarangModel')->getById($id);
    $this->view('layouts/header', ['title' => 'Barang']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('barang/edit', $data);
    $this->view('layouts/footer');
  }
  public function update($id){
    $barang = $this->model('BarangModel')->update($id, $_POST);
    if($barang){
      $this->_sendNotification("Barang berhasil diupdate","success");
      header('Location: '.BASEURL.'/Barang');
      exit;
    }
  }
  public function delete($id){
    $barang = $this->model('BarangModel')->delete($id);
    if($barang){
      $this->_sendNotification("Barang berhasil dihapus","success");
      header('Location: '.BASEURL.'/Barang');
      exit;
    }
  }
}