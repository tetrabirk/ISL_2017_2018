<?php
//actu
get_header(); ?>
    <h2> AKTU? </h2>
<?php

while ( have_posts() ) : the_post();
    ?>
    <h1><?php the_title() ?></h1>
    <?php
endwhile;
?>


<?php get_footer();
