<?php

require_once 'config.php';

class database{
    private $connection;
    
    public function __construct() {
        $this->openConnection();
    }

    public function openConnection(){
        $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);
        if(!$conn){
            die(mysql_error());
        }else{            
            $this->connection = $conn; 
        }
    }
    
    public function query($query){            
        $result = mysqli_query($this->connection, $query);
        return $result ? $result : FALSE;
    }
    
    public function fetch($result){
        while ($row = mysqli_fetch_assoc($result)){
            $recordSet[] = $row;
        }
        if(isset($recordSet)){
            return $recordSet;
        }else{
            return FALSE;
        }
    }
    
    public function lastId(){
        return mysqli_insert_id($this->connection);
    }
    
    public function effectedRows(){
        return mysqli_affected_rows($this->connection);
    }
}
