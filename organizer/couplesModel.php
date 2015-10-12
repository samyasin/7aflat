<?php

require_once 'include/database.php';

class couples {

    public $user_id;
    public $member_id;
    public $bride;
    public $groom;
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
        $result = $database->query("SELECT * FROM couples");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function fetchById($id) {
        $database = new database();
        $result = $database->query("SELECT * FROM couples where member_id = $id");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

    public function create() {
        $database = new database();
        $result = $database->query("INSERT INTO couples(bride,groom,party_date,description_bride, description_groom,video, invitation,phone,email,address,facebook,member_id, bride_picture,groom_picture, party_type)"
                . "       VALUES('$this->bride','$this->groom','$this->party_date','$this->description_bride','$this->description_groom', '$this->video', '$this->invitation', '$this->phone', '$this->email', '$this->address', '$this->facebook', '$this->member_id', '$this->bride_picture', '$this->groom_picture', '$this->party_type')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }

    public function create_pic() {
        $database = new database();
        $result = $database->query("INSERT INTO couples_pic(picture,category, member_id)"
                . "       VALUES('$this->picture','$this->category','$this->member_id')");
        return $database->lastId() ? $database->lastId() : FALSE;
    }

    public function fetchByPicId($id) {
        $database = new database();
        $result = $database->query("SELECT * FROM couples_pic where member_id = $id");
        if ($result) {
            $userSet = $database->fetch($result);
        }
        return isset($userSet) ? $userSet : FALSE;
    }

}
