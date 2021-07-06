<?php get_header(); ?>
	
    <!-- Carousel Slider
    ================================================== -->
<div class="col-wrap page-title"><!-- style col-shadow/ col-gray/ testimonial/-->
<div class="container ">
	<h2>Search</h2>	
</div>
</div><!-- /.col -->


<div class="col-wrap product single"><!-- style col-shadow/ col-gray/ testimonial/-->
<div class="container ">

<div id="search_t">
<div id="searchpage">
	<form method="get" id="searchpageform" action="<?php bloginfo('home'); ?>" >
	<input id="sform" class="rounded" type="text" name="s" onfocus="if(this.value=='search site'){this.value=''};" onblur="if(this.value==''){this.value='search site'};" value="<?php echo wp_specialchars($s, 1); ?>" />
	<input id="formsubmit" type="submit" value="Search" />
	</form>
</div>
<p style="margin:10px 0px 0px 0px">
<?php
$mySearch =& new WP_Query("s=$s & showposts=-1");
$num = $mySearch->post_count;
echo $num.' search results for '; the_search_query();
?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> seconds.
</p>
</div>
			



		
      <!-- Three columns of text below the carousel -->
      <div class="row-fluid b-mar  pad-b"><!-- box-style row Class .box-style -->	 
        <div class="span12 ">
		 <?php  if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		

					
			

		<h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php wpe_excerpt('wpe_excerptlength_index', 'new_excerpt_more2'); ?>


<br/><br/>							
		<?php endwhile; else:?>		
							
							

						<h1 class="notf">Not Found</h1>
						<p>The page you are looking is not here..</p><br/><br/>

				<br/><br/>
						
					<?php endif; ?>
        </div><!-- /.span12 -->		
      </div><!-- /.row -->			






		

<div class="row-fluid b-mar">
	<div class="span12">
				<div class="pagenavi navgrid">
<?php wp_pagenavi(); ?>
				</div>
				
	</div><!-- /.span12 -->
</div><!-- /.row-fluid -->	  
</div>
</div><!-- /.col -->
				
				
			
<?php get_footer(); ?>	