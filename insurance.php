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
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
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
                        	<li>Our <span class="theme_color">No Fee Promise</span>  Means, No Cost Until Your Case is Won.</li>
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
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon"><img src="images/icons/flag-icon.jpg" alt=""/></span>English &nbsp;<span class="icon fa fa-angle-down"></span></a>
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
                    	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li  ><a href="index.php">Home</a></li>
                                <li ><a href="about.php">About us</a>
                                    
                                </li>
                                <li class="dropdown current"><a href="#">Practice Areas</a>
                                    <ul>
                                        <li><a href="practice.php">All Practices</a></li>
                                        <li><a href="family.php">Family Law</a></li>
                                        <li><a href="business.php">Business Law</a></li>
                                        <li><a href="criminal.php">Criminal Law</a></li>
                                        <li><a href="insurance.php">Insurance Law</a></li>
                                        <li><a href="drug.php">Drug Control Law</a></li>
                                        <li><a href="consumer.php">Consumer Law</a></li>
                                    </ul>
                                </li>
                                <li class=" "><a href="faq.php">Faq</a>
                                    </li>
                                <li class=""><a href="testimonial.php">Testimonial</a>  </li>
                                 
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                    	
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="advisor-box">
                        	<a href="contact.php" class="theme-btn advisor-btn"> Consultation</a>
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
                	<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.php">Home</a></li>
                                <li ><a href="about.php">About us</a>
                                    
                                </li>
                                <li class="dropdown current"><a href="#">Practice Areas</a>
                                    <ul>
                                        <li><a href="practice.php">All Practices</a></li>
                                        <li><a href="family.php">Family Law</a></li>
                                        <li><a href="business.php">Business Law</a></li>
                                        <li><a href="criminal.php">Criminal Law</a></li>
                                        <li><a href="insurance.php">Insurance Law</a></li>
                                        <li><a href="drug.php">Drug Control Law</a></li>
                                        <li><a href="consumer.php">Consumer Law</a></li>
                                    </ul>
                                </li>
                                <li class=" "><a href="faq.php">Faq</a>
                                    </li>
                                <li class=""><a href="testimonial.php">Testimonial</a>  </li>
                                 
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
	
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>Insurance Law</h1>
            <ul class="page-breadcrumb">
            	<li>You are here:</li>
            	<li><a href="index.php">  Home</a></li>
                <li>Insurance Law</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar">
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li><a href="business.php"><span class="icon flaticon-balance"></span> Business Law</a></li>
                                <li><a href="family.php"><span class="icon flaticon-family"></span> Family Law</a></li>
                                <li><a href="criminal.php"><span class="icon flaticon-jail"></span> Criminal Law</a></li>
                                <li><a href="drug.php"><span class="icon flaticon-antibiotic"></span> Drug Control Law</a></li>
                                <li><a href="consumer.php"><span class="icon flaticon-write-letter"></span> Consumer Law</a></li>
                                <li class="active"><a href="insurance.php"><span class="icon flaticon-home"></span> Insurance Law</a></li>
                            </ul>
                        </div>
                        
                        <!--Brochures Widget-->
                        <div class="sidebar-widget brochures-widget">
                        	<div class="sidebar-title">
                            	<h2>Our <span class="theme_color">Brochures</span></h2>
                            </div>
                            <div class="widget-content">
                            	<div class="text">Our  <?php echo date("Y"); ?> law prospectus brochure for easy to read guide.</div>
                                <a href="#" class="download">Download PDF</a>
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="practice-single">
						<div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-7.jpg" alt="" />
                            </div>
                            <div class="lower-content">
                            	<h2>About <span class="theme_color">Insurance Law</span></h2>
                                <div class="text">
                                	<p>We render regulatory assistance and engage on policy development as well. We are aware of the regulatory landscape, the pulse of the regulator and the policies framed by it. We have been instrumental in making submissions before the regulator on innovative transactions involving the merger of two non-life insurers, which led to the framing of its guidelines and policy. It would be fair to claim that our initiative and deep understanding of the industry influenced the framing of these guidelines and our submissions to the regulator had a key role to structure and give shape to the policy.</p>
                                    <h3>Our Insurance <span class="theme_color">Services</span></h3>
                                    <p>In relation to contentious work, the Firm has the ability to handle and advise on claims made in a wide range of geographical regions even outside India. We assist with claims, whether at the stage of coverage advice or in a dispute, across a wide range of insurance lines including Financial & Specialty Lines (Tech E&O; Professional Indemnity; Directors & Officers; Media Liability; Cyber-risks; Medical Malpractice; Clinical Trials; Trade Credit; Political Risks), Property & Casualty (Standard Fire & Special Perils; Industrial All Risk; Contractors All Risk; Erection All Risk; Bespoke Mega Risk; Machinery Breakdown; Delay in Start-up/BI/ALOP; Commercial General Liability; Product Liability; Product Recall; Public Liability; Environmental; Marine & Inland Transit) as well as Reinsurance claims.</p>
                                    
                                    <!--Two Column--
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                            	
                                               
                                                <ul class="accordion-box style-two">
                                                    
                                                  
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-right"></span></div>Creating a Prenuptial Agreement</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">It is easy to become wrapped up in the excitement of love and a weddiing and to forget about what exactly could be should things go wrong.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                            
                                                   
                                                    <li class="accordion block active-block">
                                                        <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-right"></span></div>How to Get an Annulment</div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="text">It is easy to become wrapped up in the excitement of love and a wedding and to forget about what exactly could be should things go wrong.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                  
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-right"></span></div>Where is Same-Sex Marriage Legal</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">It is easy to become wrapped up in the excitement of loove and a wedding and to forget about what exactly could be should things go wrong.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                   
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-right"></span></div>What Is Family Law Mediation</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">It is easy to become wrapped up in the excitement of love and a wedding and to forget about what exactly could be should things go wrong.</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                
                                            </div>
                                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                            	<div class="image">
                                                	<img src="images/resource/service-8.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Two Column 
                                    <div class="row clearfix">
                                        <div class="column col-md-6 col-sm-6 col-xs-12">
                                            <h4>Family Law<span class="theme_color">international</span></h4>
                                            <ul class="list-style-three">
                                            	<li>ABA - International Family Law Committee</li>
                                                <li>EISIL - International Section on Family Law</li>
                                                <li>Family Law - AIRE Center</li>
                                                <li>Transnational and Comparative Family Law</li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-6 col-sm-6 col-xs-12">
                                            <h4>Family Law <span class="theme_color">Organizations</span></h4>
                                            <ul class="list-style-three">
                                            	<li>American Academy of Matrimonial Lawyers</li>
                                                <li>International Academy of Collaborative Professionals</li>
                                                <li>International Society of Family Law</li>
                                                <li>Resolution, First for Family Law - UK</li>
                                            </ul>
                                        </div>
                                    </div><!--Team Block-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Practice Team 
                    <div class="practice-team">
                    	<h2>Meet Family<span class="theme_color">Attorneys</span></h2>
                        <div class="row clearfix">
                        	
                           
                            <div class="team-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/team-1.jpg" alt="" />
                                        <div class="overlay-box">
                                            <div class="content">
                                                <ul class="team-info">
                                                    <li>97877-32-100</li>
                                                    <li>Jemstone@domain.com</li>
                                                </ul>
                                                <ul class="social-icon-one">
                                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">David Vigo Michel</a></h3>
                                        <div class="designation">Family Lawyer</div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="team-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/team-2.jpg" alt="" />
                                        <div class="overlay-box">
                                            <div class="content">
                                                <ul class="team-info">
                                                    <li>97877-32-100</li>
                                                    <li>Jemstone@domain.com</li>
                                                </ul>
                                                <ul class="social-icon-one">
                                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">David Vigo Michel</a></h3>
                                        <div class="designation">Family Lawyer</div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="team-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/team-3.jpg" alt="" />
                                        <div class="overlay-box">
                                            <div class="content">
                                                <ul class="team-info">
                                                    <li>97877-32-100</li>
                                                    <li>Jemstone@domain.com</li>
                                                </ul>
                                                <ul class="social-icon-one">
                                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">David Vigo Michel</a></h3>
                                        <div class="designation">Family Lawyer</div>
                                    </div>
                                </div>
                            </div>
                            <!--Team Block-->
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->
    
   <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/5.jpg)">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
					
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="index.php"><img src="images/footer-logo.png" alt="" /></a>
                            </div>
                            <div class="text">
                            	<p><?php echo $name; ?> is set up with a desire to bring client service into sharper focus, to provide commercially viable legal advice and committed legal representation to our clients across all sectors.    </p>
                            </div>
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                        	<h2>Usefull Links:</h2>
                            <div class="row clearfix">
                            	
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="list-style-one">
                                    	<li><a href="family.php">Family Law</a></li>
                                        <li><a href="drug.php">Drug Law</a></li>
                                        <li><a href="insurance.php">Insurance Law</a></li>
                                        <li><a href="testimonial.php">Testimonial</a></li>
                                    </ul>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="list-style-one">
                                    	<li><a href="criminal.php">Criminal Law</a></li>
                                        <li><a href="business.php">Business Law</a></li>
                                        <li><a href="consumer.php">Consumer Law</a></li>
                                        <li><a href="contact.php">Consultation</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget list-widget">
                        	<h2>Contact info:</h2>
                            <ul class="list-style-two">
                            	<li><span class="icon fa fa-envelope"></span><?php echo $email; ?></li>
                                <li><span class="icon fa fa-phone"></span><?php echo $phone; ?></li>
                                <li><span class="icon fa fa-map-marker"></span><?php echo $addr; ?></li>
                                <li><span class="icon fa fa-clock-o"></span>Office Hours: 09.00am - 17.00pm</li>
                            </ul>
                             
                        </div>
                    </div>
                
                </div>
            </div>
            
            <!--Footer Bottom-->
            <div class="footer-bottom">
            	<div class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            	<div class="copyright">&copy; <?php echo date("Y"); ?>   All rights reserved. by <a href="#"><?php echo $name; ?></a></div>
            </div>
            
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher  
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate navy-color" data-theme-file="css/color-themes/navy-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-theme.css"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div>
<!-- /.End Of Color Palate -->

<script src="js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from html.efforttech.com/html/supremelaw/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 22:51:53 GMT -->
</html>