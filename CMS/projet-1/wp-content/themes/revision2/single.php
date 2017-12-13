<?php
/**
 * Template Name: Article
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
                <div>
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
                <div>
                    <img src="<?php the_field('article_2eme_section_image'); ?> ">
                </div>
                <div>
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_date(); ?></p>
                    <p><?php echo get_the_author(); ?></p>
                    <ul>
                        <?php
                        $categories =  get_the_category();
                        foreach ($categories as $categ){
                            echo"<li><a href='".get_category_link($categ)."'>".($categ->name)."</a></li>"." ";
                        }

                        ?>
                    </ul>
                    <p>
                        <?php the_content();?>
                    </p>
                </div>
                <p>
                    <?php echo get_the_content(); ?>
                </p>
                <?php
            endwhile; ?>
            <!-- / content body -->
        </div>
    </div>

<?php
get_footer();
?>