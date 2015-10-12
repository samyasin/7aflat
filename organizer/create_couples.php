<?php
require_once 'include/header.php';
$member_id = $_GET['id'];
require_once 'couplesModel.php';
$userModel = new couples();

if (isset($_POST['submit'])) {

    $tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp, "images/couples/" . $_FILES['file']['name']);
    $userModel->groom_picture = $_FILES['file']['name'];
    $tmp = $_FILES['file1']['tmp_name'];
    move_uploaded_file($tmp, "images/couples/" . $_FILES['file1']['name']);
    $userModel->bride_picture = $_FILES['file1']['name'];

    if (empty($userModel->groom)) {
        $userModel->groom_picture = "groom.jpg";
    }
    if (empty($userModel->bride)) {
        $userModel->bride_picture = "bride.jpg";
    }

    $member_id = $_POST['member_id'];
    $userModel->bride = $_POST['bride_name'];
    $userModel->groom = $_POST['groom_name'];
    $userModel->member_id = $_POST['member_id'];
    $userModel->party_date = $_POST['party_date'];
    $userModel->description_bride = $_POST['description_bride'];
    $userModel->description_groom = $_POST['description_groom'];

    $userModel->video = $_POST['video'];
    $userModel->invitation = $_POST['invitation'];
    $userModel->phone = $_POST['phone'];
    $userModel->email = $_POST['email'];
    $userModel->address = $_POST['address'];
    $userModel->facebook = $_POST['facebook'];
    $userModel->party_type = $_POST['party_type'];
    $userModel->create();
    header("location:create_couples2.php?id=$userModel->member_id");
}
?>
<body>
    <div id="box_wrapper">
        <section id="mainslider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="slide_overlay">
                            <img src="images/couples/flex_slide01.jpg" alt="">                      
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
                            Create Couples Page
                        </h2><h3>Wedding, Engagement</h3>
                        <br>      <a class="btn-default btn1" href="couples_sample.php" target="_blank">Show Simple Page</a>

                        <br><br>      
                        <form method="POST" id="form" enctype="multipart/form-data" action="create_couples.php">
                            <div align="center">
                                <table border="0" width="96%" cellspacing="0" cellpadding="0">
                                    <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                                    <tr>
                                        <td width="20%">Groom Name:</td>
                                        <td><input type="text" name="groom_name" ></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Bride Name:</td>
                                        <td><input type="text" name="bride_name" ></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Groom Picture:</td>
                                        <td><input type="file" name="file"/></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Bride Picture:</td>
                                        <td><input type="file" name="file1"/></td>
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
                                        <td width="20%">Description About Bride:</td>
                                        <td><textarea rows="2" name="description_bride" cols="20"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Description About Groom:</td>
                                        <td><textarea rows="2" name="description_groom" cols="20"></textarea></td>
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