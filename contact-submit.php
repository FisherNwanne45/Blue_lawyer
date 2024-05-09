<?php include "header.php";  ?>
<style>
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #7ac142;
    fill: none;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #fff;
    stroke-miterlimit: 10;
    margin: 10% auto;
    box-shadow: inset 0px 0px 0px #7ac142;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {

    0%,
    100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #7ac142;
    }
}
</style>
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/9.jpg)">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="page-breadcrumb">
            <li>You are here:</li>
            <li><a href="index.php"> Home</a></li>
            <li id="send">Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="title-box">

            <?php
   

   if($_POST) {
       $adminmail = "";
    
    - $fname     = "";
    - $lname            = "";
   - $email   	= ""; 
    - $city     		= "";
    - $zip           = "";
    - $phone       	= "";
   - $kin_first_name       	= "";
   - $addr        	= "";
   - $dob            = "";
   - $sex        = "";
   - $kin_last_name        	= "";
    - $work     	= "";
    - $nation         = "";
   - $currency       	= "";
   - $type       	= "";
    - $mname ="";
    
    
     - $marital_status ="";
      - $nationality ="";
       - $monthly_income ="";
        - $annual_income ="";
        - $purpose_loan ="";
     
     
     
    
     
    if(isset($_POST['marital_status'])) {
        $marital_status = filter_var($_POST['marital_status'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['nationality'])) {
        $nationality = filter_var($_POST['nationality'], FILTER_SANITIZE_STRING);
    }
    
     if(isset($_POST['monthly_income'])) {
        $monthly_income = filter_var($_POST['monthly_income'], FILTER_SANITIZE_STRING);
    }
    
     if(isset($_POST['annual_income'])) {
        $annual_income = filter_var($_POST['annual_income'], FILTER_SANITIZE_STRING);
    }
    
     if(isset($_POST['purpose_loan'])) {
        $purpose_loan = filter_var($_POST['purpose_loan'], FILTER_SANITIZE_STRING);
    }
    
     if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
         
    }
     
   if(isset($_POST['lname'])) {
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['state'])) {
        $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    }
 
  if(isset($_POST['city'])) {
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['zip'])) {
        $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['phone'])) {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['kin_first_name'])) {
        $kin_first_name = filter_var($_POST['kin_first_name'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['addr'])) {
        $addr = filter_var($_POST['addr'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['dob'])) {
        $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['sex'])) {
        $sex = filter_var($_POST['sex'], FILTER_SANITIZE_STRING);
    }
    
    
    if(isset($_POST['kin_last_name'])) {
        $kin_last_name = filter_var($_POST['kin_last_name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['work'])) {
        $work = filter_var($_POST['work'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['nation'])) {
        $nation = filter_var($_POST['nation'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['currency'])) {
        $currency = filter_var($_POST['currency'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['type'])) {
        $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    }
    
    
    if(isset($_POST['mname'])) {
        $mname = filter_var($_POST['mname'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['adminmail'])) {
        $adminmail = filter_var($_POST['adminmail'], FILTER_SANITIZE_STRING);
    }
 
    $recipient = "$adminmail";
   
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
 
    $email_content = "<html><body>";
    $email_content .= "<table style='font-family: Arial;'><tbody><tr>
    <td style='background: #eee; padding: 10px;'>Name</td><td style='background: #fda; padding: 10px;'>$fname</td></tr>";
    
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'> Email</td><td style='background: #fda; padding: 10px;'>$email</td></tr>";
   
     
    
     $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Phone</td><td style='background: #fda; padding: 10px;'>$phone</td></tr>";
     
      
      
      
      $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Message</td><td style='background: #fda; padding: 10px;'>$purpose_loan</td></tr>";
        
        
    $email_content .= '</body></html>';
 
    
     
    if(mail($recipient, "New Contact Message from Client", $email_content, $headers)) {
        echo '  <p class="block-title__tagline">We will keep in touch you</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">Message Sent </h2>
                        
                   <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                             <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>  
';
    } else {
        echo '<p>We are sorry, but the Application failed. </p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>



            <br>
            <h2>Write New <span class="theme_color">Message</span></h2>
            <div class="text">At <?php echo $name; ?>, our lawyers combine sophisticated legal knowledge and extensive
                resources with a commitment to client service that is second to none. We are driven by our desire to
                find holistic solutions to the problems our clients face.</div>
        </div>

        <!-- Default Form -->
        <div class="default-form contact-form">
            <!--Call Back Form-->
            <form method="post" action="contact-submit.php" id="contact-form">
                <div class="row clearfix">

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input type="text" name="username" placeholder="Name" required>
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input type="text" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" placeholder="Massage"></textarea>
                    </div>

                    <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                        <button class="theme-btn submit-btn" type="submit" name="submit-form">Consultation</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>
<!--End Contact Section-->

<!--Map Info Section 
    <section class="map-section">
    	 
        <div class="map-canvas"
            data-zoom="12"
            data-lat="-37.817085"
            data-lng="144.955631"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Envato"
            data-icon-path="images/icons/map-marker.png"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
        
	</section>
    <!--End Map Info Section-->

<!--Contact Info Section-->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="column col-md-4 col-sm-6 col-xs-12">

                <!--Info Blocks-->
                <div class="info-block">
                    <div class="block-inner">
                        <div class="icon-box">
                            <span class="icon flaticon-placeholder"></span>
                        </div>
                        <h2>Visit Our <span class="theme_color">Office</span></h2>
                        <div class="text"><?php echo $addr; ?></div>
                    </div>
                </div>

            </div>

            <div class="column col-md-4 col-sm-6 col-xs-12">

                <!--Info Blocks-->
                <div class="info-block">
                    <div class="block-inner">
                        <div class="icon-box">
                            <span class="icon flaticon-technology"></span>
                        </div>
                        <h2>Get in <span class="theme_color">Touch</span></h2>
                        <div class="text"><?php echo $phone; ?> <br> <?php echo $email; ?></div>
                    </div>
                </div>

            </div>

            <div class="column col-md-4 col-sm-6 col-xs-12">

                <!--Info Blocks-->
                <div class="info-block">
                    <div class="block-inner">
                        <div class="icon-box">
                            <span class="icon flaticon-clock-2"></span>
                        </div>
                        <h2>Office <span class="theme_color">Timing</span></h2>
                        <div class="text">Monday-Saturday: 09.00am to 17.00pm Sunday Holiday</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!--End Contact Info Section-->

<!--Main Footer-->
<?php include "footer.php";  ?>