<?php
  class SupplierModel{
    private $table = 'suppliers';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAll(){
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }
    public function store($data){
      $query = "INSERT INTO $this->table VALUES (:kd_sup, :nm_sup, :alm_sup, :kota_sup, :kode_pos,:telp_sup, :hp_sup, :email_sup)";
      $this->db->query($query);
      $this->db->bind('kd_sup', $data['kd_sup']);
      $this->db->bind('nm_sup', $data['nm_sup']);
      $this->db->bind('alm_sup', $data['alm_sup']);
      $this->db->bind('kota_sup', $data['kota_sup']);
      $this->db->bind('kode_pos', $data['kode_pos']);
      $this->db->bind('telp_sup', $data['telp_sup']);
      $this->db->bind('hp_sup', $data['hp_sup']);
      $this->db->bind('email_sup', $data['email_sup']);

      $this->db->execute();

      return $this->db->rowCount(); 
    }
    public function getById($id){
      $this->db->query("SELECT * FROM $this->table WHERE kd_sup=:kd_sup");
      $this->db->bind('kd_sup', $id);
      return $this->db->single();
    }
    public function update($id,$data){
      $query = "UPDATE $this->table SET nm_sup = :nm_sup, 
              alm_sup = :alm_sup, 
              kota_sup= :kota_sup, 
              kode_pos = :kode_pos,
              telp_sup = :telp_sup, 
              hp_sup = :hp_sup,
              email_sup = :email_sup  
              WHERE kd_sup=:kd_sup";
      $this->db->query($query);
      $this->db->bind('kd_sup', $id);
      $this->db->bind('nm_sup', $data['nm_sup']);
      $this->db->bind('alm_sup', $data['alm_sup']);
      $this->db->bind('kota_sup', $data['kota_sup']);
      $this->db->bind('kode_pos', $data['kode_pos']);
      $this->db->bind('telp_sup', $data['telp_sup']);
      $this->db->bind('hp_sup', $data['hp_sup']);
      $this->db->bind('email_sup', $data['email_sup']);
      $this->db->execute();
        
      return $this->db->rowCount();
    }
    
    public function delete($id){
      $this->db->query("DELETE FROM $this->table WHERE kd_sup=:kd_sup");
      $this->db->bind('kd_sup', $id);
      $this->db->execute();
      
      return $this->db->rowCount();
    }
    public function countAll(){
      $this->db->query("SELECT count(*) FROM $this->table");
      $this->db->execute();
      return $this->db->count();
    }
  }