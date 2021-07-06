<?php get_header(); ?>

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
        <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-14.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-15.png)"></div>
        <div class="auto-container">
            <h2><?php the_title(); ?></h2>
<!--             <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Services Detail</li>
            </ul> -->
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                

                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="services-detail">
                        <div class="inner-box">
                            <div class="image">
<?php   if ( has_post_thumbnail() ) {  ?>
                            <div class="thumb"><?php the_post_thumbnail(); ?></div>         
<?php }  ?>
                            </div>
                            <div class="lower-content">
                            <div class="content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="designation"><?php the_field('designation'); ?></div>
                                <!-- Social Box -->

                            </div>                                
                                <div class="text">
 <?php  the_content();   ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    
 
    
    <!-- Newsletter Section -->
    <section class="newsletter-section margin-bottom">
        <div class="auto-container">
            <div class="inner-container">
                
                <div class="row clearfix">
                    
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <span class="icon flaticon-rocket-ship"></span>
                            <h4>Subscribe for Newsletter</h4>
                            <div class="text">Grow Your Business with Our SEO Agency</div>
                        </div>
                    </div>
                    
                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Emailed Form-->
                            <div class="emailed-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email Address" required>
                                        <button type="submit" class="theme-btn">Lets Start</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Newsletter Section -->
    



        <?php endwhile; ?>
        <?php endif; ?> 



            

        

    
<?php get_footer(); ?>  