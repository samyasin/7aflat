<?php
require_once 'include/header.php';
$member_id = $_GET['id'];
require_once 'personalModel.php';
$userModel = new personal();

if (isset($_POST['submit'])) {

    $tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp, "images/personal/" . $_FILES['file']['name']);
    $userModel->picture = $_FILES['file']['name'];

    if (empty($userModel->picture)) {
        $userModel->picture = "groom.jpg";
    }

    $member_id = $_POST['member_id'];
    $userModel->username = $_POST['your_name'];
    $userModel->member_id = $_POST['member_id'];
    $userModel->party_date = $_POST['party_date'];
    $userModel->description = $_POST['description'];
    $userModel->video = $_POST['video'];
    $userModel->invitation = $_POST['invitation'];
    $userModel->phone = $_POST['phone'];
    $userModel->email = $_POST['email'];
    $userModel->address = $_POST['address'];
    $userModel->facebook = $_POST['facebook'];
    $userModel->party_type = $_POST['party_type'];
    $userModel->create();
    header("location:create_personal2.php?id=$userModel->member_id");
}
?>
<body>
    <div id="box_wrapper">
        <section id="mainslider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="slide_overlay">
                            <img src="images/personal/flex_slide03.jpg" alt="">                      
                        </div>
                    </li>   
                </ul>
            </div>
        </section>


        <section id="about_us">
            <div class="container"> 
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header">
                            Create Personal Page
                        </h2><h3>Jaha, Henna, Birthday, Graduation, Reception</h3>
                        <br>      <a class="btn-default btn1" href="personal_sample.php" target="_blank">Show Simple Page</a>

                        <br><br>      
                        <form method="POST" id="form" enctype="multipart/form-data" action="create_personal.php">
                            <div align="center">
                                <table border="0" width="96%" cellspacing="0" cellpadding="0">
                                    <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                                    <tr>
                                        <td width="20%">Your Name:</td>
                                        <td><input type="text" name="your_name" ></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Profile Picture:</td>
                                        <td><input type="file" name="file"/></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Party Date:</td>
                                        <td><input id="date-from" name="party_date"  type="text">
                                            <input id="date-to" name="enddate"  type="hidden"> </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Party Type:</td>
                                        <td><input name="party_type"  type="text"> </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Description About You:</td>
                                        <td><textarea rows="2" name="description" cols="20"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Video:</td>
                                        <td><input type="text" name="video" value="http://" ></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Invitation:</td>
                                        <td><textarea rows="2" name="invitation" cols="20"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><br><h3>Contact Information:</h3></td>

                                    </tr>
                                    <tr>
                                        <td width="20%">Phone:</td>
                                        <td> <input type='phone' name="phone" pattern='[0-9]{10}' title='Phone Number (Format: phone 10 digit )'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Email:</td>
                                        <td><input type="text" name="email"></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Party Address:</td>
                                        <td><input type="text" name="address"></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Facebook:</td>
                                        <td><input type="text" name="facebook"></td>
                                    </tr>
                                </table>
                            </div>
                            <input type="submit" value="submit" name="submit">
                        </form>

                    </div>
                </div></div></section>

        <?php require_once 'include/fotter.php'; ?>