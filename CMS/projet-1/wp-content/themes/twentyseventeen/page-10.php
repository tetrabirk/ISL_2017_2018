<?php
//contact
get_header(); ?>

<?php
while ( have_posts() ) : the_post();
    ?>
    <h1> contakk? <?php the_title() ?></h1>
    <?php
endwhile;
?>


<?php get_footer();
