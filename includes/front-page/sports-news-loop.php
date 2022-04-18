 <?php
    if (have_posts()) {
        $sportsNews_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'sports',
            'posts_per_page' => 4
        );

        $sportsNews = new WP_Query($sportsNews_args);

        while ($sportsNews->have_posts()) {
            $sportsNews->the_post(); ?>


         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 mb-sm-0">
             <div class="section-never-miss-news-box">
                 <div class="carousel-style">


                     <!-- First Slide -->
                     <div class="content ">
                         <a href="<?php echo the_permalink(); ?>">
                             <div class="media-object">
                                 <!-- image -->
                                 <div class="img-container">
                                     <?php news_item_image_thumb(); ?>
                                     <div class="tagline">
                                         <p><?php custom_post_tag(); ?></p>
                                     </div>
                                 </div>
                                 <!-- content -->
                                 <div class="media">
                                     <div class="box-content">

                                         <div class="title">
                                             <a href="<?php the_permalink(); ?>">
                                                 <h1><?php the_title(); ?></h1>
                                             </a>
                                         </div>
                                         <div class="date">
                                             <p class="author">
                                                 <a href="#author"><?php the_author(); ?></a>
                                             </p> -
                                             <p class="time">
                                                 <a href="#date"><?php news_date(); ?></a>
                                             </p>

                                         </div>
                                         <div class="description">
                                             <p><?php the_excerpt(); ?></p>
                                         </div>
                                     </div>
                                 </div>
                             </div>


                         </a>
                     </div>



                 </div>
             </div>
         </div>






 <?php   } //endwhile
        wp_reset_query();
    } //endif


    ?>