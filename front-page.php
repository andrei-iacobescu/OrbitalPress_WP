<?php

// /**
//  * Render your site front page, whether the front page displays the blog posts index or a static page.
//  *
//  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
//  *
//  * @package wp_rig
//  */
// namespace WP_Rig\WP_Rig;
// use WP_Query;

get_header(); ?>


<?php



?>



<section id="header">
    <div class="container">
        <div class="ticker">
            <span style="background-image: url(<?php echo get_theme_file_uri('/images/path-2.png') ?>)">Trending <div class="d-none d-sm-inline">Now</div></span> <span>This is a test title news for the Trending Now Category</span>
        </div>
    </div>
</section>


<section id="main-carousel" class="main-carousel-front-page">
    <div class="container">
        <div class="row gx-3">

            <!-- First Carousel -->
            <?php include get_template_directory() .  './includes/front-page/main-front-carousel.php'; ?>
            <!-- End First Carousel -->







            <!-- Flex Carousel -->
            <?php include get_template_directory() .  './includes/front-page/flex-main-one-carousel.php'; ?>
            <!-- End First Row -->




            <!-- !!!  RIGHT CAROUSEL PART 2ND ROW  !!! -->

            <!-- Second Row -->
            <div class="row second-row gx-2">
                <!-- 2nd Carousel -->
                <?php include get_template_directory() .  './includes/front-page/flex-main-two-carousel.php'; ?>
                <!-- End 2nd Carousel -->


                <!-- 3rd Carousel -->
                <?php include get_template_directory() .  './includes/front-page/flex-main-three-carousel.php'; ?>
                <!-- End 3rd Carousel -->
            </div>
            <!-- End Second Row -->


        </div>
        <!-- End Flex Carousel -->

    </div>




    </div>
</section>





<section id="main-content">

    <section id="never-miss-news">
        <div class="container">
            <div class="row g-3">
                <!-- First Main Col -->
                <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 first-main-content-col">

                    <!-- Never Miss -->
                    <div class="section-never-miss">
                        <div class="section-never-miss-wrapper">

                            <!-- Never Miss Navbar -->
                            <div class="section-never-miss-navbar">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-11 col-md-12 px-0">
                                        <div class="section-never-miss-tag">
                                            <img src="<?php echo get_theme_file_uri('./images/path-4.png') ?>" alt="">
                                            <span>Never Miss</span>
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Politics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Economy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Sports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a href="" class="nav-link">Crypto</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Global</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Local</a>
                                                </li>
                                                <li class="nav-item dropdown drp d-md-none">
                                                    <!-- <div class="dropdown d-md-none"> -->
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        More
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Global</a></li>
                                                        <li><a class="dropdown-item" href="#">Local</a></li>
                                                        <li><a class="dropdown-item" href="#">Local</a></li>
                                                        <li class="nav-item ">
                                                            <a href="#" class="nav-link">Crypto</a>
                                                        </li>
                                                    </ul>
                                                    <!-- </div> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Never Miss News Content -->
                            <div class="section-never-miss-news">
                                <div class="section-never-miss-news-wrapper">
                                    <div class="row g-4 g-lg-5">
                                        <!-- News Box -->
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="section-never-miss-news-box">
                                                <div class="never-miss-carousel">
                                                    <!-- Never Miss Carousel Content & Code -->

                                                    <?php include get_template_directory() . './includes/front-page/never-miss-carousel.php' ?>

                                                    <!-- Never Miss Carousel Content & Code -->





                                                </div>
                                            </div>
                                        </div>





                                        <!-- Other News -->
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="other-news">
                                                <div class="row">
                                                    <!-- Never Miss Other News -->
                                                    <?php include get_template_directory() . './includes/front-page/never-miss-other-news.php'; ?>
                                                    <!-- Never Miss Other News -->
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End First Main Col -->

                <!-- GHOST COL -->
                <!-- <div class="col-xl-1 col-lg-1"></div> -->
                <!-- END GHOST COL -->


                <!-- Second Main Col -->
                <div class="col-xl-4 d-none d-xl-block ms-xl-auto second-main-content-col">
                    <!-- Never Miss Navbar -->
                    <div class="section-stay-orbital-navbar">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-3 under-navbar">
                                <div class="section-stay-orbital-tag">
                                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                                    <span>Stay Orbital</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <!-- Facebook -->
                                        <div class="col-xl-12">
                                            <div class="item">
                                                <div class="media-icon facebook">
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>
                                                <div class="number">
                                                    45,372 Followers
                                                </div>
                                                <div class="type">
                                                    LIKES
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Twitter -->
                                        <div class="col-xl-12">
                                            <div class="item">
                                                <div class="media-icon twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </div>
                                                <div class="number">
                                                    21,841 Followers
                                                </div>
                                                <div class="type">
                                                    FOLLOW
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Youtube -->
                                        <div class="col-xl-12">
                                            <div class="item">
                                                <div class="media-icon youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </div>
                                                <div class="number">
                                                    33,168 Subscribers
                                                </div>
                                                <div class="type">
                                                    SUBSCRIBE
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-12 stay-orbital-banner">
                                            <div class="stay-orbital-banner-wrapper">
                                                <div class="stay-orbital-banner-content">
                                                    <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png') ?>" alt="">
                                                    <p>Bring Your Ad Here!</p>
                                                    <p>Make Your Business Go <span>ORBITAL</span>!</p>
                                                    <p>350 x 350</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <!-- End Second Main Col -->
        </div>
        </div>
    </section>


















    <!--  /****************** POLITICS NEWS SECTION ******************/ -->

    <section id="politics-news">
        <div class="container">
            <div class="row g-2 politics-news-row">
                <!-- First Main Col -->
                <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 first-main-content-col">

                    <!-- Never Miss -->
                    <div class="section-never-miss">
                        <div class="section-never-miss-wrapper">

                            <!-- Never Miss Navbar -->
                            <div class="section-never-miss-navbar">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-11 col-md-12 px-0">
                                        <div class="section-never-miss-tag">
                                            <img src="<?php echo get_theme_file_uri('./images/path-4.png') ?>" alt="">
                                            <span>Politics News</span>
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Politics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Economy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Sports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a href="" class="nav-link">Crypto</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Global</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Local</a>
                                                </li>
                                                <li class="nav-item drp">
                                                    <div class="dropdown d-md-none">
                                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="neverMiss" data-bs-toggle="dropdown" aria-expanded="false">
                                                            More
                                                        </a>

                                                        <ul class="dropdown-menu never-miss-dropdown" aria-labelledby="neverMiss">
                                                            <li><a class="dropdown-item" href="#">Global</a></li>
                                                            <li><a class="dropdown-item" href="#">Local</a></li>
                                                            <li class="nav-item ">
                                                                <a href="#" class="nav-link">Crypto</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Never Miss News Content -->
                            <div class="section-never-miss-news">
                                <div class="section-never-miss-news-wrapper">
                                    <div class="row g-4 g-lg-5">
                                        <!-- News Box -->
                                        <!-- First Row -->
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-2 mb-sm-0">
                                            <div class="section-never-miss-news-box">
                                                <div class="carousel-style" id="politics-news-carousel-one">
                                                    <!-- Politics News Carousel ONE -->
                                                    <?php include get_template_directory() . './includes/front-page/politics-one-carousel.php' ?>
                                                    <!-- Politics News Carousel ONE -->

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="section-never-miss-news-box">
                                                <div class="carousel-style" id="politics-news-carousel-two">

                                                    <!-- Politics News Carousel TWO -->
                                                    <?php include get_template_directory() . './includes/front-page/politics-two-carousel.php' ?>
                                                    <!-- Politics News Carousel TWO -->

                                                </div>
                                            </div>
                                        </div>


                                        <!-- Second Row -->
                                        <div class="row gx-0 gy-4 mt-5">
                                            <!-- Other News -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="other-news">
                                                    <!-- First Sub-Row -->
                                                    <div class="row px-4 g-md-5">

                                                        <?php include get_template_directory() . './includes/front-page/politics-other-news-one.php' ?>




                                                    </div>


                                                    <!-- Second Sub-Row -->
                                                    <div class="row px-4 g-md-5">


                                                        <?php include get_template_directory() . './includes/front-page/politics-other-news-two.php' ?>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End First Main Col -->




                <!-- Second Main Col -->
                <div class="col-xxl-4 col-xl-4 d-none d-xl-block ms-xl-auto second-make-it-custom-col">
                    <!-- Never Miss Navbar -->
                    <div class="section-make-it-custom-navbar">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-3 under-navbar">
                                <div class="section-make-it-custom-tag">
                                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                                    <span>Make It Custom</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <!-- Make It Custom Loop -->

                                        <?php include get_template_directory() . './includes/front-page/makeitcustom-loop.php' ?>

                                        <!-- Make It Custom Loop -->

                                        <div class="col-xl-12 stay-orbital-banner">
                                            <div class="stay-orbital-banner-wrapper">
                                                <div class="stay-orbital-banner-content">
                                                    <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png') ?>" alt="">
                                                    <p>Bring Your Ad Here!</p>
                                                    <p>Make Your Business Go <span>ORBITAL</span>!</p>
                                                    <p>350 x 350</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>

                <!-- End Second Main Col -->

            </div>
        </div>

    </section>

    <!--  /****************** POLITICS NEWS SECTION ******************/ -->
















    <!--  /****************** ECONOMY NEWS SECTION ******************/ -->

    <section id="economy-news">
        <div class="container">
            <div class="row g-2 politics-news-row">
                <!-- First Main Col -->
                <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 first-main-content-col">

                    <!-- Never Miss -->
                    <div class="section-never-miss">
                        <div class="section-never-miss-wrapper">

                            <!-- Never Miss Navbar -->
                            <div class="section-never-miss-navbar">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-11 col-md-12 px-0">
                                        <div class="section-never-miss-tag">
                                            <img src="<?php echo get_theme_file_uri('./images/path-4.png') ?>" alt="">
                                            <span>Economy News</span>
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Politics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Economy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Sports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a href="" class="nav-link">Crypto</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Global</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Local</a>
                                                </li>
                                                <li class="nav-item drp">
                                                    <div class="dropdown d-md-none">
                                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="neverMiss" data-bs-toggle="dropdown" aria-expanded="false">
                                                            More
                                                        </a>

                                                        <ul class="dropdown-menu never-miss-dropdown" aria-labelledby="neverMiss">
                                                            <li><a class="dropdown-item" href="#">Global</a></li>
                                                            <li><a class="dropdown-item" href="#">Local</a></li>
                                                            <li class="nav-item ">
                                                                <a href="#" class="nav-link">Crypto</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <!-- Never Miss News Content -->
                            <div class="section-never-miss-news">
                                <div class="section-never-miss-news-wrapper">
                                    <div class="row g-4 g-lg-5">
                                        <!-- News Box -->
                                        <!-- First Row -->
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2 mb-sm-0">
                                            <div class="section-never-miss-news-box">
                                                <div class="carousel-style" id="economy-carousel-one">

                                                    <?php include get_template_directory() . './includes/front-page/economy-carousel-one.php' ?>



                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2 mb-sm-0">
                                            <div class="section-never-miss-news-box">
                                                <div class="carousel-style" id="economy-carousel-two">

                                                    <?php include get_template_directory() . './includes/front-page/economy-carousel-two.php' ?>




                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2 mb-sm-0">
                                            <div class="section-never-miss-news-box">
                                                <div class="carousel-style" id="economy-carousel-three">

                                                    <?php include get_template_directory() . './includes/front-page/economy-carousel-three.php' ?>




                                                </div>
                                            </div>
                                        </div>



                                        <!-- Second Row -->

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End First Main Col -->




                <!-- Second Main Col -->
                <div class="col-xxl-4 col-xl-4 d-none d-xl-block ms-xl-auto second-make-it-custom-col">
                    <!-- Never Miss Navbar -->
                    <div class="section-make-it-custom-navbar">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-3 under-navbar">
                                <div class="section-make-it-custom-tag">
                                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                                    <span>Most Popular</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <!-- Facebook -->
                                        <div class="col-xl-12 item">
                                            <div class="carousel-style" id="most-popular-carousel">

                                                <!-- Most Popular Carousel  -->

                                                <?php include get_template_directory() . './includes/front-page/most-popular-carousel.php' ?>

                                                <!-- Most Popular Carousel -->


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>

                <!-- End Second Main Col -->

            </div>
        </div>

    </section>

    <!--  /****************** ECONOMY NEWS SECTION ******************/ -->


















    <!--  /****************** SPORTS NEWS SECTION ******************/ -->

    <section id="sports-news">
        <div class="container">
            <div class="row g-2 politics-news-row">
                <!-- First Main Col -->
                <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 first-main-content-col">

                    <!-- Never Miss -->
                    <div class="section-never-miss">
                        <div class="section-never-miss-wrapper">

                            <!-- Never Miss Navbar -->
                            <div class="section-never-miss-navbar">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-11 col-md-12 px-0">
                                        <div class="section-never-miss-tag">
                                            <img src="<?php echo get_theme_file_uri('./images/path-4.png') ?>" alt="">
                                            <span>Sports News</span>
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Politics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Economy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Sports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a href="" class="nav-link">Crypto</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Global</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Local</a>
                                                </li>
                                                <li class="nav-item drp">
                                                    <div class="dropdown d-md-none">
                                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="neverMiss" data-bs-toggle="dropdown" aria-expanded="false">
                                                            More
                                                        </a>

                                                        <ul class="dropdown-menu never-miss-dropdown" aria-labelledby="neverMiss">
                                                            <li><a class="dropdown-item" href="#">Global</a></li>
                                                            <li><a class="dropdown-item" href="#">Local</a></li>
                                                            <li class="nav-item ">
                                                                <a href="#" class="nav-link">Crypto</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Never Miss News Content -->
                            <div class="section-never-miss-news">
                                <div class="section-never-miss-news-wrapper">
                                    <div class="row g-4 g-lg-5">
                                        <!-- News Box -->
                                        <!-- First Row -->


                                        <?php include get_template_directory() . './includes/front-page/sports-news-loop.php' ?>


                                        <!-- Second Row -->

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End First Main Col -->




                <!-- Second Main Col -->
                <div class="col-xxl-4 col-xl-4 d-none d-xl-block ms-xl-auto second-make-it-custom-col">
                    <!-- Never Miss Navbar -->
                    <div class="section-make-it-custom-navbar">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-3 under-navbar">
                                <div class="section-make-it-custom-tag">
                                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                                    <span>Most Popular</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">

                                        <?php
                                        if (have_posts()) {
                                            $topPosts_args = array(
                                                'post_status' => 'publish',
                                                'post_type' => 'post',
                                                'posts_per_page' => 3,
                                                'orderby' => array(
                                                    'meta_value_num' => 'asc',
                                                    'comment_count' => 'asc'
                                                ),
                                            );

                                            $topPosts = new WP_Query($topPosts_args);

                                            while ($topPosts->have_posts()) {
                                                $topPosts->the_post(); ?>


                                                <!-- Facebook -->
                                                <div class="col-xl-12 item">
                                                    <div class="never-miss-carousel">
                                                        <!-- First Slide -->
                                                        <div class="content">
                                                            <a href="<?php echo the_permalink(); ?>">
                                                                <div class="media-object">
                                                                    <!-- image -->
                                                                    <div class="img-container">
                                                                        <?php news_item_image_thumb() ?>
                                                                        <div class="tagline">
                                                                            <p><?php custom_post_tag() ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- content -->
                                                                    <div class="media">
                                                                        <div class="box-content">

                                                                            <div class="title">
                                                                                <a href="<?php the_permalink(); ?>">
                                                                                    <h1><?php the_title(); ?></h1>
                                                                                </a>
                                                                            </div>
                                                                            <div class="date">
                                                                                <p class="author">
                                                                                    <a href="#author"><?php the_author(); ?></a>
                                                                                </p> -
                                                                                <p class="time">
                                                                                    <a href="#date"><?php news_date(); ?></a>
                                                                                </p>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>




                                        <?php } //endwhile
                                            wp_reset_query();
                                        } //endif

                                        ?>






                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>

                <!-- End Second Main Col -->

            </div>
        </div>

    </section>

    <!--  /****************** SPORTS NEWS SECTION ******************/ -->


































    <!--  /****************** LATEST NEWS SECTION ******************/ -->

    <section id="latest-news">
        <div class="container">
            <div class="row g-2 politics-news-row">
                <!-- First Main Col -->
                <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 first-main-content-col">

                    <!-- Never Miss -->
                    <div class="section-never-miss">
                        <div class="section-never-miss-wrapper">

                            <!-- Never Miss Navbar -->
                            <div class="section-never-miss-navbar">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-11 col-md-12 px-0">
                                        <div class="section-never-miss-tag">
                                            <img src="<?php echo get_theme_file_uri('./images/path-4.png') ?>" alt="">
                                            <span>Latest News</span>
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Politics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Economy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link">Sports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a href="" class="nav-link">Crypto</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Global</a>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <a href="" class="nav-link">Local</a>
                                                </li>
                                                <li class="nav-item drp">
                                                    <div class="dropdown d-md-none">
                                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="neverMiss" data-bs-toggle="dropdown" aria-expanded="false">
                                                            More
                                                        </a>

                                                        <ul class="dropdown-menu never-miss-dropdown" aria-labelledby="neverMiss">
                                                            <li><a class="dropdown-item" href="#">Global</a></li>
                                                            <li><a class="dropdown-item" href="#">Local</a></li>
                                                            <li class="nav-item ">
                                                                <a href="#" class="nav-link">Crypto</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Never Miss News Content -->
                            <div class="section-never-miss-news">
                                <div class="section-never-miss-news-wrapper">
                                    <div class="row g-4 g-lg-5">
                                        <!-- News Box -->
                                        <!-- First Row -->


                                        <?php
                                        if (have_posts()) {
                                            $latestNews_args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 8,
                                                $paged => 'paged',
                                            );


                                            $latestNews = new WP_Query($latestNews_args);


                                            while ($latestNews->have_posts()) {
                                                $latestNews->the_post(); ?>

                                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 mb-2 mb-sm-0">
                                                    <div class="section-never-miss-news-box">
                                                        <div class="carousel-style">
                                                            <!-- First Slide -->
                                                            <div class="content">
                                                                <a href="<?php echo the_permalink(); ?>">
                                                                    <div class="media-object">
                                                                        <!-- image -->
                                                                        <div class="img-container">
                                                                            <?php news_item_image_thumb(); ?>
                                                                            <div class="tagline">
                                                                                <p><?php custom_post_tag() ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- content -->
                                                                        <div class="media">
                                                                            <div class="box-content">

                                                                                <div class="title">
                                                                                    <a href="<?php the_permalink(); ?>">
                                                                                        <h1><?php the_title(); ?></h1>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="date">
                                                                                    <p class="author">
                                                                                        <a href="#author"><?php the_author(); ?></a>
                                                                                    </p> -
                                                                                    <p class="time">
                                                                                        <a href="#date"><?php news_date(); ?></a>
                                                                                    </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                        <?php } //endwhile
                                            wp_reset_query();
                                        } //endif


                                        ?>




                                        <!-- Second Row -->

                                    </div>
                                    <div class="pagination">
                                        <?php  echo paginate_links(array(
                                            // 'mid_size' => 3,
                                            // 'end_size' => 1,
                                            'total' => $latestNews->max_num_pages
                                        )); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End First Main Col -->




                <!-- Second Main Col -->
                <div class="col-xxl-4 col-xl-4 d-none d-xl-block ms-xl-auto second-make-it-custom-col">
                    <!-- Never Miss Navbar -->
                    <div class="section-make-it-custom-navbar">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-3 under-navbar">
                                <div class="section-make-it-custom-tag">
                                    <img src="<?php echo get_theme_file_uri('./images/Path-4-v2.png') ?>" alt="">
                                    <span>Recent Comments</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">

                                        <?php
                                        if (have_posts()) {
                                            $recentComments_args = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 3,
                                                'post_status' => 'publish',
                                                'orderby' => 'comment_count',
                                                'order' => 'desc',
                                            );


                                            $recentComments = new WP_Query($recentComments_args);



                                            while ($recentComments->have_posts()) {
                                                $recentComments->the_post(); ?>


                                                <!-- Facebook -->
                                                <div class="col-xl-12 item">
                                                    <div class="never-miss-carousel">
                                                        <!-- First Slide -->
                                                        <div class="content">
                                                            <a href="#">
                                                                <p class="comment"><span class="name"><?php echo bg_recent_comments(); ?> on</span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>



                                        <?php   } //endwhile
                                            wp_reset_query();
                                        } //endif


                                        ?>






                                    </div>

                                    <div class="col-xl-12 stay-orbital-banner">
                                        <div class="stay-orbital-banner-wrapper">
                                            <div class="stay-orbital-banner-content">
                                                <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png') ?>" alt="">
                                                <p>Bring Your Ad Here! <span class="ad">Make Your Business Go <span class="orbital">ORBITAL</span>!</span></p>

                                                <p>350 x 700</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>







                        </div>


                    </div>
                </div>

                <!-- End Second Main Col -->




            </div>
        </div>

    </section>

    <!--  /****************** LATEST NEWS SECTION ******************/ -->















</section>









<?php get_footer(); ?>