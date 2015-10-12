<?php
require_once 'include/header.php';

require_once 'businessModel.php';
$userModel = new business();
$member_id = $_GET['id'];
if (isset($_POST['submit'])) {
    $userModel->member_id = $_POST['member_id'];
    $tmp = $_FILES['file2']['tmp_name'];
    move_uploaded_file($tmp, "images/business/gallery/" . $_FILES['file2']['name']);
    $userModel->picture = $_FILES['file2']['name'];
    $x = implode(' ', $_POST['category']);
    $userModel->category = $x;
    $userModel->create_pic();
    header("location:create_business2.php?id=$userModel->member_id");
}
?>
<body>
    <div id="box_wrapper">
        <section id="mainslider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="slide_overlay">
                            <img src="images/business/flex_slide01.jpg" alt="">                      
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
                            Create Business Page
                        </h2><h3>Opening, Meeting</h3>
                        <br>      <a class="btn-default btn1" href="business_sample.php" target="_blank">Show Simple Page</a>

                        <br><br>      
                        <form method="POST" id="form" enctype="multipart/form-data" action="create_business2.php">
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
                                            <input type="checkbox" name="category[]" value="company"> Our Company
                                            <input type="checkbox" name="category[]" value="activities"> Activities 
                                            <input type="checkbox" name="category[]" value="employee"> Employee 

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <input type="submit" value="upload" name="submit"></td>

                                    </tr>
                                </table>
                            </div>

                        </form>
                        <a href="business.php?id=<?php echo $member_id ?>">        <input type="button" value="Create Profile"></a>
                    </div>
                </div></div></section>

        <?php require_once 'include/fotter.php'; ?>    