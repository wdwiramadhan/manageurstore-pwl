<?php
  class KonsumenModel{
    private $table = 'konsumens';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAll(){
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }
    public function store($data){
      $query = "INSERT INTO $this->table VALUES (:id, :nama, :alamat, :kota, :kode_pos,:phone, :email)";
      $this->db->query($query);
      $this->db->bind('id', $data['id']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('alamat', $data['alamat']);
      $this->db->bind('kota', $data['kota']);
      $this->db->bind('kode_pos', $data['kode_pos']);
      $this->db->bind('phone', $data['phone']);
      $this->db->bind('email', $data['email']);

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
              alamat = :alamat, 
              kota= :kota, 
              kode_pos = :kode_pos,
              phone = :phone, 
              email = :email 
              WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $data['id']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('alamat', $data['alamat']);
      $this->db->bind('kota', $data['kota']);
      $this->db->bind('kode_pos', $data['kode_pos']);
      $this->db->bind('phone', $data['phone']);
      $this->db->bind('email', $data['email']);
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