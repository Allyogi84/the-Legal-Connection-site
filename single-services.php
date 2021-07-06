<?php

 get_header(); ?>


        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 

     
        <div class="attorna-page-title-wrap  attorna-style-custom attorna-center-align">
            <div class=attorna-header-transparent-substitute></div>
            <div class=attorna-page-title-overlay></div>
            <div class="attorna-page-title-container attorna-container">
                <div class="attorna-page-title-content attorna-item-pdlr">
                    <h1 class="attorna-page-title"><?php the_title(); ?> </h1></div>
            </div>
        </div>




        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>


                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
    <?php the_content(); ?> 

                            </div>
                        </div>
                    </div>
                </div>




        </div><!-- End Container -->
</div><!-- End Container Wrap  -->


        <?php endwhile; ?>
        <?php endif; ?> 



            










        

    
<?php get_footer(); ?>  