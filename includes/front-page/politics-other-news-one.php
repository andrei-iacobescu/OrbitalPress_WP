 <?php
    if (have_posts()) {
        $politicsOtherNews_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'politics',
            'posts_per_page' => '2',
            'order' => 'asc'
        );


        $politicsOtherNews = new WP_Query($politicsOtherNews_args);

        while ($politicsOtherNews->have_posts()) {
            $politicsOtherNews->the_post(); ?>


         <!-- First Item -->
         <div class="col-xl-6 col-lg-6 col-md-6 item item-1 ps-md-4">
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