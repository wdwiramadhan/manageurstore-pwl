<?php
class Dashboard extends Controller{
  public function __construct(){
    Authenticate::isLoggedIn();
  }
  public function index(){
    $data['totalsupplier'] = $this->model('SupplierModel')->countAll();
    $this->view('layouts/header', ['title' => 'Dashboard']);
    $this->view('layouts/topbar');
    $this->view('layouts/sidebar');
    $this->view('dashboard',$data);
    $this->view('layouts/footer');
  }
}