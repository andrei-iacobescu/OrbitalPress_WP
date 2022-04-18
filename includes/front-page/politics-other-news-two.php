<?php
if (have_posts()) {
    $politicsOtherNewsTwo_args = array(
        'post_status' => 'published',
        'post_type' => 'post',
        'category_name' => 'politics',
        'posts_per_page' => '2',
        'order' => 'desc'
    );

    $politicsOtherNewsTwo = new WP_Query($politicsOtherNewsTwo_args);

    while ($politicsOtherNewsTwo->have_posts()) {
        $politicsOtherNewsTwo->the_post(); ?>


        <!-- Third Item -->
        <div class="col-xl-6 col-lg-6 col-md-6 item item-3 ps-md-4">
            <a href="<?php echo the_permalink(); ?>">
                <div class="media">
                    <?php news_item_image_thumb_thumbsize(); ?>
                    <div class="media-object">
                        <div class="title">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>

                        </div>
                        <div class="date">
                            <span><?php news_date(); ?></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>









<?php } //endwhile
    wp_reset_query();
} //endif

?>