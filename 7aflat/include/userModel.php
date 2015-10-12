<?php

require_once 'database.php';

class user {

    public $member_id;
    public $username;
    public $password;
    public $email;
    public $country;
    public $accout_type;
    public $logout;

    public function fetchAll() {
        $database = new database();
        $result = $database->query("SELECT * FROM member");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function fetchById($email, $password) {
        $database = new database();
        $result = $database->query("SELECT * FROM member WHERE email = '$email'and  password = '$password'");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function create() {
        $database = new database();
        $result = $database->query("INSERT INTO member(username, password,email, country, accout_type)"
                . "       VALUES('$this->username','$this->password', '$this->email', '$this->country', '$this->accout_type')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }
    public function check($email){
        $database = new database();
        $result = $database->query("SELECT * FROM member WHERE email = '$email'");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return !empty($userSet) ? TRUE : FALSE;
    }

    public function Auth($email, $password) {
        $database = new database();
        $result = $database->query("SELECT * FROM member WHERE email = '$email'and  password = '$password'");
        if ($result) {
            $userSet = $database->fetch($result);
        }

        return isset($userSet) ? $userSet : FALSE;
    }

}
