<?php
/**
 * Template Name: PageDefault
 *
 */
get_header();
?>
    <!-- content -->
    <div class="wrapper row2">
        <div id="container" class="clear">
            <!-- Slider -->
            <section id="slider"><a href="#"><img src="images/demo/960x360.gif" alt=""></a></section>
            <!-- main content -->
            <div id="homepage">
                <!-- services area -->

                <?php the_ID()?>

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
            <!-- main content -->
            <div id="content">
                <section id="posts" class="last clear">
                    <ul>
                        <li>
                            <article class="clear">
                                <figure><img src="images/demo/180x150.gif" alt="">
                                    <figcaption>
                                        <h2>Indonectetus facilis leo nibh</h2>
                                        <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
                                        <footer class="more"><a href="#">Read More &raquo;</a></footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </li>
                        <li class="last">
                            <article class="clear">
                                <figure><img src="images/demo/180x150.gif" alt="">
                                    <figcaption>
                                        <h2>Indonectetus facilis leo nibh</h2>
                                        <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
                                        <footer class="more"><a href="#">Read More &raquo;</a></footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- right column -->
            <aside id="right_column">
                <h2 class="title">Categories</h2>
                <nav>
                    <ul>
                        <li><a href="#">Free Website Templates</a></li>
                        <li><a href="#">Free CSS Templates</a></li>
                        <li><a href="#">Free XHTML Templates</a></li>
                        <li><a href="#">Free Web Templates</a></li>
                        <li><a href="#">Free Website Layouts</a></li>
                        <li><a href="#">Free HTML 5 Templates</a></li>
                        <li><a href="#">Free Webdesign Templates</a></li>
                        <li><a href="#">Free FireWorks Templates</a></li>
                        <li><a href="#">Free PNG Templates</a></li>
                        <li class="last"><a href="#">Free Website Themes</a></li>
                    </ul>
                </nav>
                <!-- /nav -->
            </aside>
            <!-- / content body -->
        </div>
    </div>
<?php
get_footer();
?>