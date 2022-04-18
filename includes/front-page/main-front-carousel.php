<!-- First Carousel -->
<div class="main-carousel-wrapper-one col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <?php
    if (have_posts()) {
        $mainFrontCarousel_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'order' => 'desc'
        );

        $mainFrontCarousel = new WP_Query($mainFrontCarousel_args);


        while ($mainFrontCarousel->have_posts()) {
            $mainFrontCarousel->the_post(); ?>


            <div class="main-carousel-item">
                <div class="main-carousel-content">
                    <a href="<?php echo the_permalink(); ?>">
                        <div class="image">
                            <?php news_item_image_thumb(); ?>
                        </div>
                    </a>
                </div>
                <!-- Overlay -->
                <div class="overlay">
                    <!-- Desktop Content -->
                    <div class="content desktop d-none d-md-block">
                        <div class="tagline"><?php custom_post_tag(); ?></div>
                        <div class="title">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>

                        </div>
                        <div class="date">
                            <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                        </div>
                    </div>
                    <!-- End Desktop Content -->


                    <!-- Mobile Content -->
                    <div class="content mobile d-block d-md-none">
                        <div class="tagline"><?php custom_post_tag(); ?></div>
                        <div class="title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="date">
                            <h3><?php the_author(); ?> - <?php news_date(); ?></h3>
                        </div>
                    </div>
                    <!-- End Mobile Content -->


                </div>
                <!-- End Overlay -->
            </div>




    <?php } //endwhile
    } //endif


    ?>


</div>
<!-- End First Carousel -->