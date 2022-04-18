<div class="main-carousel-wrapper-flex-three col-xl-6 col-lg-6 col-md-6">
    <div class="carousel-three">
        <?php
        if (have_posts()) {
            $flexMainThree_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'crypto',
                'posts_per_page' => 3,
                'order' => 'desc'
            );

            $flexMainThree = new WP_Query($flexMainThree_args);


            while ($flexMainThree->have_posts()) {
                $flexMainThree->the_post(); ?>


                <div class="main-carousel-item">
                    <div class="main-carousel-content">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="image">
                                <?php news_item_image_thumb(); ?>
                            </div>
                            <!-- Overlay -->
                            <div class="overlay">
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








        <?php } //endwhile
            wp_reset_query();
        } //endif

        ?>


    </div>
</div>