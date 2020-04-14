<?php
  class BarangModel{
    private $table = 'barangs';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAll(){
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }
    public function store($data){
      $query = "INSERT INTO $this->table VALUES (:id, :nama, :satuan, :harga, :harga_beli,:stock, :stock_min)";
      $this->db->query($query);
      $this->db->bind('id', $data['id']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('satuan', $data['satuan']);
      $this->db->bind('harga', $data['harga']);
      $this->db->bind('harga_beli', $data['harga_beli']);
      $this->db->bind('stock', $data['stock']);
      $this->db->bind('stock_min', $data['stock_min']);

      $this->db->execute();

      return $this->db->rowCount(); 
    }
    public function getById($id){
      $this->db->query("SELECT * FROM $this->table WHERE id=:id");
      $this->db->bind('id', $id);
      return $this->db->single();
    }
    public function update($id,$data){
      $query = "UPDATE $this->table SET nama = :nama, 
              satuan = :satuan, 
              harga= :harga, 
              harga_beli = :harga_beli,
              stock = :stock, 
              stock_min = :stock_min 
              WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('satuan', $data['satuan']);
      $this->db->bind('harga', $data['harga']);
      $this->db->bind('harga_beli', $data['harga_beli']);
      $this->db->bind('stock', $data['stock']);
      $this->db->bind('stock_min', $data['stock_min']);
      $this->db->execute();
        
      return $this->db->rowCount();
    }
    
    public function delete($id){
      $this->db->query("DELETE FROM $this->table WHERE id=:id");
      $this->db->bind('id', $id);
      $this->db->execute();
      
      return $this->db->rowCount();
    }
    public function countAll(){
      $this->db->query("SELECT count(*) FROM $this->table");
      $this->db->execute();
      return $this->db->count();
    }
  }