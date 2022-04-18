 <?php

    if (have_posts()) {
        $neverMiss_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'meta_key' => 'views',
            'orderby' => 'meta_value_num',
            'order' => 'desc',
        );

        $neverMiss = new WP_Query($neverMiss_args);

        while ($neverMiss->have_posts()) {
            $neverMiss->the_post();
    ?>



         <!-- First Slide -->
         <div class="content">
             <a href="<?php echo the_permalink(); ?>">
                 <div class="img-container">
                     <!-- <img class="img-fluid" src=">" alt=""> -->
                     <?php news_item_image_thumb(); ?>
                     <div class="tagline">
                         <p><?php custom_post_tag() ?></p>
                     </div>
                 </div>
                 <div class="box-content">

                     <div class="title">
                         <a href="<?php the_permalink(); ?>">
                             <h1><?php echo the_title(); ?></h1>
                         </a>
                     </div>
                     <div class="date">
                         <p class="author">
                             <a href="#author">Andrei Iacobescu</a>
                         </p> -
                         <p class="time">
                             <a href="#date">November 20, 2022</a>
                         </p>
                         <div class="no-comments">
                             <a href="#comments"><span>0</span></a>
                         </div>
                     </div>
                     <div class="description">
                         <?php echo the_excerpt(); ?>
                     </div>
                 </div>
             </a>
         </div>












 <?php } //endwhile
        wp_reset_query();
    } //endif
    ?>