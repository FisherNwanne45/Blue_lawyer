<?php 
include "short.php" 
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from html.efforttech.com/html/supremelaw/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 22:51:22 GMT -->

    <head>
        <meta charset="utf-8">
        <title><?php echo $name; ?> | Homepage</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
        <!-- REVOLUTION SETTINGS STYLES -->
        <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--Color Switcher Mockup-->
        <link href="css/color-switcher-design.css" rel="stylesheet">

        <!--Color Themes-->
        <link id="theme-color-file" href="css/color-themes/blue-theme.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header-->
            <header class="main-header">

                <!--Header Top-->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="clearfix">
                            <!--Top Left-->
                            <div class="top-left pull-left">
                                <ul class="clearfix">
                                    <li>Where <span class="theme_color">Legal Expertise</span> Meets Compassionate
                                        Advocacy</li>
                                </ul>
                            </div>
                            <!--Top Right-->
                            <div class="top-right pull-right">
                                <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                </ul>
                                <!--Language-->
                                <div class="language dropdown"><a class="btn btn-default dropdown-toggle"
                                        id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" href="#"><span class="flag-icon"><img
                                                src="images/icons/flag-icon.jpg" alt="" /></span>English &nbsp;<span
                                            class="icon fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Arabic</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="clearfix">

                            <div class="pull-left logo-box">
                                <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a>
                                </div>
                            </div>

                            <div class="pull-right upper-right clearfix">

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-envelope-1"></span></div>
                                    <ul>
                                        <li><strong><?php echo $email; ?></strong></li>
                                        <li>Office Hours: 09.00am - 17.00pm</li>
                                    </ul>
                                </div>

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-home-1"></span></div>
                                    <ul>
                                        <li><strong><?php echo $phone; ?></strong></li>
                                        <li><?php echo $addr; ?></li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--End Header Upper-->

                <!--Header Lower-->
                <div class="header-lower">

                    <div class="auto-container">
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current' : ''; ?>">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'current' : ''; ?>">
                                            <a href="about.php">About us</a>

                                        </li>
                                        <li
                                            class="dropdown <?php echo in_array(basename($_SERVER['PHP_SELF']), ['criminal.php', 'drug.php', 'consumer.php', 'wills.php', 'insurance.php', 'practice.php', 'family.php', 'business.php']) ? 'current' : ''; ?>">
                                            <a href="#">Practice Areas</a>
                                            <ul>
                                                <li><a href="practice.php">All Practices</a></li>
                                                <li><a href="family.php">Family Law</a></li>
                                                <li><a href="business.php">Business Law</a></li>
                                                <li><a href="wills.php">Wills and Estate Law</a></li>
                                                <li><a href="criminal.php">Criminal Law</a></li>
                                                <li><a href="insurance.php">Insurance Law</a></li>
                                                <li><a href="drug.php">Drug Control Law</a></li>
                                                <li><a href="consumer.php">Consumer Law</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'current' : ''; ?> ">
                                            <a href="faq.php">Faq</a>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? 'current' : ''; ?>">
                                            <a href="testimonial.php">Testimonial</a>
                                        </li>

                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'current' : ''; ?>">
                                            <a href="contact.php">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">

                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel"
                                            aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="#">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="advisor-box">
                                    <a href="contact.php" class="theme-btn advisor-btn">Consultation</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Lower-->

                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt=""
                                    title=""></a>
                        </div>

                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current' : ''; ?>">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'current' : ''; ?>">
                                            <a href="about.php">About us</a>

                                        </li>

                                        <li
                                            class="dropdown
                                            <?php echo in_array(basename($_SERVER['PHP_SELF']), ['criminal.php', 'drug.php', 'consumer.php', 'wills.php', 'insurance.php', 'practice.php', 'family.php', 'business.php']) ? 'current' : ''; ?>">
                                            <a href="#">Practice Areas</a>
                                            <ul>
                                                <li><a href="practice.php">All Practices</a></li>
                                                <li><a href="family.php">Family Law</a></li>
                                                <li><a href="business.php">Business Law</a></li>
                                                <li><a href="criminal.php">Criminal Law</a></li>
                                                <li><a href="wills.php">Wills and Estate Law</a></li>
                                                <li><a href="insurance.php">Insurance Law</a></li>
                                                <li><a href="drug.php">Drug Control Law</a></li>
                                                <li><a href="consumer.php">Consumer Law</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'current' : ''; ?>">
                                            <a href="faq.php">Faq</a>
                                        </li>
                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? 'current' : ''; ?>">
                                            <a href="testimonial.php">Testimonial</a>
                                        </li>

                                        <li
                                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'current' : ''; ?>">
                                            <a href="contact.php">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                        </div>

                    </div>
                </div>
                <!--End Sticky Header-->

            </header>
            <!--End Main Header -->