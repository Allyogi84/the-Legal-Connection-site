<?php 
/*
Template Name: Contact Page
*/
 get_header(); ?>
 

 		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	

        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
    <!--             <div class="gdlr-core-pbf-wrapper " style="padding: 280px 0px 160px 0px;" id=gdlr-core-wrapper-1>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php// bloginfo('stylesheet_directory'); ?>/upload/slider-2.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.3></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Contact Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div></div>
                            </div>
                        </div>
                    </div>
                </div> -->

<div class="video_w"> 
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
      <source src="https://thelegalconnectionfl.com/beta2/wp-content/uploads/2020/06/Pexels-Videos-2651.mp4" type="video/mp4">
    </video>

    <!-- Optional: some overlay text to describe the video -->
    <div class="content">
    <h1 class="attorna-page-title">Contact Us</h1>
      <!-- Use a button to pause/play the video with JavaScript -->

    </div> 
</div>


<style type="text/css">
 /* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: relative;
    right: 0;
    bottom: 0;
    min-width: 100%;
    height: auto;
    width: 100%;
}
.video_w{position: relative;}

/* Add some content at the bottom of the video/page */
.content {
  position: absolute;
  top: 38%;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.video_w {
    width: 100%;
    /*max-height: 550px;*/
    overflow: hidden;
}
.video_w h1 {
    color: #fff;
    text-align: center;
}   
@media (max-width:485px){
.content {
  top: 35%;
}
.video_w h1 {
    font-size: 35px !important;
} 
}
</style>
</style>

                <div class="gdlr-core-pbf-wrapper " style="padding: 40px 0px 35px 0px;" data-skin="White Text">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #161616 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Phone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>

                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;">
                                                    <p>Main: <a href="tel:(877) 201-3686">(877) 201-3686</a><br>
Office: <a href="tel:(754) 205-4433">(754) 205-4433</a><br>
Fax: <a href="tel:(954) 301-0616">(954) 301-0616</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInDown data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
    
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p><a href=mailto:Thelegalconnectionfl@gmail.com>Thelegalconnectionfl@gmail.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
<p>537 East Sample Rd<br>
Pompano Beach, FL 33064</p>
<p>130 S. Indiana River Drive, Ste 202<br>
Fort Pierce, FL 34950</p>
<p>130 S. Orange Blossom Trail, Unit 123<br>
Orlando, FL 32809 </p>
<p>3450 North Lake Blvd,<br/>
Palm Beach Gardens, FL 33403
</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p><a href=#><!-- View On Google Map --></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #f3f3f3 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;letter-spacing: 0px ;text-transform: none ;">Leave us your info <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;">and we will get back to you.</span>
<span class="goldline"><i class="fas fa-globe"></i> We Speak English / Se Habla Espanol / Nou pale kreyòl</span>
                                                </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div role=form class=wpcf7 id=wpcf7-f1979-p1964-o1 lang=en-US dir=ltr>
                                                    <div class=screen-reader-response></div>
                                                        
     <?php echo do_shortcode( '[contact-form-7 id="136" title="Contact Page"]' ); ?>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                    <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                                        <iframe style="width:100%; height:480px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.5588751929936!2d-80.11889358570335!3d26.275976583405914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d91d48e4296af5%3A0xdb73cb5254e62b07!2s537%20E%20Sample%20Rd%2C%20Pompano%20Beach%2C%20FL%2033064%2C%20USA!5e0!3m2!1sen!2sbd!4v1591270131456!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        
                                        <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #ffffff ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



		<?php endwhile; ?>
		<?php endif; ?>	

				
<?php get_footer(); ?>	