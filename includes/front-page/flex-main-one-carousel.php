<div class="main-carousel-wrapper-flex col-xl-6 col-lg-6 col-md-6 d-none d-md-block">

    <!-- First Row -->
    <div class="row mb-2">
        <!-- 1st Carousel -->
        <div class="main-carousel-wrapper-flex-one col-xl-12 col-lg-12 col-md-12">
            <div class="carousel-one">
                <?php
                if (have_posts()) {
                    $flexMainOne_args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'category_name' => 'sports',
                        'order' => 'asc'
                    );

                    $flexMainOne = new WP_Query($flexMainOne_args);

                    while ($flexMainOne->have_posts()) {
                        $flexMainOne->the_post(); ?>



                        <div class="main-carousel-item">
                            <a href="<?php echo the_permalink(); ?>" style="display:block;">
                                <div class=" main-carousel-content">
                                    <div class="image">
                                        <!-- <img src="" alt=""> -->
                                        <?php news_item_image_thumb(); ?>


                                    </div>
                                    <!-- Overlay -->

                                    <div class="overlay">

                                        <!-- Desktop Content -->
                                        <div class="content">
                                            <div class="tagline"><?php custom_post_tag(); ?></div>
                                            <div class="title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <h2><?php the_title(); ?></h2>
                                                </a>

                                            </div>
                                            <!-- <div class="date">
                                                    <h3>Orbital Press - 18th November 2021</h3>
                                                    </div> -->
                                        </div>
                                        <!-- End Desktop Content -->

                                        <!-- Mobile Content -->
                                        <div class="content">
                                            <div class="tagline"><?php custom_post_tag(); ?></div>
                                            <div class="title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <h2><?php the_title(); ?></h2>
                                                </a>
                                            </div>
                                            <!-- <div class="date">
                                                    <h3>Orbital Press - 18th November 2021</h3>
                                                </div> -->
                                        </div>
                                        <!-- End Mobile Content -->

                                    </div>

                                    <!-- End Overlay -->
                                </div>
                            </a>
                        </div>







                <?php } //endwhile
                    wp_reset_query();
                } //endif

                ?>




            </div>
        </div>
        <!-- End 1st Carousel -->
    </div>