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
                                <li ><a href="index.php">Home</a></li>
                                <li ><a href="about.php">About us</a>
                                    
                                </li>
                                <li class="dropdown"><a href="#">Practice Areas</a>
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
                                <li class="current"><a href="testimonial.php">Testimonial</a>  </li>
                                 
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
                                <li  ><a href="index.php">Home</a></li>
                                <li ><a href="about.php">About us</a>
                                    
                                </li>
                                <li class="dropdown"><a href="#">Practice Areas</a>
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
                                <li class="current"><a href="testimonial.php">Testimonial</a>  </li>
                                 
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
        	<h1>Testimonial</h1>
            <ul class="page-breadcrumb">
            	<li>You are here:</li>
            	<li><a href="index-2.html">Home</a></li>
                <li>Testimonial</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Team Page Section-->
    <section class="testimonials-page-section">
    	<div class="auto-container">
        	<div class="masonry-items-container row clearfix">
            
            	<!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Steve Matt</h3>
                        <div class="text">Great experience overall having <?php echo $name; ?> as my attorney. <?php echo $name; ?> understands his client, very insightful and is an expert in his field. Truly a professional and marvelous company..</div>
                         
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Sarah Cadwell</h3>
                        <div class="text">Professional. Efficient. Personable. The team at <?php echo $name; ?> executed my dissolution expeditiously and fairly. Highly recommend their services.</div>
                        
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Philip Ibrahim</h3>
                        <div class="text">My experiences with <?php echo $name; ?> were stupendous through and through. These people know their craft and walk the extra mile for you.</div>
                         
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Jane Seymour</h3>
                        <div class="text">Matt Cadwell helped me finish a long time case I’ve been trying to wrap up for years. He was completely understanding, professional and worked very diligently to the end and I’m so grateful! Highly recommend!.</div>
                        
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Ellie Goulding</h3>
                        <div class="text">Our lawyer,  was outstanding. Calm, patient, reasonable in the turmoil we were going through. We would definitely use Boyd Law again although we hope not to have to.</div>
                       
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Erma Bombeck</h3>
                        <div class="text">Hands down the best law firm out there. They stuck through a very difficult divorce and child custody case with me. I had battled for years.</div>
                        
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Gary Jones</h3>
                        <div class="text">The rapport and guidance was outstanding at all times, prompt, timely and open for calls and quick updates, and worked through all of the questions and issues on this case. </div>
                        
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Groucho Marx</h3>
                        <div class="text">I contacted this firm last minute and they were by far, the friendliest, most helpful firm in the area. This firm had less than 24 hours to prepare for my case. Not only were they swift with their actions, they also worked with me financially.</div>
                       
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block Two-->
				<div class="testimonial-block-two masonry-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Ralph Block</h3>
                        <div class="text">Simply phenomenal from start to finish. We could not have had a more kind and considerate lawyer. The whole legal team have been responsive, professional and empathic throughout our court needs.</div>
                       
                        <div class="quote-icon">
                        	<span class="icon flaticon-right-quote"></span>
                        </div>
                    </div>
                </div>
                
			</div>
        </div>
    </section>
    <!--End Team Page Section-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/resource/image-2.png" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>We are <span class="theme_color"><?php echo $name; ?>:</span></h2>
                        </div>
                        <div class="bold-text">Our team is comprehensive, strategic, one step ahead, and a powerful opponent. </div>
                        <div class="inner-block">
                            <h4>
                            When you hire our firm to manage your case, you have hired a team of legal advocates who care, who will keep you informed, who will fight for you, and be the voice you need to represent you again the opposing party and their attorneys. <br><br>
                        This unique skill set allows us to provide global service to our clients, resolving multiple legal issues that are often intertwined. We are able to leverage our internal resources, keeping cases in-house without the need to bifurcate a matter resulting in a more efficient resolution.</h4></div>
                        <div class="single-item-carousel owl-carousel owl-theme">
                            
                          <!--  <div class="testimonial-block">
                                <div class="inner-block">
                                    <div class="text">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis pe.</div>
                                    <div class="author-info">
                                        <div class="image"><img src="images/resource/author-1.jpg" alt="" /></div>
                                        <h3>Robert H. Schuller</h3>
                                        <div class="designation">Finance Manager</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="testimonial-block">
                                <div class="inner-block">
                                    <div class="text">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis pe.</div>
                                    <div class="author-info">
                                        <div class="image"><img src="images/resource/author-1.jpg" alt="" /></div>
                                        <h3>Robert H. Schuller</h3>
                                        <div class="designation">Finance Manager</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="testimonial-block">
                                <div class="inner-block">
                                    <div class="text">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis pe.</div>
                                    <div class="author-info">
                                        <div class="image"><img src="images/resource/author-1.jpg" alt="" /></div>
                                        <h3>Robert H. Schuller</h3>
                                        <div class="designation">Finance Manager</div>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
    
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
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from html.efforttech.com/html/supremelaw/testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 22:52:22 GMT -->
</html>