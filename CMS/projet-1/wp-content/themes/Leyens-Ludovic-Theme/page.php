<?php
get_header();
?>
    <!-- content begin -->
    <div id="content" class="no-padding">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


                <!-- section begin -->
                <section id="about-intro">
                    <style type="text/css">
                        #about-intro {
                            background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>');
                        }
                    </style>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="about-text-intro text-center">
                                    <h2><?php the_title() ?></h2>
                                    <p><?php the_content() ?></p>
                                </div>
                                <div class="box-intro-video">
                                    <div id="overlay-video" class="overlay-video-intro">
                                        <img src="<?php the_field('page_play'); ?>" class="img-responsive"/>
                                        <a href="https://www.youtube.com/embed/keDneypw3HY?autoplay=1"
                                           class="btn-intro-video"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div id="thevideo" style="display:none">
                                        <iframe id="someFrame" width="750" height="422" src="" frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-about" class="margin-top-80">
                    <div class="container">
                        <div class="row">
                            <?php while (have_rows('page_2eme_section_repeteur')) : the_row(); ?>

                                <div class="col-md-4">
                                    <h5><?php the_sub_field('page_2eme_section_repeteur_titre'); ?></h5>
                                    <p><?php the_sub_field('page_2eme_section_repeteur_texte'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-team" class="bg-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2><?php the_field('page_3eme_section_titre'); ?></h2>
                                    <div class="tiny-border"></div>
                                </div>
                            </div>


                            <?php while (have_rows('page_3eme_section_repeteur')) : the_row(); ?>

                                <div class="col-md-3">
                                    <div class="team-box">
                                        <div class="team-inner">
                                            <img src="<?php the_sub_field('page_3eme_section_repeteur_image'); ?>"
                                                 alt=""
                                                 class="img-circle">

                                            <div class="mask"></div>
                                        </div>
                                        <h6><?php the_sub_field('page_3eme_section_nom'); ?></h6>
                                        <div class="subtext"><?php the_sub_field('page_3eme_section_repeteur_fonction'); ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>
                    </div>
                </section>
                <!-- section close -->


            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- content close -->

<?php
get_footer();
?>