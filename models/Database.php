<?php
class Database{
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $db_driver = DB_DRIVER;

    private $dbh; //database handler
    private $stmt;
    public function __construct(){
        // data base source name
        $dsn = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s", 
                $this->host, 
                $this->port, 
                $this->db_name, 
                $this->user, 
                $this->pass);
        try{
            $this->dbh = new PDO($dsn);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;    
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(){
        $this->stmt->execute();
    }
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    public function count(){
        return $this->stmt->fetchColumn();
    }
}
