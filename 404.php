<?php get_header(); ?>

	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style=""></div>
		<div class="pattern-layer-two" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>Error 404</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Error 404</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Error Section -->
    <section class="error-section">
		<div class="auto-container">
			<div class="image">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/404.png" alt="" />
			</div>
			<div class="text">The page you are Looking for was Moved, Removed, Renamed or Might Never Existed</div>
			<div class="btns-box text-center">
				<a href="<?php  echo get_option('home'); ?>" class="theme-btn btn-style-four"><span class="txt">Go Home</span></a>
				<a href="<?php  echo get_option('home'); ?>/contact" class="theme-btn btn-style-three"><span class="txt">Contact</span></a>
			</div>
		</div>
	</section>
	<!-- End Blog Section -->
	
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

		

				
			
<?php get_footer(); ?>	