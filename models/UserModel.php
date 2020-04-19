<?php
  class UserModel{
    private $table = 'users';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAll(){
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }
    public function store($data){
      if($data['role']){
        $role = $data['role'];
      }else{
        $role = 'admin';
      }
      $query = "INSERT INTO $this->table (name,email,password,role) VALUES  (:name, :email, :password, :role)";
      $this->db->query($query);
      $this->db->bind('name', $data['name']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
      $this->db->bind('role', $role);
      $this->db->execute();

      return $this->db->rowCount(); 
    }
    public function getById($id){
      $this->db->query("SELECT * FROM $this->table WHERE id=:id");
      $this->db->bind('id', $id);
      return $this->db->single();
    }
    public function update($id,$data){
      $query = "UPDATE $this->table SET name=:name, 
              email=:email, 
              role=:role
              WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->bind('name', $data['name']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('role', $data['role']);
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