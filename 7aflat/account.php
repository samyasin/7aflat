<?php
session_start();
require_once 'include/userModel.php';
$userModel = new user();
if (isset($_POST['submit'])) {
    $userModel->username    = $_POST['username'];
    $userModel->password    = $_POST['password'];
    $userModel->email       = $_POST['email'];
    $userModel->country     = $_POST['country'];
    $userModel->accout_type = $_POST['accout_type'];
    if($userModel->check($_POST['email'])){        
        header("location:join.php?create=0");
    }else{
        $userModel->create();
        $username=$userModel->username;
        $_SESSION['email']= $userModel->email;
        $_SESSION['password']= $userModel->password; 
        header("location:thanks.php");
    }
    
    
    
    /*
    $account_type = $_POST['accout_type'];
    $id = $userSet[0]['user_id'];
        if ($account_type == "Organizer couples") {
            header("location:couples.php?id=$id");
        } */
}
?>
