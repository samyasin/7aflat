<?php require_once 'include/header.php'; ?>
<?php 
if(isset($_GET['create'])){
    $message = "email already rigstered"; 
}
?>
<section id="about_us" >
    <div class="container">    

        <div class="row">

            <div class="block col-sm-5 to_animate" data-animation="fadeInLeftBig">  
                <h3 class="head-title4 text-center" > Already a Member
                </h3>  

                <form method="post" action="login.php"   class="text-center">
                    <input name="email" type="email" value="your email" onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'enter your email' : this.value;">
                    <input name="password" type="password" value="pass"  onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'pass' : this.value;" >

                    <input type="submit" value="submit" name="submit" >
                    <br>
                </form>        


            </div> 
            <div class="col-sm-1"> 
                <p align="center"> <img src=images/login.png> </div> </p>

            <div class="block col-sm-6 to_animate" data-animation="fadeInRightBig">  
                <h3 class="head-title4 text-center"> Create a New Account</h3>  


                <?php if(isset($message)){echo $message;} ?>
                <form action="account.php" method="post"  class="text-center forms">
                    <input  name="username" type="text" value="your name" onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'user name' : this.value;" >



                    <input  name="email" type="email" value="enter your email" onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'enter your email' : this.value;">
                    <input  name="password" type="password" value="pass" onfocus="this.value = ''" onblur="this.value = this.value == '' ? 'pass' : this.value;" >
                    <select name="country" size="1">
                        <option >---- select your country ----</option>
                        <option selected>Jordan</option>
                        <option>Iraq</option>
                        <option>Lebanon</option>
                        <option>Syria</option>
                        <option>Egypt</option>
                        <option>Kuwait</option>
                        <option>Qatar</option>
                        <option>Tunisia</option>
                        <option>Saudi Arabia</option>
                        <option>Emirates</option>
                        <option>Palestine</option>
                        <option>Bahrein</option>
                        <option>Oman</option>
                        <option>Yemen</option>

                    </select><br>
                    <select name="account_type" size="1">
                        <option>Organizer Couples (Wedding, Engagement)</option>
                        <option>Organizer Personal (Jaha, Henna, Birthday, Graduation, Reception)</option>
                        <option>Organizer Business (Opening, Meeting)</option>
                        <option>Supplier / Vendor</option>
                        <option>Invitee / Attendee</option>
                    </select>
                    <br>
<!--                    <input type="radio" name="accout_type" value="Organizer couples">Organizer Couples (Wedding, Engagement)<br>
                    <input type="radio" name="accout_type" value="Organizer personal">Organizer Personal (Jaha, Henna, Birthday, Graduation, Reception)<br>
                    <input type="radio" name="accout_type" value="Organizer business">Organizer Business (Opening, Meeting) <br>
                    <input type="radio" name="accout_type" value="Organizer supplier">Supplier / Vendor<br>
                    <input type="radio" name="accout_type" value="Organizer invitee">Invitee / Attendee

                    <br>-->
                    <input type="submit" value="submit" name="submit" >

                </form>          


            </div>

        </div>   
    </div>
</section>
<?php require_once 'include/fotter.php'; ?>