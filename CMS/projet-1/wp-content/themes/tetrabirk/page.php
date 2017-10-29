<?php
get_header();
?>
<?php while (have_posts()) :
    the_post();
    ?>
<!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo get_the_post_thumbnail_url();?>">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-7 border-right mb-40">
                            <h4 class="text-theme-colored text-uppercase letter-space-3 font-weight-400 mt-0"><?php the_title(); ?></h4>
                            <h3 class="text-uppercase mt-10 font-40 line-bottom"><?php echo implode(", ", get_post_custom_values('mega_title', get_the_ID())); ?></h3>

                            <p><?php echo get_post_field('post_content', $post->ID); ?></p>

                        </div>
                        <?php if (has_post_thumbnail()){ ?>
                        <div class="col-md-5">
                            <div class="thumb mt-40">
                                <?php echo get_the_post_thumbnail();?>

                            </div>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- end main-content -->
<?php endwhile; ?>
<?php
get_footer();
?>
