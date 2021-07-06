<?php 
/*
Template Name: HomePage Template 
*/
 get_header(); ?>
 
        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 


    <!--Banner Section-->
        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                    <div id=rev_slider_1_1_wrapper class="rev_slider_wrapper fullwidthbanner-container" data-source=gallery style="margin:0px auto;background:#202020;padding:0px;margin-top:0px;margin-bottom:0px;">
                                        <div id=rev_slider_1_1 class="rev_slider fullwidthabanner" style=display:none; data-version=5.4.8.2>
                                            <ul>
                                                <li data-index=rs-1 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src=<?php bloginfo('stylesheet_directory'); ?>/upload/slider-1.jpg alt title=slider-1 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;">Welcome to The</div>
                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-1-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">Legal Connection</div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['100']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">A full-sevice law firm with over 10 years of experience specializing in Personal Injury, Auto Accidents, Slip and Falls, Worker's Comp, Family Law and more.</div>
                                                    <a href="<?php echo get_option('home'); ?>/contact-us/"><div class="tp-caption rev-btn rev-withicon " id=slide-1-layer-7 data-x=center data-hoffset data-y=center data-voffset=150 data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type=button data-responsive_offset="on" data-frames='[{"delay":790,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(174,148,104);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[14,14,14,14] data-paddingright=[17,17,17,17] data-paddingbottom=[16,16,16,16] data-paddingleft="[23,23,23,23]" style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 2.5px;font-family:Poppins;text-transform:uppercase;background:linear-gradient(180deg, rgba(131,102,62,1) 0%, rgba(176,150,106,1) 100%);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Contact Now<i class=fa-icon-long-arrow-right></i></div></a>
                                                </li>
                                                <li data-index=rs-2 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-2-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src=<?php bloginfo('stylesheet_directory'); ?>/upload/slider-2.jpg alt title=slider-2 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;">Welcome to The</div>
                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-2-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">Legal Connection</div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['100']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">A full-sevice law firm with over 10 years of experience specializing in Personal Injury, Auto Accidents, Slip and Falls, Worker's Comp, Family Law and more.</div>
                                                   <a href="<?php echo get_option('home'); ?>/contact-us/"> <div class="tp-caption rev-btn rev-withicon " id=slide-2-layer-7 data-x=center data-hoffset data-y=center data-voffset=150 data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type=button data-responsive_offset="on" data-frames='[{"delay":790,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(174,148,104);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[14,14,14,14] data-paddingright=[17,17,17,17] data-paddingbottom=[16,16,16,16] data-paddingleft="[23,23,23,23]" style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 2.5px;font-family:Poppins;text-transform:uppercase;background:linear-gradient(180deg, rgba(131,102,62,1) 0%, rgba(176,150,106,1) 100%);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Contact Now<i class=fa-icon-long-arrow-right></i></div></a>
                                                </li>
                                            </ul>
                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="margin: -70px 0px 0px 0px;padding: 0px 0px 0px 0px;" id=gdlr-core-wrapper-1>
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" style="box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); background-color: #ffffff ;border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 40px 20px 45px;" data-sync-height=height-about>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 8px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 16px ;font-weight: 700 ;letter-spacing: 4px ;">ABOUT THE LEGAL CONNECTION<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                                    <div class=gdlr-core-divider-container style="max-width: 39px ;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 4px ;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                                    <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                        <p>As the premier law firm in Florida with offices in Broward, West Palm Beach, St. Lucie County and Orlando, The Legal Connection helps clients overcome challenges and accomplish the best possible outcomes. One of the most versatile law firms in the Florida area, we focus on Personal Injury, Slip and Falls, Worker’s Comp, PIP Suits, Child Support, Divorce and Family Law.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><!-- <img src=<?php// bloginfo('stylesheet_directory'); ?>/upload/sign-black.png alt width=254 height=47 title=sign-black> --></div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class=gdlr-core-text-box-item-content style="font-size: 11px ;font-weight: 400 ;letter-spacing: 4px ;text-transform: uppercase ;">
                                                        <p> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-hide-in-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height=height-about>
                                        <div class=gdlr-core-pbf-background-wrap style="border-radius: 0px 4px 4px 0px;-moz-border-radius: 0px 4px 4px 0px;-webkit-border-radius: 0px 4px 4px 0px;">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/hp-about-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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


                <div class="gdlr-core-pbf-wrapper " style="padding: 170px 0px 225px 0px;" data-skin="white client" id=gdlr-core-wrapper-2>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/pattrick1-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;color: #b1976b ;"></span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">Why Clients Choose Us?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-2>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 30px 65px;" data-sync-height=height2>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                                    <p><strong>Hard Working, Earnest, and Effective. </strong><br>
                                                    </p>
                                                    <ul><li>Hard–working—The Legal Connection works for you until the job gets done without the constraints of a typical 9 A.M.-5 P.M. work day.</li><li>Earnest—We make ourselves directly available to our clients and always keep communications channels open.</li><li>Effective—At The Legal Connection the client is the ultimate decision–maker. Beginning with the initial interview, the firm and the client engage in a cooperative process in which the client explains what he or she expects from the firm and the firm counsels on the best course of action to achieve the client's goals and meet expectations.</li></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-3>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 65px 0px 0px;" data-sync-height=height2>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                                    <p><strong>Focused on Results </strong><br>
                                                    </p>
                                                    <p>When you participate in an initial intake session with The Legal Connection we will ask you a set of detailed questions with a focus on what you want to accomplish. With the results you want to achieve always in mind, we explain our initial assessment and the likelihood of achieving those results in clear, easy-to-understand language. You might say we always begin the process with the end in mind.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="margin: -140px auto 0px auto;padding: 0px 0px 100px 0px;max-width: 845px ;" data-skin="Grey Contact Form" id=gdlr-core-wrapper-3>
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id=gdlr-core-column-4>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 80px 60px 0px 60px;">
                                    <div class=gdlr-core-pbf-background-wrap style="box-shadow: 0 0 46px rgba(0, 0, 0,0.08); -moz-box-shadow: 0 0 46px rgba(0, 0, 0,0.08); -webkit-box-shadow: 0 0 46px rgba(0, 0, 0,0.08); border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/statue-con.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 55px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #303030 ;">Consultation<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;color: #6d6d6d ;margin-top: 15px ;">Fill out the convenient form below or call (877) 201-3686 to schedule a meeting with our team at The Legal Connection LLC. </span>
                                                <span class="goldline"><i class="fas fa-globe"></i> We Speak English / Se Habla Espanol / Nou pale kreyòl</span></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div role=form class=wpcf7 id=wpcf7-f5826-p2039-o1 lang=en-US dir=ltr>
                                                    <div class=screen-reader-response></div>
     <?php echo do_shortcode( '[contact-form-7 id="135" title="Home Form"]' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;" data-skin="2018 white">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 12px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #2c2c2c ;">Serving Florida for nearly a decade<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 20px ;">
                                                <div class=gdlr-core-divider-container style="max-width: 40px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 6px ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #6d6d6d ;">
                                                    <p>Founded by attorney and legal veteran Willnae LaCroix, The Legal Connection LLC is the premier law firm in Florida getting big results. Our dedicated team throughout Florida have the award-winning expertise, extensive experience and the meticulous attention to detail needed to successfully litigate personal injury and family law claims.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/winner21.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=<?php bloginfo('stylesheet_directory'); ?>/upload/law30.png alt width=35 height=50 title=law30></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">Competitiveness</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>We strive to offer clients high levels of professionalism and responsive, personalized service at reasonable rates.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/private22.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=<?php bloginfo('stylesheet_directory'); ?>/upload/law31.png alt width=34 height=46 title=law31></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">Privacy</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>We assist clients with issues involving very private matters and you can have peace of mind knowing that we take your information very seriously. We only operate at the highest standards to ensure our clients privacy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/legal23.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=<?php bloginfo('stylesheet_directory'); ?>/upload/law32.png alt width=45 height=45 title=law32></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">Experts in The Field</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>Our team in Florida are experts and they are well aware of all the needs. They are quite adept and know how disputes need to be solved amicably and peacefully. There are no hidden costs & your problems will be taken care of professionally.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 145px 0px 150px 0px;" data-skin="Testimonial Dark" id=gdlr-core-wrapper-4>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/upload/slider-2.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.1></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #b1976b ;margin-bottom: 0px ;">testimonial</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">Words From Clients<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 40px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 820px ;">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type=carousel data-column=1 data-move=1 data-nav=bullet data-vcenter-nav=1>
                                                    <ul class=slides>
                                                        <!-- item 1 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>Professional, honest and attentive! The team over at The Legal Connection really gave me their undivided attention on my case and they recovered over $100,000 for me. They strive to understand the personal aspects of the matter in a compassionate manner so you are just not another legal case or docket. Great work team!</p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                               
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Rico M.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Orlando, FL</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- item 2 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>Willnae LaCroix is one of the best attorneys I have ever worked with. I refer everyone to her and everyone is pleased with her work. Her team recovered $100,000 on my case! Her staff alone is very detail oriented and they truly strive to win. Her team won't stop until you win and you get the amount you deserve. I cannot speak enough about how much they helped me!</p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                       
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Richard J.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">West Palm Beach</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- item 3 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>Great experience overall having Willnae LaCroix and The Legal Connection team as my attorney. She really understands her client, very insightful and is an expert in her field. Truly a professional and marvelous individual.</p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                        
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Kimberly K.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Fort Pierce, FL</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
<!-- item 4 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>The group at The Legal Connection truly went above and beyond in handling my personal injury claim. They diligently explained every situation in detail to me and answered all of my questions. I had the pleasure of dealing with Willnae LaCroix, who, from the very start, was upfront and realistic regarding the situation and expectations. In the end the group maximized my claim to $50,000--for which I am very grateful. They fight to win! </p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                        
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Clark D.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">St. Lucie County</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>


<!-- item 5 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>I owe so much to Willnae LaCroix and The Legal Connection team.
With her services I was able to get my restraining order dropped. Joint custody and Child support payments reduced from $1,200 to $240 a month!  </p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                        
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Shawn K.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Pompano Beach, FL</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>


<!-- item 6 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>Simply phenomenal from start to finish. We could not have had a more kind and considerate lawyer in Willnae LaCroix. The whole legal team have been responsive, professional and empathic throughout our court needs." My restraining order was dropped and custody of my child returned to me. Thank you so much!</p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                        
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Gail J. </div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Fort Lauderdale, FL</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>



<!-- item 7 -->
                                                        <li class=gdlr-core-item-mglr>
                                                            <div class="gdlr-core-testimonial clearfix">
                                                                <div class=gdlr-core-testimonial-content-wrap>
                                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                    <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                        <p>For both divorce and child support/custody issues, call Willnae LaCroix and the team at The Legal Connection. Great services, knowledgeable and tough, very tough! With their services, I was able to obtain full custody. You all are amazing! </p>
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                        
                                                                        <div class=gdlr-core-testimonial-author-content>
                                                                            <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Francios F.</div>
                                                                            <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Fort Lauderdale, FL</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>




    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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