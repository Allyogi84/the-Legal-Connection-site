<?php 
/*
Template Name: Practice Areas 
*/
 get_header(); ?>
 

 		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	



<div class="video_w"> 
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
      <source src="https://thelegalconnectionfl.com/beta2/wp-content/uploads/2020/06/Pexels-Videos-2625.mp4" type="video/mp4">
    </video>

    <!-- Optional: some overlay text to describe the video -->
    <div class="content">
    <h1 class="attorna-page-title">Practice Areas</h1>
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
  top: 30%;
}
.video_w h1 {
    font-size: 35px !important;
} 
}
</style>
<!--         <div class="attorna-page-title-wrap  attorna-style-custom attorna-center-align">
            <div class=attorna-header-transparent-substitute></div>
            <div class=attorna-page-title-overlay></div>
            <div class="attorna-page-title-container attorna-container">
                <div class="attorna-page-title-content attorna-item-pdlr">
                    <h1 class="attorna-page-title">Practice Areas</h1></div>
            </div>
        </div> -->
        <?php// echo do_shortcode( '[contact-form-7 id="135" title="Home Form"]' ); ?>
        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                                <div class="gdlr-core-pbf-wrapper servicegrid" style="padding: 95px 0px 30px 0px;">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a8a8a8 ;">what we are expert at</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;">Legal Practice Areas<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 70px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>

                    <div class="row">                             
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-crutch"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Personal Injury<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>Our experienced and passionate team at The Legal Connection have helped injured Floridians and their families. We’ll help you get the compensation you deserve after a serious injury.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/personal-injury style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-car-crash"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Auto Accidents<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>With years of experience and access to expert resources to investigate and prove your case, we are prepared to help you get results.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/auto-accidents style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 13px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 36px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-user-injured"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Slip and Falls<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>Injuries can overwhelm your life, don’t let this happen. If you have been seriously injured as a result of slip and fall or trip and fall contact us today.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/slip-and-falls style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-briefcase"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Workers Comp<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>We serve all victims of work related injuries and welcome the challenges of difficult cases involving serious injuries and their complex issues. We know how to fight the insurance companies and win.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/workers-comp style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-users"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Family Law<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>We will work hard to achieve amicable settlements over litigation, while protecting the rights of our clients and the best interests of the children.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/family-law style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-hospital"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">PIP SUITS<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>First, most people do not readily understand what a “PIP suit” is. Often, it gets confused with personal injury cases that most are familiar with.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/pip-suits/ style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-baby"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Child Support<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>We will ensure that child support is calculated correctly the first time. We protect the rights of our clients as they navigate transition. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/child-support style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-people-arrows"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Divorce<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>Taking the step to end your marriage is emotionally draining. Faced with more than just a future without your partner, you have uncertainties about your financial security...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/divorce style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle imgicon" style="border-width: 0px;"><i class="fas fa-home"></i></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Real Estate Defense<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>Our team covers every aspect of real estate defense such as Foreclosure, Eviction, Modification, Debt Defense, and Short Sale....</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=<?php  echo get_option('home'); ?>/real-estate-defense style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                    </div> <!-- End row   -->   

                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 160px 0px 125px 0px;">
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/page-title-background.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 3px ;color: #ffffff ;">ARE YOU LOOKING FOR SOMEONE TO HELP IMMEDIATELY?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;font-weight: 400 ;text-transform: none ;color: #b1976b ;">Don't wait another minute. Call Now: (877) 201-3686<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space">
                                    <div class=gdlr-core-text-box-item-content style="text-transform: none ;color: #ffffff ;">
                                        <div style="margin-left: 12px; margin-right: 0px; display: inline;"><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i>Thelegalconnection@outlook.com</div>
                                        <div style="margin-left: 5px; margin-right: 13px; display: inline;">· <i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>Mon-Fri- 9-6pm . Saturday by Appointment </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




		<?php endwhile; ?>
		<?php endif; ?>	

				
<?php get_footer(); ?>	