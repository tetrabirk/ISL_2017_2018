<?php

get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <h1> <?php the_ID();?> </h1>

    <?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();
