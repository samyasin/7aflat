<?php
require_once 'include/newsletter_model.php';
 $mail = new newsletter();
if (isset($_POST['submit'])) {
   $mail->email = $_POST['email'];
    $mail->addEmail();
    header("location:" .$_SERVER['HTTP_REFERER']);

}
?>
<section id="newsletter" >
    <div class="container">
        <div class="row ">
          <div class="col-sm-12 to_animate" data-animation="pullDown">   
             <h2 class="head-title text-center " >Join Our Newsletter</h2>
             <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
            <form method="post" action="newsletter.php">

      <input style="width: 50%; margin-left: 0"  name="email" type="email" value="enter your email" onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'enter your email' : this.value;" >
        <p align="center"><input type="submit" value="submit" name="submit" >
        </p>
    </form>
          </div>
        </div>
       
    </div>
</section>