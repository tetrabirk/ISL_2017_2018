<?php
/**
 * Template Name: Actualites
 *
 */
get_header();
?>

    <div class="wrapper row2">
        <div id="container" class="clear">
            <!-- main content -->
            <div id="content">
                <?php while (have_posts()) :
                    the_post();
                    ?>
                            <img src="<?php the_field('article_2eme_section_image'); ?> ">
                                    <h2><?php echo  get_the_title(); ?></h2>
                                    <p>
                                        <?php
                                        echo get_the_content();
                                        ?>
                                    </p>
                    <?php
                endwhile; ?>
            </aside>
            <!-- / content body -->
        </div>
    </div>

<?php
get_footer();
?>