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
                <ul>
                    <?php while (have_posts()) :
                        the_post();
                        ?>
                        <li>
                            <img src="<?php the_field('article_2eme_section_image'); ?> ">
                            <h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>

                            <footer class="more"><a href="<?php echo get_permalink() ?>"><?php _e('Lire la suite', 'wp-theme-base-translate'); ?></a></footer>
                        </li>
                        <?php
                    endwhile; ?>
                </ul>
                <?php echo paginate_links(array(
                    'prev_text' => '<-',
                    'next_text' => '->',
                )); ?>


            </div>
            <!-- right column -->
            <aside id="right_column">
                <h2 class="title"><?php _e('Categories', 'wp-theme-base-translate'); ?></h2>
                <nav>
                    <?php
                    $args = array(
                        'menu' => 'menu_droite',
                        'container' => 'ul',
                    );
                    wp_nav_menu($args);
                    ?>
                </nav>
                <!-- /nav -->

            </aside>
            <!-- / content body -->
        </div>
    </div>

<?php
get_footer();
?>