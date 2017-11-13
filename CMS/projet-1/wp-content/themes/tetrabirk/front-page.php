<?php
get_header();
?>
<?php while (have_posts()) :
    the_post();
    ?>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <?php

                        $images = get_field('slides');

                        if( $images ): ?>
                            <ul>
                                <?php foreach( $images as $image ): ?>
                                    <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $image['sizes']['thumbnail']; ?>" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $image['url']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>




                    </div><!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function(e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType:"standard",
                            jsFileLocation: "js/revolution-slider/js/",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [720, 768, 960, 720],
                            lazyType: "none",
                            parallax:"mouse",
                            parallaxBgFreeze:"off",
                            parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->
            </div>
        </section>

        <!-- Section: about -->
        <section id="about">
            <div class="container pb-0">
                <div class="col-md-4">
                    <div class="feature-icon-box p-20">
                        <h4 class="text-uppercase mb-5"><i class="fa fa-clock-o font-20 text-theme-colored"> </i><?php the_field('horaire_title'); ?></h4>
                        <h6 class="text-uppercase"><?php the_field('horaire_subtitle'); ?></h6>
                        <div class="widget mb-0">
                            <div class="opening-hours">
                                <ul class="list-unstyled">
                                    <?php
                                    // loop through the rows of data
                                    while ( have_rows('horaires') ) : the_row();
                                        ?>
                                        <li class="clearfix"> <span><?php the_sub_field('jour');?></span>
                                            <div class="value"><?php the_sub_field('heures');?></div>
                                        </li>
                                        <?php
                                    endwhile;
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <p class="mt-0 pt-10"><?php the_field('horaire_contenu'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="img-fullwidth" src="<?php the_field('about_image'); ?>" alt="">
                </div>
                <div class="col-md-5">
                    <div class="meet-doctors pt-sm-20">
                        <h6 class="text-uppercase letter-space-5 mt-0"><?php the_field('about_little_title'); ?></h6>
                        <h3 class="text-uppercase mt-20 text-theme-colored"><?php the_field('about_big_title'); ?></span></h3>
                        <p><?php the_field('about_content'); ?></p>

                        <a href="<?php the_field('about_bouton'); ?>" class="btn btn-theme-colored btn-flat btn-sm mt-20">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section id="services">
            <div class="container pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title text-uppercase"><?php the_field('services_title'); ?></span></h2>
                            <p class="text-uppercase letter-space-4"><?php the_field('services_subtitle'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <?php
                        // loop through the rows of data
                        while ( have_rows('services_liste') ) : the_row();
                            ?>
                            <div class="col-md-4">
                                <div class="icon-box text-center p-0 mb-40">
                                    <a class="icon mb-10 mr-30 ml-30 mt-10" href="<?php the_sub_field('service_liste_link'); ?>">
                                        <i class="<?php the_sub_field('service_liste_picto'); ?> font-54 text-theme-colored"></i>
                                    </a>
                                    <div>
                                        <h5 class="icon-box-title mt-15 mb-10 text-uppercase letter-space-2"><strong><?php the_sub_field('service_liste_title'); ?></strong></h5>
                                        <p><?php the_sub_field('service_liste_content'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>

                    </div>
                </div>
            </div>
        </section>

        <!-- Section: departments -->
        <section id="departments" class="bg-lighter">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title text-uppercase">Health Zone <span class="text-black font-weight-300">Departments</span></h2>
                            <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="training-classes-carousel" data-dots="true">
                            <div class="item">
                                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                                    <div class="thumb mb-20"> <img alt="featured project" src="http://placehold.it/328x283" class="img-responsive img-fullwidth">
                                    </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="text-uppercase font-weight-800 line-bottom">Surgery Department</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                                        <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                                    <div class="thumb mb-20"> <img alt="featured project" src="http://placehold.it/328x283" class="img-responsive img-fullwidth">
                                    </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="text-uppercase font-weight-800 line-bottom">Dental Department</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                                        <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                                    <div class="thumb mb-20"> <img alt="featured project" src="http://placehold.it/328x283" class="img-responsive img-fullwidth">
                                    </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="text-uppercase font-weight-800 line-bottom">Medicine Department</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                                        <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                                    <div class="thumb mb-20"> <img alt="featured project" src="http://placehold.it/328x283" class="img-responsive img-fullwidth"> </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="text-uppercase font-weight-800 line-bottom">Nursing Department</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                                        <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- divider:  -->
        <section class="divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
            <div class="container pt-170 pb-170 pt-sm-100 pb-sm-100">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- divider: offers -->
        <section id="offers" data-bg-img="images/pattern/p8.png">
            <div class="container pb-0">
                <div class="bg-lighter bg-img-right-top sm-no-bg mt-sm-0" data-margin-top="-350px" data-bg-img="http://placehold.it/504x1004">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1 p-sm-40 pt-sm-0 pt-50 pb-20">
                            <h2 class="title text-uppercase text-theme-colored">HealthZone <span class="text-black font-weight-300">Features</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. Nunc eu mollis enim, ultrices vehicula ipsum. Ut vel tincidunt elit. Curabitur congue pharetra eros, a dapibus arcu ornare quis. </p>

                            <div class="icon-box text-left flip sm-text-center p-0 mt-50 mb-45">
                                <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                                    <i class="flaticon-medical-hospital35 text-white no-rotate"></i>
                                </a>
                                <div>
                                    <h5 class="icon-box-title mt-15 mb-10"><strong>Blood Test</strong></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                                </div>
                            </div>

                            <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                                <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                                    <i class="flaticon-medical-heart36 text-white no-rotate"></i>
                                </a>
                                <div>
                                    <h5 class="icon-box-title mt-15 mb-10"><strong>Cardiology</strong></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                                </div>
                            </div>

                            <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                                <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                                    <i class="flaticon-medical-person278 text-white no-rotate"></i>
                                </a>
                                <div>
                                    <h5 class="icon-box-title mt-15 mb-10"><strong>Bone Care</strong></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                                </div>
                            </div>

                            <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                                <a href="#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                                    <i class="flaticon-medical-mother19 text-white no-rotate"></i>
                                </a>
                                <div>
                                    <h5 class="icon-box-title mt-15 mb-10"><strong>Baby Care</strong></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctors -->
        <section id="doctors">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase title">Our <span class="text-black font-weight-300">Doctors</span></h2>
                            <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row ml-md-0 multi-row-clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15 pb-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Cardiologist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15 pb-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Orthopedic Specialist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15 pb-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Gynaecologist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Dentist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Dentist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-0 pr-15">
                            <div class="trainer-item">
                                <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                                <div class="trainer-info">
                                    <div class="social-network">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-biography">
                                        <h3 class="text-white">Steve Smith</h3>
                                        <h5 class="text-white">Gynecologist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Divider  -->
        <section id="pricing" class="divider parallax layer-overlay overlay-black" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
            <div class="container pb-150 pb-sm-0">
                <div class="section-title text-center pb-140 pb-sm-0 pt-0">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title text-uppercase text-white">Pricing <span class="text-theme-colored">List</span></h2>
                            <p class="text-uppercase letter-space-4 text-white">Join our Health Zone and be healthy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Pricing Table -->
        <section>
            <div class="container pt-sm-0">
                <div class="section-title">
                    <div class="row"> </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                            <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                                <h3 class="package-type mb-30 text-uppercase">Blood Test</h3>
                                <div class="price pt-5 pb-5 bg-black-222"> <div class="price-period">
                                        <h4 class="text-white">per/ <sup><em>month</em></sup></h4>
                                    </div> </div>
                                <div class="price-amount bg-theme-colored rotate">
                                    <div class="no-rotate text-white">35<sup>%</sup></div>
                                </div>
                                <ul class="list table-list text-left flip check-circle pt-10 pb-40 pr-20 bg-lighter">
                                    <li>Free Consultation</li>
                                    <li>Medical Treatment</li>
                                    <li>24 Hour Support</li>
                                    <li>Nutrional Plan: Yes</li>
                                </ul>
                                <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                            <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                                <h3 class="package-type mb-30 text-uppercase">Medical Checkup</h3>
                                <div class="price pt-5 pb-5 bg-theme-colored"> <div class="price-period">
                                        <h4 class="text-white">per/ <sup><em>month</em></sup></h4>
                                    </div> </div>
                                <div class="price-amount bg-theme-colored rotate">
                                    <div class="no-rotate text-white">35<sup>%</sup></div>
                                </div>
                                <ul class="list table-list text-left flip check-circle pt-10 pb-40 pr-20 bg-lighter">
                                    <li>Free Consultation</li>
                                    <li>Medical Treatment</li>
                                    <li>24 Hour Support</li>
                                    <li>Nutrional Plan: Yes</li>
                                </ul>
                                <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                            <div class="pricing-table text-center pt-30 pb-0 mt-sm-0 maxwidth400 bg-lighter" data-margin-top="-380px">
                                <h3 class="package-type mb-30 text-uppercase">Dental Care</h3>
                                <div class="price pt-5 pb-5 bg-black-222"> <div class="price-period">
                                        <h4 class="text-white">per/ <sup><em>month</em></sup></h4>
                                    </div> </div>
                                <div class="price-amount bg-theme-colored rotate">
                                    <div class="no-rotate text-white">35<sup>%</sup></div>
                                </div>
                                <ul class="list table-list text-left flip check-circle pt-10 pb-40 pr-20 bg-lighter">
                                    <li>Free Consultation</li>
                                    <li>Medical Treatment</li>
                                    <li>24 Hour Support</li>
                                    <li>Nutrional Plan: Yes</li>
                                </ul>
                                <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Gallery -->
        <section id="gallery" class="bg-lighter">
            <div class="container-fluid pb-0">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title text-uppercase">HealthZone <span class="text-black font-weight-300">gallery</span></h2>
                            <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Works Filter -->
                            <div class="portfolio-filter font-alt align-center mb-6 0">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#branding" class="" data-filter=".branding">Branding</a>
                                <a href="#design" class="" data-filter=".design">Design</a>
                                <a href="#photography" class="" data-filter=".photography">Photography</a>
                            </div>
                            <!-- End Works Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div id="grid" class="portfolio-gallery grid-4 clearfix">
                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="http://placehold.it/350x350"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="http://placehold.it/350x350">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item branding">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="http://placehold.it/350x350">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item design">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="http://placehold.it/350x350">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item branding">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item design">
                                    <div class="thumb">
                                        <div class="flexslider-wrapper">
                                            <div class="flexslider">
                                                <ul class="slides">
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="#"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="http://placehold.it/350x350" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="http://placehold.it/350x350"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="http://placehold.it/350x350">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="portfolio-item design">
                                    <div class="thumb">
                                        <div class="flexslider-wrapper" data-direction="vertical">
                                            <div class="flexslider">
                                                <ul class="slides">
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                    <li><a href="http://placehold.it/350x350" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/350x350" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder text-center">
                                            <h5 class="title">Gallery Title Here</h5>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="#"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                            </div>
                            <!-- End Portfolio Gallery Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: funfact  -->
        <section class="divider parallax" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7" >
            <div class="container-fluid pt-0 pb-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5 pt-100 pb-100"></div>
                        <div class="col-md-7 bg-lighter">
                            <div class="pt-40 pr-50 pb-70 pl-60 p-md-30">
                                <h3 class="title letter-space-4">HealthZone <span class="text-uppercase text-black-333 font-weight-300">funfact </span></h3>
                                <p class="mb-40">Nam liber tempor cum soluta nobis<br> eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 hvr-wobble-vertical sm-text-center">
                                        <div class="funfact ml-md-0">
                                            <a href="#"><i class="pe-7s-date"></i></a>
                                            <h3 class="animate-number font-28 font-weight-500 mt-15 mb-10" data-value="12" data-animation-duration="2500">0</h3>
                                            <h5 class="title text-gray font-weight-300 font-16">Years of Experience</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 hvr-wobble-vertical sm-text-center ml-50 ml-md-0">
                                        <div class="funfact">
                                            <a href="#"><i class="pe-7s-smile"></i></a>
                                            <h3 class="animate-number font-28 font-weight-500 mt-15 mb-10" data-value="1921" data-animation-duration="2500">0</h3>
                                            <h5 class="title text-gray font-weight-300 font-16">Happy Clients</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-30">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 hvr-wobble-vertical sm-text-center">
                                        <div class="funfact">
                                            <a href="#"><i class="pe-7s-medal"></i></a>
                                            <h3 class="animate-number font-28 font-weight-500 mt-15 mb-10" data-value="24" data-animation-duration="2500">0</h3>
                                            <h5 class="title text-gray font-weight-300 font-16">Awards</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 hvr-wobble-vertical sm-text-center ml-50 ml-md-0">
                                        <div class="funfact">
                                            <a href="#"><i class="pe-7s-like2"></i></a>
                                            <h3 class="animate-number font-28 font-weight-500 mt-15 mb-10" data-value="26892" data-animation-duration="2500">0</h3>
                                            <h5 class="title text-gray font-weight-300 font-16">People Likes</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-30">
                                    <div class="col-md-8">
                                        <h3 class="font-weight-300">Subscribe to our Newsletter</h3>
                                        <form id="mailchimp-subscription-form1" class="newsletter-form">
                                            <div class="input-group">
                                                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL" style="height: 45px;">
                                                <span class="input-group-btn">
                          <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                        </span>
                                            </div>
                                        </form>
                                        <!-- Mailchimp Subscription Form Validation-->
                                        <script type="text/javascript">
                                            $('#mailchimp-subscription-form1').ajaxChimp({
                                                callback: mailChimpCallBack,
                                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                                            });

                                            function mailChimpCallBack(resp) {
                                                // Hide any previous response text
                                                var $mailchimpform = $('#mailchimp-subscription-form1'),
                                                    $response = '';
                                                $mailchimpform.children(".alert").remove();
                                                console.log(resp);
                                                if (resp.result === 'success') {
                                                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                                } else if (resp.result === 'error') {
                                                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                                }
                                                $mailchimpform.prepend($response);
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Blog -->
        <section id="blog" data-bg-img="images/pattern/p8.png">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="title text-uppercase">News & <span class="text-black font-weight-300">blog</span></h2>
                            <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="post clearfix">
                                <div class="entry-header">
                                    <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <ul class="font-12">
                                                    <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                            30 Likes</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                            72 Comments</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                            Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content p-20">
                                    <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                    <ul class="entry-date list-inline mt-10 mb-10">
                                        <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                        <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                    <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post clearfix">
                                <div class="entry-header">
                                    <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <ul class="font-12">
                                                    <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                            30 Likes</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                            72 Comments</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                            Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content p-20">
                                    <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                    <ul class="entry-date list-inline mt-10 mb-10">
                                        <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                        <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                    <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post clearfix">
                                <div class="entry-header">
                                    <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <ul class="font-12">
                                                    <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                            30 Likes</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                            72 Comments</a></li>
                                                    <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                            Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content p-20">
                                    <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                    <ul class="entry-date list-inline mt-10 mb-10">
                                        <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                        <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                    <a href="#" class="btn-read-more btn-sm">Read More</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="divider bg-lighter">
            <div class="container pb-50">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="text-uppercase title">GET IN <span class="text-black font-weight-300"> TOUCH</span></h2>
                            <p class="text-uppercase letter-space-1">JOIN OUR TRAINING CLUB AND RISE TO A NEW CHALLENGE</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="contact-wrapper">

                                <!-- Contact Form -->
                                <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input  name="form_name" class="form-control" type="text" placeholder="Enter Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message" style="height: 165px;"></textarea>
                                                </div>
                                                <div class="form-group mt-20">
                                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                                    <button type="submit" class="btn btn-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3 class="mt-0 text-theme-colored font-weight-300">Contact info</h3>
                                            <p>Integer tincidunt  Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus.</p>

                                            <ul class="mt-30">
                                                <li><i class="fa fa-phone mb-20 text-theme-colored mr-5 font-20"></i> +262 695 2601</li>
                                                <li><i class="fa fa-map-marker mb-20 text-theme-colored mr-5 font-20"></i> 121 King Street, Australia</li>
                                                <li><i class="fa fa-envelope mb-20 text-theme-colored mr-5 font-20"></i> you@yourdomain.com</li>
                                                <li><i class="fa fa-globe mb-20 text-theme-colored mr-5 font-20"></i> www.yourWebside.com</li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                <!-- Contact Form Validation-->
                                <script type="text/javascript">
                                    $("#contact_form").validate({
                                        submitHandler: function(form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType:  'json',
                                                success: function(data) {
                                                    if( data.status == 'true' ) {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <?php
endwhile; ?>

<?php
get_footer();
?>