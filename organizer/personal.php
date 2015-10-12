<?php
error_reporting(0);
require_once 'include/header.php';
require_once 'personalModel.php';
$userModel = new personal();
$userModel2 = new personal();

$id = $_GET['id'];

if (empty($id)) {
    header("location:../7aflat/join.php");
}

$userModel = $userModel->fetchById($id);
foreach ($userModel as $user) {
    
}
$userModel2 = $userModel2->fetchByPicId($id);
foreach ($userModel2 as $user2) {
    
}


if ($id !== $user['member_id']) {
    header("location:../7aflat/join.php");
}
?>
<body>
    <div id="box_wrapper">

        <section id="mainslider">

            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div>
                            <img src="images/personal/flex_slide02.jpg" alt="">                      
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images/personal/flex_slide01.jpg" alt="">                      
                        </div>

                    </li>   
                    <li>
                        <div>
                            <img src="images/personal/flex_slide03.jpg" alt="">                      
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <section id="count_down">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2><?php echo $user['username']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="countdown"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2><?php echo $user['party_type']; ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="about_us">
            <div class="container">
                <div class="row to_animate" data-animation="fadeInUp">
                    <div class="col-md-12  text-center">
                        <h2 class="section_header">
                            About   <?php echo $user['username']; ?>
                        </h2>

                    </div>
                </div>
                <div class="row">
                    <div  class="col-md-12 ">
                        <div class="to_animate" data-animation="fadeInLeft">
                            <div class="img-circle  text-center ">
                                <img class="img-circle profile_pic" src="<?php echo 'images/personal/' . $user['picture'] . '' ?>">                            </div>
                            <div class="profile_description text-center">
                                <h3><?php echo $user['username']; ?></h3>
                                <p><?php echo $user['description']; ?></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section id="story_personal" >
            <div class="row">
                <div  class="col-sm-12">
                    <div class="playeriframe">
                        <iframe src="<?php echo $user['video']; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div></div>   
        </section>
        <?php if ($id !== $user2['member_id']) { ?>
            <style> #portfolio { display: none;}</style>
        <?php } ?>
        <section id="portfolio" class="gallery">
            <div class="container">
                <div class="row to_animate" data-animation="fadeInUp">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header">
                            Photo Gallery
                        </h2>

                    </div>
                </div>
                <div class="row to_animate" data-animation="fadeInUp">
                    <div class="col-sm-12">
                        <div id="isotope_filters">
                            <a href="#" data-filter="*" class="selected filter_button">
                                <span>Show All</span>
                                <span></span>
                            </a>

                            <a href="#" data-filter=".life" class="filter_button">
                                <span>My Life</span>
                                <span></span>
                            </a>
                            <a href="#" data-filter=".friends" class="filter_button">
                                <span>My Friends</span>
                                <span></span>
                            </a>
                            <a href="#" data-filter=".family" class="filter_button">
                                <span>My Family</span>
                                <span></span>
                            </a>
                            <a href="#" data-filter=".special" class="filter_button"> 
                                <span>Special Time</span>
                                <span></span>
                            </a>
                            <a href="#" data-filter=".party" class="filter_button"> 
                                <span>Party</span>
                                <span></span>
                            </a>


                        </div>
                        <?php
                        foreach ($userModel2 as $user2) {
                            echo " <div id='isotope_container' class='isotope row'>";
                            echo " <div class='isotope-item gallery-item col-md-3 col-sm-6 {$user2['category']}  '>";
                            echo " <div class='gallery-image'>";
                            echo " <a class='p-view prettyPhoto' data-gal='prettyPhoto[gal]' href='images/personal/gallery/{$user2['picture']}'>";
                            echo " <img src='images/personal/gallery/{$user2['picture']}'>";
                            echo " </a>";
                            echo " </div>";
                            echo " </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </section>


        <section id="invitation_personal" class="bg_fix">
            <div class="container">
                <div class="row to_animate" data-animation="fadeInUp">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header">
                            Invitation
                        </h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 to_animate" data-animation="fadeInLeft">
                        <img class="img-circle" src="images/personal/invit.jpg" alt="">
                    </div>
                    <div class="col-sm-8 to_animate" data-animation="fadeInRight"> 
                        <p class="invitation"><?php echo $user['invitation']; ?></p>
                        <div class="countdown"></div>
                    </div>  
                </div>   
            </div> 
            <div class="row">
                <div class="col-sm-12 text-center  countdown_margin">

                </div>
            </div>  
        </section>



        <section id="contact">
            <div class="container">
                <div class="row to_animate" data-animation="fadeInUp">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header">
                            Contact Me
                        </h2>
                        <p>If you may need anything, please contact us:</p>
                    </div>
                </div> 
                <div class="row to_animate" data-animation="fadeInUp"> 
                    <div class="col-sm-12">
                        <div class="text-center">                
                            <p>
                                <i ></i><strong>Phone:</strong> 
                                <?php echo $user['phone']; ?>
                            </p>
                            <p>
                                <i></i><strong>Email:</strong> <a href="mailto:<?php echo $user['email']; ?>">
                                    <?php echo $user['email']; ?></a>
                            </p>
                            <p>
                                <i></i><strong>
                                    Address:</strong> <?php echo $user['address']; ?>
                            </p>
                            <p>
                                <i></i><strong>
                                    Facebook:</strong> <?php echo $user['facebook']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>      <div align="center" class="to_animate" data-animation="fadeInUp">     
                <a class="btn-default btn1" href="" >Edit Your Profile</a>
            </div><br>

        </section>


        <?php require_once 'include/fotter.php'; ?>
        <?php
        $x = $user['party_date'];
        $y = explode('-', $x);
        ?>
        <script>
            if (jQuery().countdown) {
                jQuery('.countdown').countdown({until: new Date(<?php echo $y[0]; ?>, <?php echo $y[1]; ?> - 1, <?php echo $y[2]; ?>)});
                // jQuery('.countdown').countdown('pause')
            }
            ;
        </script>