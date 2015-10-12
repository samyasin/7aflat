<?php
require_once 'include/header.php';

require_once 'personalModel.php';
$userModel = new personal();
$member_id = $_GET['id'];
if (isset($_POST['submit'])) {
    $userModel->member_id = $_POST['member_id'];
    $tmp = $_FILES['file2']['tmp_name'];
    move_uploaded_file($tmp, "images/personal/gallery/" . $_FILES['file2']['name']);
    $userModel->picture = $_FILES['file2']['name'];
    $x = implode(' ', $_POST['category']);
    $userModel->category = $x;

    $userModel->create_pic();
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
                        <form method="POST" id="form" enctype="multipart/form-data" action="create_personal2.php">
                            <div align="center">
                                <table border="0" width="96%" cellspacing="0" cellpadding="0">

                                    <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                                    <tr>
                                        <td colspan="2"><br><h3>Photo Gallery</h3></td>

                                    </tr>
                                    <tr>
                                        <td  width=width="20%>&nbsp;</td>
                                        <td><input type="file" name="file2"/></td>
                                    </tr>
                                    <tr>
                                        <td width=width="20%>&nbsp;</td>
                                        <td> 
                                            <input type="checkbox" name="category[]" value="life"> My Life
                                            <input type="checkbox" name="category[]" value="friends"> My Friends 
                                            <input type="checkbox" name="category[]" value="family"> My Family 
                                            <input type="checkbox" name="category[]" value="special"> Special Time
                                            <input type="checkbox" name="category[]" value="party"> Party 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <input type="submit" value="upload" name="submit"></td>

                                    </tr>
                                </table>
                            </div>

                        </form>
                        <a href="personal.php?id=<?php echo $member_id?>">        <input type="button" value="Create Profile"></a>
                    </div>
                </div></div></section>

        <?php require_once 'include/fotter.php'; ?>    