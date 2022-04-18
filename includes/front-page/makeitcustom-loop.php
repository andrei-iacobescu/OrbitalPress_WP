 <?php
    if (have_posts()) {
        $makeItCustom_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'asc'
        );

        $makeItCustom = new WP_Query($makeItCustom_args);

        while ($makeItCustom->have_posts()) {
            $makeItCustom->the_post(); ?>


         <div class="col-xl-6 item">
             <div class="content">
                 <a href="<?php echo the_permalink(); ?>">
                     <div class="img-container">
                         <?php news_item_image_thumb() ?>
                         <div class="tagline">
                             <p><?php custom_post_tag(); ?></p>
                         </div>
                     </div>
                     <div class="box-content">

                         <div class="title">
                             <a href="<?php the_permalink(); ?>">
                                 <h1><?php the_title(); ?></h1>
                             </a>
                         </div>


                     </div>
                 </a>
             </div>
         </div>



 <?php   } //endwhile
        wp_reset_query();
    } //endif

    ?>