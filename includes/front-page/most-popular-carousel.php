<?php
    if (have_posts()) {
        $mostPopular_args = array(
            'post_type' => 'post',
            'post_status' => 'published',
            'posts_per_page' => 3,
            'meta_key' => 'views',
            'orderby' => 'meta_value_num',
            'order' => 'asc',
        );

        $mostPopular = new WP_Query($mostPopular_args);

        while ($mostPopular->have_posts()) {
            $mostPopular->the_post(); ?>


            <!-- First Slide -->
            <div class="content">
                <a href="<?php echo the_permalink(); ?>">
                    <div class="title">
                        <a href="<?php the_permalink() ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                    </div>
                    <div class="date">
                        <p class="author">
                            <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                        </p> -
                        <p class="time">
                            <a href="<?php the_permalink() ?>"><?php news_date(); ?></a>
                        </p>
                        <!-- <div class="no-comments">
                                <a href="#comments"><span>0</span></a>
                            </div> -->
                    </div>
                    <div class="img-container">
                        <?php news_item_image_thumb(); ?>
                        <div class="tagline">
                            <p><?php custom_post_tag(); ?></p>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="description">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </a>
            </div>



    <?php } //endwhile
        wp_reset_query();
    } //endif

    ?>