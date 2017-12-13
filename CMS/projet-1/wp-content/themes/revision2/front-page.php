<?php
/**
 * Template Name: HomePage
 *
 */
get_header();
?>
    <!-- content -->
    <div class="wrapper row2">
        <div id="container" class="clear">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>


                    <div id="slider">
                        <?php
                        $images = get_field('accueil_slider');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

                        if ($images): ?>
                            <ul>
                                <?php foreach ($images as $image): ?>
                                    <li>
                                        <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div id="premiere_section">
                        <?php if (get_field('accueil_1er_section_image')): ?>

                            <img src="<?php the_field('accueil_1er_section_image'); ?>"/>

                        <?php endif; ?>
                        <h3><?php the_field('accueil_1er_section_texte'); ?></h3>
                        <p><?php the_field('accueil_1er_section_wysiwyg'); ?></p>
                    </div>
                    <div id="deuxieme_section">
                        <h3>Derniers articles</h3>
                        <ul>
                            <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=5');
                            ?>
                            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink() ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>"><?php _e('Lire la suite', 'wp-theme-base-translate'); ?></a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata() ?>
                        </ul>

                    </div>
                    <div id="troisieme section">
                        <?php
                        if( have_rows('accueil_3eme_section') ):
                            while ( have_rows('accueil_3eme_section') ) : the_row();
                                ?>
                                    <p><?php the_sub_field('accueil_3eme_section_icon'); ?> </p>
                                    <h3><?php the_sub_field('accueil_3eme_section_titre'); ?> </h3>
                                    <p><?php the_sub_field('accueil_3eme_section_wysiwyg'); ?> </p>


                                <?php
                            endwhile;

                        else :
                            // no rows found
                        endif;
                        ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer();
?>