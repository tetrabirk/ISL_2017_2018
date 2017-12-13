<?php
/**
 * Template Name: HomePage
 *
 */
get_header();
?>
<!-- slider -->


        <div id="slider">
            <!-- revolution slider begin -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <?php
                        $images = get_field('accueil_slider',121);
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

                        if ($images): ?>
                            <?php foreach ($images as $image): ?>

                                <li data-transition="fade" data-slotamount="7" data-masterspeed="2500"
                                    data-delay="5000">
                                    <!--  BACKGROUND IMAGE -->
                                    <?php echo wp_get_attachment_image($image['ID'], $size); ?>

                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
        </div>
        <!-- slider close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">

            <!-- section begin -->
            <section id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php the_field('accueil_1er_section_image',121); ?>" class="img-responsive"/>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="about-box">
                                <h2 class="box-title"><?php the_field('accueil_1er_section_texte',121); ?></h2>
                                <div class="tiny-border"></div>
                                <p><?php the_field('accueil_1er_section_wysiwyg',121); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-project" class="no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest-projects clearfix">
                                <div class="latest-projects-intro">
                                    <h2 class="box-title"><?php _e('Derniers articles', 'wp-theme-base-translate'); ?></h2>
                                    <div class="tiny-border-light"></div>
                                    <p>Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non
                                        pretium turpis</p>
                                </div>
                                <div class="latest-projects-wrapper">
                                    <div id="latest-projects-items" class="latest-projects-items">


                                        <?php while (have_posts()) : the_post(); ?>
                                            <?php echo '<h1>TOTO</h1>'?>
                                            <div class="item">
                                                <img src="images/projects/small-2.jpg" alt="" class="img-responsive">
                                                <div class="project-details">
                                                    <p class="folio-title">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </p>
                                                    <p class="folio-cate"><i class="fa fa-tag"></i>
                                                        <?php
                                                        $categories = get_the_category();
                                                        foreach ($categories as $categ) {
                                                            echo "<a href='" . get_category_link($categ) . "'>" . ($categ->name) . "</a>";
                                                        }
                                                        ?>
                                                    <div class="folio-buttons">
                                                        <a href="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>"
                                                           title="<?php the_title(); ?>" class="folio"><i
                                                                    class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section>
                <!-- Container Begin -->
                <div class="container">
                    <div class="row">
                        <?php while (have_rows('accueil_3eme_section',121)) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="service-box service-style2">

                                    <img src="<?php the_sub_field('accueil_3eme_section_icon'); ?>"
                                         class="img-responsive"/>
                                    <div class="service-content">
                                        <h3><?php the_sub_field('accueil_3eme_section_titre'); ?></h3>
                                        <p><?php the_sub_field('accueil_3eme_section_wysiwyg'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Container End -->
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

<?php get_footer(); ?>

