<?php get_header(); ?>


<section id="category-banner">
    <div class="bg-overlay"></div>
    <div class="banner">
        <div class="container">
            <?php

            $theParent = wp_get_post_parent_id(get_the_ID());

            if ($theParent) { ?>

                <div class="breadcrumb">
                    <p><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a> > <a href="#"><?php the_title(); ?></a></p>
                </div>

            <?php } ?>


            <div class="content">
                <div class="title">
                    <h1><?php single_term_title() ?> - Archive</h1>
                </div>
                <div class="tags">
                    <?php  
                    
                    tag_cloud_by_category($cat_id = $category_id);
                        
                     ?>
                    <!-- <span><a href="">Geopolitics</a></span>
                    <span><a href="">Military</a></span>
                    <span><a href="">Diplomacy</a></span>
                    <span><a href="">Climate</a></span>
                    <span><a href="">Russia</a></span> -->
                </div>

                <div class="description w-75">
                    <p><?php the_archive_description(); ?></p>

                </div>
            </div>
        </div>
    </div>

</section>





<section id="main-content">
    <div class="container">
        <div class="row gx-5">
            <div class="first-global-col col-xxl-12 col-xl-12 col-lg-12">
                <div class="latest-news">
                    <div class="tagline main-tag">
                        <div class="tag">
                            <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                            <span>Archive</span>
                        </div>
                        <!-- <span class="line"></span> -->
                    </div>


                    <div class="content">
                        <p><?php the_field('page_desc'); ?></p>


                    </div>

                </div>


            </div>


            <div class="first-global-col col-xxl-8 col-xl-8 col-lg-8">
                <div class="latest-news">


                    <div class="row news-wrapper">


                        <?php
                        $current_cat_id  = get_query_var('cat');
                
                        if (have_posts()) {
                            $archive_args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'cat' => $current_cat_id,
                                'posts_per_page' => 8,
                                'paged' => $paged,
                            );
                            $archive = new WP_Query($archive_args);

                            while ($archive->have_posts()) {
                                $archive->the_post(); ?>


                                <!-- News Item -->
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <!-- News Item -->
                                    <div class="content news-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="img-container">
                                                <div class="img-fluid">
                                                    <?php echo news_item_image_thumb(); ?>
                                                </div>
                                                <div class="tagline">
                                                    <p><?php single_tag_title(); ?></p>
                                                </div>
                                            </div>
                                            <div class="box-content">

                                                <div class="title">
                                                    <h1 class="d-none d-md-block"><?php the_title(); ?> <br class="d-lg-none"></h1>
                                                    <h1 class="d-block d-md-none"><?php the_title(); ?></h1>
                                                </div>
                                                <div class="content">
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                                <div class="date">
                                                    <p class="author">
                                                        <a href="#author"><?php the_author(); ?></a>
                                                    </p> -
                                                    <p class="time">
                                                        <a href="#date"><?php news_date(); ?></a>
                                                    </p>
                                                    <div class="no-comments">
                                                        <a href="#comments"><span>0</span></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                </div>



                        <?php }  // end while
                        } // end if
                        ?>












                    </div>

                </div>


            </div>



            <div class="second-global-col col-xxl-4 col-xl-4 col-lg-4">
                <!-- Ad Banner -->
                <div class="col-xl-12 stay-orbital-banner d-none d-lg-block">
                    <div class="stay-orbital-banner-wrapper">
                        <div class="stay-orbital-banner-content">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png') ?>" alt="">
                            <p>Bring Your Ad Here!</p>
                            <p>Make Your Business Go <span>ORBITAL</span>!</p>
                            <p>300 x 250</p>
                        </div>
                    </div>
                </div>
                <!-- End Ad Banner -->






                <!-- Must Read -->
                <div class="tagline tagline-must-read">
                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                    <span>Must Read</span>
                    <span class="line"></span>
                </div>


                <div class="must-read-news">
                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>






                <!-- Top Posts -->
                <div class="tagline tagline-top-posts">
                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                    <span>Top Posts</span>
                    <span class="line"></span>
                </div>


                <div class="must-read-news">
                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>


                    <!-- Must Read News Item -->
                    <div class="must-read-item">
                        <a href="#">Another Big Apartment Project Slated for Broad Ripple Company</a>
                        <div class="date">
                            <span class="author">Andrei Iacobescu</span>
                            <span class="date">February 20, 2021</span>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>



            </div>


        </div>

        <div class="pagination">
            <?php echo paginate_links(array(
                'mid_size' => 3,
                'end_size' => 1,
                'total' => $archive->max_num_pages
            )); ?>
        </div>
        
    </div>
</section>







<?php get_footer(); ?>