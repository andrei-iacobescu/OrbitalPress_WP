<?php
if (have_posts()) {
    $politicsNewsOne_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'politics',
        'posts_per_page' => '3'
    );

    $politicsNewsOne = new WP_Query($politicsNewsOne_args);

    while ($politicsNewsOne->have_posts()) {
        $politicsNewsOne->the_post(); ?>



        <!-- First Slide -->
        <div class="content">
            <a href="<?php echo the_permalink(); ?>">
                <div class="img-container">
                    <?php news_item_image_thumb(); ?>
                    <div class="tagline">
                        <p><?php custom_post_tag(); ?></p>
                    </div>
                </div>
                <div class="box-content">

                    <div class="title">
                        <a href="<?php the_permalink(); ?>">
                            <h1 class="d-none d-md-block"><?php the_title(); ?></h1>
                        </a>


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
                    <div class="description">
                        <p class="d-none d-md-block"><?php the_excerpt(); ?></p>

                    </div>
                </div>
            </a>
        </div>



<?php } //endwhile
    wp_reset_query();
} //endif

?>