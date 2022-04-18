<div class="main-carousel-wrapper-flex-two col-xl-6 col-lg-6 col-md-6">
    <div class="carousel-two">

        <?php
        if (have_posts()) {
            $flexMainTwo_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'category_name' => 'global',
                'order' => 'desc'
            );

            $flexMainTwo = new WP_Query($flexMainTwo_args);

            while ($flexMainTwo->have_posts()) {
                $flexMainTwo->the_post(); ?>


                <div class="main-carousel-item">
                    <div class="main-carousel-content">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="image">
                                <!-- <img src="" alt=""> -->
                                <?php news_item_image_thumb(); ?>
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
                                    <!--  <div class="date">
                                                        <h3>Orbital Press - 18th November 2021</h3>
                                                    </div> -->
                                </div>
                                <!-- End Desktop Content -->


                                <!-- Mobile Content -->
                                <div class="content mobile d-block d-md-none">
                                    <div class="tagline"><?php custom_post_tag(); ?></div>
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>">
                                            <h2><?php the_title(); ?></h2>
                                        </a>
                                    </div>
                                    <!--  <div class="date">
                                                        <h3>Orbital Press - 18th November 2021</h3>
                                                    </div> -->
                                </div>
                                <!-- End Mobile Content -->
                            </div>
                            <!-- End Overlay -->
                        </a>
                    </div>
                </div>






        <?php  } //endwhile
            wp_reset_query();
        } //endif


        ?>




    </div>
</div>