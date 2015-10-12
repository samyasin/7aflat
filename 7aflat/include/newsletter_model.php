<?php 
require_once 'database.php';

class newsletter{
    public $email;
    

    public function addEmail(){
        $database = new database();
        $result = $database->query("INSERT INTO newsletter(email)"
                . "VALUES('$this->email')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }
}