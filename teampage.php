<?php 
/*
Template Name: Team Page 
*/
 get_header(); ?>
	
        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 


<?php

        // vars
         $tm_section_title=get_field('tm_section_title');
         $tm_big_title=get_field('tm_big_title');
         $tm_description=get_field('tm_description');
         $image_1=get_field('image_1');
         $image_2=get_field('image_2');
         $image_3=get_field('image_3');

?>     

	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style=""></div>
		<div class="pattern-layer-two" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2><?php the_title(); ?></h2>

        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Team Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title  centered">
				<div class="title"><?php echo $tm_section_title; ?></div>
				<h2><?php echo $tm_big_title; ?></h2>
				<?php if($tm_description){?><div class="text"><?php echo $tm_description; ?></div><?php }?>
			</div>			
			<div class="row clearfix">
				
<?php        
    $args = array(
      'post_type' => 'teams', 
      'order' => 'desc',
      'orderby' => 'post_date',
      'posts_per_page' => 3
      );

$my_query = new WP_Query( $args ); 

    while ( $my_query->have_posts() ) :  $my_query->the_post(); 
    
?>

              
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                           <?php   if ( has_post_thumbnail() ) {  ?>
                            <div class="thumb"><?php the_post_thumbnail(); ?></div>         
<?php } else {  ?>
<div class="thumb"><img src="https://via.placeholder.com/370x443" alt="Team Image"></div> 
<?php }  ?>

                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="designation"><?php the_field('designation'); ?></div>
                                <!-- Social Box -->

                            </div>
                        </div>
                    </div>
                </div>

            <?php  endwhile; ?>
            <?php  wp_reset_query(); ?>        <!--  End loop     -->

				




				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->

    

	

	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/<?php bloginfo('stylesheet_directory'); ?>/images/background/map-pattern.png)">
		<div class="dotted-layer" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-11.png)"></div>
		
		<div class="icon-layer" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/icons/cross-icon.png)"></div>
		<div class="icon-layer-two" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/icons/icon-1.png)"></div>
		<div class="icon-layer-three" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/icons/icon-2.png)"></div>
		<div class="icon-layer-four" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/icons/icon-1.png)"></div>
		
		<div class="auto-container">
			<div class="title"></div>
			<h2>Interested in Joining our growing team? Contact our Human Resources team to see if we have any openings</h2>
			<a href="<?php  echo get_option('home'); ?>/contact" class="theme-btn btn-style-three"><span class="txt">Contact Us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	

	<!-- Call To Action Section -->
	<section class="" >
		<div class="auto-container">
            <div class="row clearfix">
				<div class="team-box col-md-12 col-sm-12">
					<img src="<?php echo $image_1['url']; ?>" alt="Image">
					<br>
					<br>
				</div>
				<div class="team-box col-md-12 col-sm-12">
					<img src="<?php echo $image_2['url']; ?>" alt="Image">
				</div>	
            </div>
        </div>    
	</section>
            


        <?php endwhile; ?>
        <?php endif; ?> 				
							
<?php get_footer(); ?>		