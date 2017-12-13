<!-- Footer -->
<div class="wrapper row3">
    <footer id="footer" class="clear">
            <?php
            $args = array(
                'menu' => 'menu_bas',
                'container' => 'ul',
            );
            wp_nav_menu($args);
            ?>



        <p class="fl_left"><?php _e('Copyright &copy; 2012 - All Rights Reserved', 'wp-theme-base-translate'); ?> - <a href="#">Domain Name</a></p>
        <p class="fl_right"><?php _e('Template by', 'wp-theme-base-translate'); ?> <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>



    </footer>
</div>
<?php wp_footer() ?>
</body>
</html>
