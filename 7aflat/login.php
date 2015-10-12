<?php

require_once 'include/userModel.php';
$userModel = new user();

if (isset($_POST['submit'])) {

    $userModel->email = $_POST['email'];
    $userModel->password = $_POST['password'];
    $userSet = $userModel->Auth($userModel->email, $userModel->password);

    if ($userSet) {
        $id = $userSet[0]['member_id'];
        $account_type = $userSet[0]['accout_type'];
        if ($account_type == "Organizer couples") {
            header("location:../organizer/couples.php?id=$id");
        } elseif ($account_type == "Organizer personal") {
            header("location:../organizer/personal.php?id=$id");
        } elseif ($account_type == "Organizer business") {
            header("location:../organizer/business.php?id=$id");
        } elseif ($account_type == "Organizer supplier") {
            header("location:supplier.php?id=$id");
        } elseif ($account_type == "Organizer invitee") {
            header("location:invitee.php?id=$id");
        }
    } else {
        echo "user not found";
    }
}
?>