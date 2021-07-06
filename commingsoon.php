<?php 
/*
Template Name: Coming soon page
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Next Trend Digital | Comming Soon</title>
<!-- Stylesheets -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href=<?php bloginfo('stylesheet_directory'); ?>/"css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style id="clock-animations"></style>

<?php 
$fav = get_field('favicon', 'option');

 if (get_field('logo', 'option')):
	$logo = get_field('logo', 'option');
	 else : 
	 	$logo= get_bloginfo('stylesheet_directory').'/images/logo.png';  
	 endif; 

?>  
<style type="text/css"><?php the_field('custom_css','option'); ?></style>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
	
	<!-- Coming Soon -->
    <section class="coming-soon" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/1.jpg);">
        <div class="content">
            <div class="content-inner">
                <div class="auto-container">
                    <div class="logo"><a href="#"><img src="<?php echo $logo; ?>" alt="" /></a></div>
                    <div class="sec-title"><h2>Coming Soon</h2></div>
                    <div class="time-counter">
                        <!-- Time Countdown -->
                        <div class="time-countdown clearfix" data-countdown="2020/5/21"></div>

                        <!-- Clock / Bg Clock -->
                        <div class="clock-wrapper">
                            <div class="clock-base">
                                <div class="click-indicator">
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                    <div><span></span></div>
                                </div>
                                <div class="clock-hour"></div>
                                <div class="clock-minute"></div>
                                <div class="clock-second"></div>
                                <div class="clock-center"></div>
                            </div>
                        </div>
                    </div>
                    <!--Emailed Form-->
                    <div class="emailed-form">
                        <h3>Our Website is under construction.</h3>
                        <div class="text">stay tuned for something amazing! </div>
                        <form method="post" action="index.html">

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->
	
</div>
<!--End pagewrapper-->



<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/appear.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.countdown.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/nav-tool.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/color-settings.js"></script>

</body>
</html>	