<?php

 get_header(); ?>



	 
 <div class="wrapper default">


<!-- Container Wrap ## 
================================================= -->
<div class="container-wrap woo_w" >

	<div class="container">	
		<?php woocommerce_breadcrumb(); ?>
		<div class="row">
			<div class="col-md-9">
				<div class="woocommerce">
					<?php if ( have_posts() ) : ?>
	                    <?php woocommerce_content(); ?>
	                <?php endif; ?>
		                
				</div>
	                
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'Product Widget' ); ?> 
			</div>			
		</div><!-- End Row -->

	</div><!-- End Container -->

</div><!-- End Container Wrap  -->





			










		

	
<?php get_footer(); ?>	