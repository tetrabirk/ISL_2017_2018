
<!-- footer begin -->
<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <div class="widget-inner">
                            <h3 class="widget-title">Résumé</h3>
                            <p><?php dynamic_sidebar( 'bloc_footer_1' ); ?></p>

                            <style type="text/css">
                                .widget_text{
                                    background-color: #042433 ;
                                    list-style-type: none;


                                }
                            </style>

                            <div class="social-icons clearfix">
                                <a href="<?php the_field('rs_facebook', 'option'); ?>" class="facebook tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-facebook"></i></a>
                                <a href="<?php the_field('rs_twitter', 'option'); ?>" class="twitter tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-twitter"></i></a>
                                <a href="<?php the_field('rs_googleplus', 'option'); ?>" class="google tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-google-plus"></i></a>
                                <a href="<?php the_field('rs_youtube', 'option'); ?>" class="youtube tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-youtube-play"></i></a>
                                <a href="<?php the_field('rs_linkedin', 'option'); ?>" class="linkedin tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Catégories</h3>
                        <div class="widget-inner">
                            <?php
                            $args = array(
                                'menu' => 'menu_bas',
                                'container' => 'ul',
                            );
                            wp_nav_menu($args);
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-inner">
                            <?php the_field('footer_adresse', 'option'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-inner">
                            <div class="newsletter newsletter-widget">
                                <p>Stay informed about our news and events</p>
                                <form action="" method="post">
                                    <p><input class="newsletter-email" type="email" name="email" placeholder="Your email"><i class="fa fa-envelope-o"></i></p>
                                    <p><input class="newsletter-submit" type="submit" value="Subscribe"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- main footer close -->

    <!-- sub footer begin -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Copyright &copy; 2016 Designed by AuThemes. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- sub footer close -->

</footer>
<!-- footer close -->

</div>

<a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/easing.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.fitvids.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>

<!-- Waypoints-->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/sticky.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/tipper.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/compact.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-index1.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/revslider-custom.js"></script>
</body>
</html>
