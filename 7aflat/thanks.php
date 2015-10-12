<?php
session_start();
require_once 'include/header.php'; ?>
<?php
require_once 'include/userModel.php';
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$userModel = new user();
$userSet = $userModel->fetchById($email, $password);


$username = $userSet[0]['username'];
?>
<section id="about_us" >
    <div class="container">    

        <div class="row">

            <div class="block col-sm-12">
                Successfully Registration
                <br>
                Thank you <?php echo $username; ?> for visit 7aflat Event Planner....<br>
                you will be redirect automatically in 5 sec.
                <?php
                $id = $userSet[0]['member_id'];
                $account_type = $userSet[0]['accout_type'];
                if ($account_type == "Organizer couples") {
                    header("refresh:5, URL=../organizer/create_couples.php?id=$id");
                } elseif ($account_type == "Organizer personal") {
                    header("refresh:5, URL=../organizer/create_personal.php?id=$id");
                } elseif ($account_type == "Organizer business") {
                    header("refresh:5, URL=../organizer/create_business.php?id=$id");
                } elseif ($account_type == "Organizer supplier") {
                    header("refresh:5, URL=supplier.php");
                } elseif ($account_type == "Organizer invitee") {
                    header("refresh:5, URL=invitee.php");
                }
                ?>



            </div></div></div></section>
<?php require_once 'include/fotter.php'; ?>