<?php get_header(); ?>
	
    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style=""></div>
        <div class="pattern-layer-two" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-15.png)"></div>
        <div class="auto-container">
            <h2>Archive</h2>
<!--             <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Latest News</li>
            </ul> -->
        </div>
    </section>
    <!--End Page Title-->
    
    <!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">



        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 




                
                <!-- News Block -->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-single.html"><?php   if ( has_post_thumbnail() ) {  ?>
                            <div class="thumb"><?php the_post_thumbnail(); ?></div>         
<?php } else {  ?>
<div class="thumb"><img src="https://via.placeholder.com/370x250" alt="Thumbnail Image"></div> 
<?php }  ?>
</a>
                        </div>
                        <div class="lower-content">
                            <div class="category"><?php single_cat_title(); ?></div>
                            <h4><a href="<?php the_permalink(); ?>l"><?php the_title(); ?></a></h4>
                            <!-- <div class="text">The basic premise of search engine reputation management in to use the greate work</div> -->
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <!-- Author Box -->
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="https://via.placeholder.com/40x40" alt="" >
                                                </div>
                                                <?php the_author(); ?>, <span><?php the_time('F d, Y'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="blog-single.html" class="share"><span class="fa fa-share-alt"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                




<?php endwhile; else:?>  
				
                        <h1 class="notf">Not Found</h1>
                        <p>The page you are looking is not here..</p><br/><br/>

                <br/><br/>
                        
<?php endif; ?>						
                
            </div>
        

            <!-- Post Share Options -->
            <div class="styled-pagination text-center pagenavi">

<?php        
        if(function_exists('wp_pagenavi')) :
            wp_pagenavi();
        endif; 
?>

            </div>

        
        </div>
    </section>
    <!-- End Blog Section -->




<?php get_footer(); ?>		