<?php require_once 'include/header.php'; ?>
<section id="about_us" >
    <div class="container">    

        <div class="row">

            <div class="block col-sm-8 to_animate" data-animation="fadeInLeft">  
                <h2 class="head-title4 "> Contact us</h2>  
                <div class="forms">
                    <div id="form_status"></div>
                    <form type="POST" id="gsr-contact" onSubmit="return valid_datas(this);">
                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><label class="label">Name <em>*</em></label></td>
                                <td><input  type="text" name="name" id="name"></td>
                            </tr>
                            <tr>
                                <td> <label class="label">E-mail <em>*</em></label></td>
                                <td> <input type="email" name="email" id="email" ></td>
                            </tr>
                            <tr>
                                <td> <label class="label">Phone </label></td>
                                <td> <input type="text" name="phone" id="phone" ></td>
                            </tr>
                            <tr>
                                <td><label class="label">Subject <em>*</em></label></td>
                                <td><input type="text" name="subject" id="subject" ></td>
                            </tr>
                            <tr>
                                <td><label class="label">Message <em>*</em></label></td>
                                <td>  <textarea rows="5"  name="message" id="message"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">   <button type="submit" class="button">Send Message</button>
                                </td>
                            </tr>
                        </table> </form>	
                </div>


            </div> 
            <div class="col-sm-4 to_animate text-center" data-animation="fadeInRight">
                <img alt=""  src="images/about4.png">
            </div>

        </div>   
    </div>
</section>




<script type="text/javascript" src="js/form-validate.js"></script>

<?php require_once 'include/fotter.php'; ?>