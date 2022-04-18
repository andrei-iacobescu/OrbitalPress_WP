<?php
if (have_posts()) {
    $otherNews_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'meta_key' => 'views',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );

    $otherNews = new WP_Query($otherNews_args);

    while ($otherNews->have_posts()) {
        $otherNews->the_post();
?>



        <!-- First Item -->
        <div class="col-xl-12 col-lg-12 col-md-12 item item-1">

            <div class="media">
                <!-- <div class="img-container "> -->
                   <?php  news_item_image_thumb_thumbsize() ?>
                <!-- </div> -->


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

        </div>






<?php } //endwhile
    wp_reset_query();
} //endif

?>