<?php

get_header();

while (have_posts()) {
    the_post(); ?>

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
                        <h1><?php if (is_page()) {
                                echo single_post_title();
                            }; ?></h1>
                    </div>
                    <div class="tags">
                        <span><a href="">Geopolitics</a></span>
                        <span><a href="">Military</a></span>
                        <span><a href="">Diplomacy</a></span>
                        <span><a href="">Climate</a></span>
                        <span><a href="">Russia</a></span>
                    </div>

                    <div class="description">
                        <p class="d-none d-lg-block">See our full <a href="<?php echo custom_get_archive_link(); ?>">archive</a></p>
                        <p class="d-block d-lg-none">Custom category description. You must learn one thing. The world was made to be free in. Give up all the other worlds Except the one in which you belong.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php } ?>
































<section id="main-content">
    <div class="container">
        <div class="row g-5">
            <div class="first-global-col col-xxl-12 col-xl-12 col-lg-12">
                <div class="latest-news">
                    <div class="tagline main-tag">
                        <div class="tag">
                            <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                            <span><?php the_title(); ?></span>
                        </div>
                        <!-- <span class="line"></span> -->
                    </div>


                    <div class="content">
                        <p><?php the_field('page_desc'); ?></p>


                    </div>

                </div>


            </div>


            <div class="first-global-col col-xxl-8 col-xl-8 col-lg-8">

                <section id="main-carousel" class="main-carousel-page">
                    <div class=" container px-0">
                        <div class="row gx-3">

                            <!-- First Carousel -->
                            <div class="main-carousel-wrapper-one col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <?php

                                if (have_posts()) {
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'politics',
                                        'posts_per_page' => 3,
                                        'paged' => $paged,
                                    );
                                    $arr_posts = new WP_Query($args);

                                    while ($arr_posts->have_posts()) {
                                        $arr_posts->the_post(); ?>


                                        <div class="main-carousel-item">
                                            <div class="main-carousel-content">
                                                <div class="image">
                                                    <img class="img-fluid" src="<?php news_item_image_thumb(); ?>" alt="">
                                                </div>
                                            </div>
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <!-- Desktop Content -->
                                                <div class="content desktop d-none d-md-block">
                                                    <div class="tagline"><?php custom_post_tag(); ?></div>
                                                    <div class="title">
                                                        <h2><?php the_title(); ?></h2>
                                                    </div>
                                                    <div class="description">
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                    <div class="date">
                                                        <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                                                    </div>
                                                </div>
                                                <!-- End Desktop Content -->


                                                <!-- Mobile Content -->
                                                <div class="content mobile d-block d-md-none">
                                                    <div class="tagline">CRYPTO</div>
                                                    <div class="title">
                                                        <h2><?php the_title(); ?></h2>
                                                    </div>
                                                    <div class="description">
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                    <div class="date">
                                                        <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                                                    </div>
                                                </div>
                                                <!-- End Mobile Content -->


                                            </div>
                                            <!-- End Overlay -->
                                        </div>

                                <?php } // end while
                                    wp_reset_postdata();
                                } // end if
                                ?>

                            </div>
                            <!-- End First Carousel -->







                            <!-- Flex Carousel -->
                            <div class="main-carousel-wrapper-flex col-xl-6 col-lg-6 col-md-6 d-none d-md-block">

                                <!-- First Row -->
                                <div class="row mb-2">
                                    <!-- 1st Carousel -->
                                    <div class="main-carousel-wrapper-flex-one col-xl-12 col-lg-12 col-md-12">
                                        <div class="carousel-one carousel-page-template">
                                            <?php

                                            if (have_posts()) {
                                                $args = array(
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'category_name' => 'politics',
                                                    'posts_per_page' => 3,
                                                    // 'paged' => $paged,
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'post_tag',
                                                            'field'    => 'slug',
                                                            'terms'    => 'politics-climate'
                                                        ),
                                                    ),
                                                );
                                                $flexCarOne_posts = new WP_Query($args);

                                                while ($flexCarOne_posts->have_posts()) {
                                                    $flexCarOne_posts->the_post(); ?>
                                                    <div class="main-carousel-item">
                                                        <div class="main-carousel-content">
                                                            <div class="image">
                                                                <img src="<?php news_item_image_thumb() ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <!-- Overlay -->
                                                        <div class="overlay">
                                                            <div class="content">
                                                                <div class="tagline"><?php custom_post_tag(); ?></div>

                                                                <div class="title">
                                                                    <h2><?php the_title(); ?></h2>
                                                                </div>
                                                                <div class="description">
                                                                    <p><?php echo substr(get_the_excerpt(), 0, 75) ?></p>
                                                                </div>
                                                                <div class="date">
                                                                    <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End Overlay -->
                                                    </div>

                                            <?php } // end while
                                                wp_reset_postdata();
                                            } // end if
                                            ?>
                                        </div>

                                    </div>
                                    <!-- End 1st Carousel -->




                                </div>
                                <!-- End First Row -->




                                <!-- !!!  RIGHT CAROUSEL PART 2ND ROW  !!! -->

                                <!-- Second Row -->



                            </div>
                            <!-- End Flex Carousel -->


                            <!-- Flex Carousel -->
                            <div class="main-carousel-wrapper-flex col-xl-6 col-lg-6 col-md-6 d-none d-md-block">

                                <!-- First Row -->
                                <div class="row mb-2">
                                    <!-- 1st Carousel -->
                                    <div class="main-carousel-wrapper-flex-one col-xl-12 col-lg-12 col-md-12">
                                        <div class="carousel-two carousel-page-template">
                                            <?php

                                            if (have_posts()) {
                                                $args = array(
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'category_name' => 'politics',
                                                    'posts_per_page' => 3,
                                                    // 'paged' => $paged,
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'post_tag',
                                                            'field'    => 'slug',
                                                            'terms'    => 'politics-geopolitics'
                                                        ),
                                                    ),
                                                );
                                                $flexCarTwo_posts = new WP_Query($args);

                                                while ($flexCarTwo_posts->have_posts()) {
                                                    $flexCarTwo_posts->the_post(); ?>
                                                    <div class="main-carousel-item">
                                                        <div class="main-carousel-content">
                                                            <div class="image">
                                                                <img src="<?php news_item_image_thumb() ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <!-- Overlay -->
                                                        <div class="overlay">
                                                            <div class="content">
                                                                <div class="tagline"><?php custom_post_tag(); ?></div>

                                                                <div class="title">
                                                                    <h2><?php the_title(); ?></h2>
                                                                </div>
                                                                <div class="description">
                                                                    <p><?php echo substr(get_the_excerpt(), 0, 75) ?></p>
                                                                </div>
                                                                <div class="date">
                                                                    <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End Overlay -->
                                                    </div>
                                            <?php } // end while
                                                wp_reset_postdata();
                                            } // end if
                                            ?>

                                        </div>
                                    </div>
                                    <!-- End 1st Carousel -->




                                </div>
                                <!-- End First Row -->




                                <!-- !!!  RIGHT CAROUSEL PART 2ND ROW  !!! -->

                                <!-- Second Row -->



                            </div>
                            <!-- End Flex Carousel -->

                        </div>




                    </div>
                </section>



                <div class="latest-news">
                    <div class="tagline main-tag">
                        <div class="tag">
                            <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                            <span>Recent News</span>
                        </div>
                        <!-- <span class="line"></span> -->
                    </div>

                    <div class="row news-wrapper">




                        <?php
                        if (have_posts()) {
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'politics',
                                'posts_per_page' => 6,
                                'paged' => $paged,
                            );
                            $arr_posts = new WP_Query($args);

                            while ($arr_posts->have_posts()) {
                                $arr_posts->the_post(); ?>


                                <!-- News Item -->
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <!-- News Item -->
                                    <div class="content news-item">
                                        <a href="#">
                                            <div class="img-container">
                                                <div class="img-fluid">
                                                    <?php echo news_item_image_thumb(); ?>
                                                </div>
                                                <div class="tagline">
                                                    <p>Sport</p>
                                                </div>
                                            </div>
                                            <div class="box-content">

                                                <div class="title">
                                                    <h1 class="d-none d-md-block"><?php the_title(); ?> <br class="d-lg-none"></h1>
                                                    <h1 class="d-block d-md-none"><?php the_title(); ?></h1>
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



                        <?php } // end while
                            wp_reset_postdata();
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






                <!-- Most Popular -->
                <div class="tagline tagline-must-read-page">
                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                    <span>Most Popular</span>
                    <span class="line"></span>
                </div>


                <div class="must-read-news">
                    <?php if (have_posts()) {
                        $args = array(

                            'posts_per_page' => 3,
                            'meta_key' => 'views',
                            'orderby' => 'meta_value_num',
                            'order' => 'desc',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'politics',
                            // 'posts_per_page' => 3,

                            // 'paged' => $paged,
                            // 'tax_query' => array(
                            //     array(
                            //         'taxonomy' => 'post_tag',
                            //         'field'    => 'slug',
                            //         'terms'    => 'politics-geopolitics'
                            //     ),
                            // ),

                        );
                        $arr_posts = new WP_Query($args);

                        while ($arr_posts->have_posts()) {
                            $arr_posts->the_post(); ?>


                            <!-- Must Read News Item -->
                            <div class="must-read-item">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <div class="date">
                                    <span class="author"><?php the_author(); ?></span>
                                    <span class="date"><?php news_date(); ?></span>
                                </div>
                                <div class="divider"></div>
                            </div>


                    <?php }  // end while
                        wp_reset_postdata();
                    } // end if

                    ?>


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
                </div>


            </div>


        </div>

        <div class="pagination">
            <?php echo paginate_links(array(
                'mid_size' => 3,
                'end_size' => 1,
                'total' => $arr_posts->max_num_pages
            )); ?>
        </div>
    </div>
</section>






<?php get_footer(); ?>