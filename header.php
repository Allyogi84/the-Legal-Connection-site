<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html class="no-js">
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" /> 

    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?php the_field( 'keywords', 'option' ); ?> " />
    <meta name="description" content="<?php the_field( 'description', 'option' ); ?> " />
	<meta name="author" content="Shaid Islam" />

    <!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title><?php
	/*************************************************
	###	title tags
	*************************************************/
	?>
	<?php  	 $title= get_bloginfo('name');	 ?>

	<?php if ( is_front_page() ) {  echo $title;  } ?>

	<?php if ( is_search() ) { _e("Search Results"); ?> | <?php echo $title; ?><?php } ?>

	<?php if ( is_author() ) { _e("Author Archives");?> | <?php echo $title; ?><?php } ?>

	<?php if ( is_404() ) { _e("Page Not Found "); ?>| <?php echo $title; ?><?php } ?>

	<?php if ( is_single() ) { ?><?php wp_title('');  } ?>

	<?php if ( is_page() ) { ?><?php wp_title(''); } ?>

	<?php if ( is_category() ) { ?><?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>

	<?php if ( taxonomy_exists('portfolio_category') ) { ?><?php single_cat_title(); ?>| <?php bloginfo('name'); ?><?php } ?>

	<?php if ( is_month() ) { ?><?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>

	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>| Tag Archive | <?php single_tag_title("", true); } } ?>
 <?php if(ewstheme_is_wc()): ?>  
	<?php if ( is_woocommerce() ) { _e("Shop"); ?> | <?php echo $title; ?><?php } ?>
<?php  endif;  ?>  	
	</title>
	
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

 
<!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
 <!-- Stylesheets -->
 <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/css/attorna-style-custom.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/css/custom.css' type=text/css media=all>
    <link rel=stylesheet href='<?php bloginfo('stylesheet_directory'); ?>/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>


    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/abf046a1c8.js" crossorigin="anonymous"></script>



<?php 
$fav = get_field('favicon', 'option');
$templateDir = get_bloginfo('stylesheet_directory');

 if (get_field('logo', 'option')):
	$logo = get_field('logo', 'option');
	 else : 
	 	$logo= get_bloginfo('stylesheet_directory').'/upload/logo.png';  
	 endif; 

 if (get_field('sticky_logo', 'option')):
	$sticky_logo = get_field('sticky_logo', 'option');
	 else : 
	 	$sticky_logo= $logo;  
	 endif; 
?> 


<script>
	var templateDir = "<?php bloginfo('stylesheet_directory'); ?>";
	var homeDir = "<?php  echo get_option('home'); ?>";
	var postnum = "<?php  echo get_field('number_post'); ?>";
	var logoimg = "<?php echo $logo; ?>";	
	var logost = "<?php echo $sticky_logo; ?>";
	
</script>
<?php wp_head(); ?> 	
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Favicons -->
<?php  if ($fav): ?><link rel="shortcut icon" href="<?php echo $fav; ?>" /><?php else : ?><link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon" /><?php endif; ?>
<?php  if ($fav): ?><link rel="icon" href="<?php echo $fav; ?>" /><?php else : ?><link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon" /><?php endif; ?>


<!-- Skin Settings -->	
<?php //include 'skin.php'; ?>	

<style type="text/css"><?php the_field('custom_css','option'); ?></style>
<script type="text/javascript">
	<?php the_field('custom_js','option'); ?>
</script>

<?php the_field('fb_custom_js','option'); ?>

</head>
  
<?php if (  is_page_template( 'homepage.php' ) ) {?>
	  <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox">
<?php } else {?>
	  <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox inner"> <!-- inner -->
<?php } ?>


<div class=attorna-mobile-header-wrap>
    <div class="attorna-mobile-header attorna-header-background attorna-style-slide attorna-sticky-mobile-navigation " id=attorna-mobile-header>
        <div class="attorna-mobile-header-container attorna-container clearfix">
            <div class="attorna-logo  attorna-item-pdlr">
                <div class=attorna-logo-inner>
                    <a class href=index.html><img src=<?php bloginfo('stylesheet_directory'); ?>/upload/logo.png alt width=400 height=71 title=logo></a>
                </div>
            </div>
            <div class=attorna-mobile-menu-right>
                <div class=attorna-main-menu-search id=attorna-mobile-top-search><i class="fa fa-search"></i></div>
                <div class=attorna-top-search-wrap>
                    <div class=attorna-top-search-close></div>
                    <div class=attorna-top-search-row>
                        <div class=attorna-top-search-cell>
                            <form role=search method=get class=search-form action=#>
                            <input type=text class="search-field attorna-title-font" placeholder=Search... value name=s>
                            <div class=attorna-top-search-submit><i class="fa fa-search"></i></div>
                            <input type=submit class=search-submit value=Search>
                            <div class=attorna-top-search-close><i class=icon_close></i></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=attorna-mobile-menu><a class="attorna-mm-menu-button attorna-mobile-menu-button attorna-mobile-button-hamburger-with-border" href=#attorna-mobile-menu><i class="fa fa-bars" ></i></a>
                    <div class="attorna-mm-menu-wrap attorna-navigation-font" id=attorna-mobile-menu data-slide=right>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'Main_menu',
            'depth'             => 2,
            'container'         => false,
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'm-menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="attorna-body-outer-wrapper ">
    <div class="attorna-body-wrapper clearfix  attorna-with-frame">
        <div class=attorna-top-bar>
            <div class=attorna-top-bar-background></div>
            <div class="attorna-top-bar-container attorna-container ">
                <div class="attorna-top-bar-container-inner clearfix">
                    <div class="attorna-top-bar-left attorna-item-pdlr"><i class="fa fa-phone" style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>(877) 201-3686
                        <div style="margin-left: 12px; margin-right: 14px; display: inline;">&#183;</div><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i><a href=mailto:Thelegalconnectionfl@gmail.com>Thelegalconnectionfl@gmail.com</a>
                        <div style="margin-left: 10px; margin-right: 13px; display: inline;">&#183;</div><i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i> Mon-Fri - 9-6pm . Saturday by Appointment
</div><!-- <a class=attorna-top-bar-right-button href=<?php// echo get_option('home'); ?>/#gdlr-core-wrapper-3 target=_self><i class="fa fa-comment-o" ></i>Contact Us</a> -->
                        <span class="attorna-top-bar-right-button goldline" style="background: none;font-size: 13px ;color: #b1976b ;text-transform: capitalize;">We Speak English / Se Habla Espanol / Nou pale kreyòl</span>
                </div>
            </div>
        </div>
        <header class="attorna-header-wrap attorna-header-style-plain  attorna-style-menu-right attorna-sticky-navigation attorna-style-fixed" data-navigation-offset=75px>
            <div class=attorna-header-background></div>
            <div class="attorna-header-container  attorna-container">
                <div class="attorna-header-container-inner clearfix">
                    <div class="attorna-logo  attorna-item-pdlr">
                        <div class=attorna-logo-inner>
<?php $logo_type = get_field('logo_type', 'option'); ?>
<?php if( !$logo_type || $logo_type =='imagel'){ ?>     
                <a href="#" class="">
                    <?php if ($logo) {?>
                            <img src="<?php echo $logo; ?>"  title="" alt="logo"  width=400 height=71 />  
                    <?php }?>   
                </a>                            
<?php }elseif($logo_type =='both'){ ?>
<a href="#<?php// echo get_option('home'); ?>/" class=""> 
        <?php if ($logo) {?>
                <img src="<?php echo $logo; ?>" title="" alt="logo"/>  
        <?php }?>
        <?php the_field('logo_text', 'option');?><i>.</i>
</a>        
    
<?php }else{ ?>
<a href="<?php echo get_option('home'); ?>/#top" class=""> 
<!-- <span class="fa-stack">
    <i class="fa logo-hex fa-stack-2x"></i>
    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
</span> -->
        <?php the_field('logo_text', 'option');?><i>.</i>
</a>        
    
<?php } ?>                             
                        </div>
                    </div>
                    <div class="attorna-navigation attorna-item-pdlr clearfix ">
                        <div class=attorna-main-menu id=attorna-main-menu>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'Main_menu',
            'depth'             => 2,
            'container'         => false,
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'sf-menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>


                            <div class=attorna-navigation-slide-bar id=attorna-navigation-slide-bar></div>
                        </div>
                        <div class="attorna-main-menu-right-wrap clearfix ">
                            <div class=attorna-main-menu-search id=attorna-top-search><i class="fa fa-search"></i></div>
                            <div class=attorna-top-search-wrap>
                                <div class=attorna-top-search-close></div>
                                <div class=attorna-top-search-row>
                                    <div class=attorna-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                        <input type=text class="search-field attorna-title-font" placeholder=Search... value name=s>
                                        <div class=attorna-top-search-submit><i class="fa fa-search"></i></div>
                                        <input type=submit class=search-submit value=Search>
                                        <div class=attorna-top-search-close><i class=icon_close></i></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>