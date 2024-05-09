<?php include "header.php";  ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/9.jpg)">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="page-breadcrumb">
            <li>You are here:</li>
            <li><a href="index.php"> Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="title-box">
            <h2>Write Your <span class="theme_color">Message</span></h2>
            <div class="text">At <?php echo $name; ?>, our lawyers combine sophisticated legal knowledge and
                extensive resources with a commitment to client service that is second to none. We are
                driven by our desire to find holistic solutions to the problems our clients face.</div>
        </div>

        <!-- Default Form -->
        <div class="default-form contact-form">
            <!--Call Back Form-->
            <form method="post" action="contact-submit.php#send" id="contact-form">
                <div class="row clearfix">
                    <input type="hidden" name="adminmail" id="adminmail" value="<?php echo $email; ?>">
                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input type="text" name="fname" placeholder="Name" required>
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input type="text" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea name="purpose_loan" placeholder="Message"></textarea>
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