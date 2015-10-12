<?php

require_once 'include/database.php';

class business {

    public $user_id;
    public $member_id;
    public $username;
    public $party_date;
    public $description;
    public $video;
    public $invitation;
    public $phone;
    public $email;
    public $address;
    public $facebook;

    public function fetchAll() {
        $database = new database();
        $result = $database->query("SELECT * FROM business");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function fetchById($id) {
        $database = new database();
        $result = $database->query("SELECT * FROM business where member_id = $id");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function create() {
        $database = new database();
        $result = $database->query("INSERT INTO business(username,party_date, description,video, invitation,phone,email,address,facebook,member_id, picture,party_type)"
                . "       VALUES('$this->username','$this->party_date','$this->description', '$this->video', '$this->invitation', '$this->phone', '$this->email', '$this->address', '$this->facebook', '$this->member_id', '$this->picture', '$this->party_type')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }

    public function create_pic() {
        $database = new database();
        $result = $database->query("INSERT INTO business_pic(picture,category, member_id)"
                . "       VALUES('$this->picture','$this->category','$this->member_id')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }

    public function fetchByPicId($id) {
        $database = new database();
        $result = $database->query("SELECT * FROM business_pic where member_id = $id");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

}
