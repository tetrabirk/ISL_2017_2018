<?php
get_header();
?>
    <!-- content -->
    <div class="wrapper row2">
        <div id="container" class="clear">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div>
                        <h1><?php the_title() ?></h1>
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>">
                        <p><?php the_content() ?></p>

                    </div>

                    <div>
                        <img src="<?php the_field('page_play'); ?>"/>

                        <div class="embed-container">
                            <?php the_field('page_video'); ?>
                        </div>
                        <style>
                            .embed-container {
                                position: relative;
                                padding-bottom: 56.25%;
                                overflow: hidden;
                                max-width: 100%;
                                height: auto;
                            }

                            .embed-container iframe,
                            .embed-container object,
                            .embed-container embed {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                            }
                        </style>
                    </div>
                    <div>
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('page_2eme_section_repeteur') ):

                            // loop through the rows of data
                            while ( have_rows('page_2eme_section_repeteur') ) : the_row();

                        ?>
                                <div>
                                    <h3><?php the_sub_field('page_2eme_section_repeteur_titre');?></h3>
                                    <p><?php the_sub_field('page_2eme_section_repeteur_texte');?></p>
                                </div>


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