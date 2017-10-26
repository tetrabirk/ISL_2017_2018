<?php
get_header();
?>

<?php while (have_posts()) :
    the_post();
    ?>
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?= get_the_post_thumbnail_url();?>">
        <div class="container pt-120 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 blog-pull-right">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="<?=get_the_post_thumbnail_url();?>" alt="" class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-title pt-0">
                                    <h4><a href="#">Vonsectetur adipiscing elit. </a></h4>
                                </div>
                                <div class="entry-meta mb-20">
                                    <ul class="list-inline">
                                        <li>Posted: <span class="text-theme-colored"><?php echo get_the_date( 'l F j, Y' ); ?></span></li>
                                        <li>By: <span class="text-theme-colored"><?php echo get_the_author(); ?></span></li>
                                    </ul>
                                </div>
                                <p class="mb-15"><?php echo get_post_field('post_content', $post->ID); ?></p>

                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <p class="mb-0">
                                            <i class="fa fa-tags text-theme-colored"></i><span>Tags:</span>
                                            <?php
                                            $array =  get_the_category();
                                            foreach ($array as $key){
                                                echo"<a href='#'>".($key->name)."</a>"." ";
                                            }

                                            ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Search box</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search" class="form-control search-input">
                                        <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <?php
                                    $array =  get_categories();
                                    foreach ($array as $key){
                                    ?>
                                        <li><a href="#"><?php echo($key->name)?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
<?php endwhile; ?>
<?php
get_footer();
?>
