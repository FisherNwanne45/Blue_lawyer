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
        <!-- Contact Page Branch Locations with CSS Icons -->
        <div class="branch-locations">
            <hr>
            <h3>Other <span class="theme_color">Locations</span></h3>

            <ul class="locations-list">
                <li><span class="flag-icon flag-icon-ca"></span> Canada</li>
                <li><span class="flag-icon flag-icon-gb"></span> United Kingdom</li>
                <li><span class="flag-icon flag-icon-au"></span> Australia</li>
                <li><span class="flag-icon flag-icon-de"></span> Germany</li>
                <li><span class="flag-icon flag-icon-fr"></span> France</li>
                <li><span class="flag-icon flag-icon-jp"></span> Japan</li>
                <li><span class="flag-icon flag-icon-nl"></span> Netherlands</li>
                <li><span class="flag-icon flag-icon-ch"></span> Switzerland</li>
                <li><span class="flag-icon flag-icon-mx"></span> Mexico</li>
                <li><span class="flag-icon flag-icon-tr"></span> Turkey</li>
            </ul>
        </div>

        <style>
        .branch-locations {
            margin-top: 20px;
        }

        .locations-list {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .locations-list li {
            display: flex;
            align-items: center;
        }

        .flag-icon {
            display: inline-block;
            width: 24px;
            height: 16px;
            background-size: cover;
            margin-right: 10px;
        }

        .flag-icon-ca {
            background-image: url('https://flagcdn.com/ca.svg');
        }

        .flag-icon-gb {
            background-image: url('https://flagcdn.com/gb.svg');
        }

        .flag-icon-au {
            background-image: url('https://flagcdn.com/au.svg');
        }

        .flag-icon-de {
            background-image: url('https://flagcdn.com/de.svg');
        }

        .flag-icon-fr {
            background-image: url('https://flagcdn.com/fr.svg');
        }

        .flag-icon-jp {
            background-image: url('https://flagcdn.com/jp.svg');
        }

        .flag-icon-nl {
            background-image: url('https://flagcdn.com/nl.svg');
        }

        .flag-icon-ch {
            background-image: url('https://flagcdn.com/ch.svg');
        }

        .flag-icon-mx {
            background-image: url('https://flagcdn.com/mx.svg');
        }

        .flag-icon-tr {
            background-image: url('https://flagcdn.com/tr.svg');
        }
        </style>

    </div>
</section>
<!--End Contact Info Section-->

<!--Main Footer-->
<?php include "footer.php";  ?>