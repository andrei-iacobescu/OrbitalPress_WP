 <?php
    if (have_posts()) {
        $economyNewsThree_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'economy',
            'posts_per_page' => 4,
            'order' => 'asc'
        );

        $economyNewsThree = new WP_Query($economyNewsThree_args);

        while ($economyNewsThree->have_posts()) {
            $economyNewsThree->the_post(); ?>



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
                             <h1><?php the_title(); ?></h1>
                         </a>
                     </div>

                 </div>
             </a>
         </div>





 <?php } //endwhile

        wp_reset_query();
    } //endif


    ?>