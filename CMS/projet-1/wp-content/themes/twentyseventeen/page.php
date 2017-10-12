<?php

get_header(); ?>

<?php

while ( have_posts() ) : the_post();
    global $post;
    $post_slug = $post->post_name;
    ?>
    <h1>ceci est un test :  <?php echo $post_slug ?> </h1>
    <?php
endwhile;
?>


<?php get_footer();
