<?php

class Home extends Controller{
  public function index(){
    $this->view('layouts/header', ['title' => 'Home']);
    $this->view('layouts/footer');
  }
}