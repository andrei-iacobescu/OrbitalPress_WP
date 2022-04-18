<?php

get_header();






while (have_posts()) {
    the_post(); ?>

    <section id="main-content">



        <section id="news-post">
            <div class="container">
                <div class="news-post-wrapper">
                    <div class="row g-xl-4">


                        <div class="col-xxl-7 col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 global-first-col">


                            <div class="breadcrumb">
                                <div class="breadcrumb-wrapper">
                                    <p>
                                    <div class="breadcrumb">
                                        <p>
                                            

                                            <?php  get_breadcrumb(); ?>

                                        </p>
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <div class="tag">
                                <p><?php custom_post_tag(); ?></p>
                            </div>



                            <div class="news-item-post">
                                <div class="news-item-post-wrapper">
                                    <div class="title">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                    <div class="date">
                                        <div class="left-side">
                                            <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/gentrit-sylejmani-JjUyjE-oEbM-unsplash.jpg') ?>" alt="">
                                            <p class="author">By <span><?php the_author_posts_link(); ?></span></p>
                                            <p class="date"><?php the_date(); ?></p>
                                        </div>

                                        <div class="right-side">
                                            <div class="views">
                                                <i class="fa-solid fa-eye"></i>
                                                <span><?php echo the_views(); ?></span>
                                            </div>

                                            <div class="comments">
                                                <i class="fa-solid fa-comment"></i>
                                                <span><?php echo comments_number() ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="share-options">
                                        <div class="share">
                                            <img src="<?php echo get_theme_file_uri('./images/Path-5.png') ?>" alt="">
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <span>Share</span>
                                        </div>

                                        <div class="share-media">
                                            <div class="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </div>
                                            <div class="twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </div>
                                            <div class="pinterest">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </div>
                                            <div class="whatsapp">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="news-content">
                                        <div class="image-container item-1">
                                            <?php news_item_image_thumb() ?>
                                        </div>

                                        <div class="description">
                                            <p><?php the_content(); ?></p>


                                        </div>









                                        <!-- <div class="description description-flex">
                                    <div class="row">
                                        <div class="media-object">
                                            <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/marco-oriolesi-wqLGlhjr6Og-unsplash.jpg') ?>" alt="">
                                            
                                            <div class="media">
                                                <p>We woke reasonably late following the feast and free flowing wine the night
                                                    before. After gathering ourselves and our packs, we headed down to our
                                                    homestay family's small dining room for breakfast.</p>
                                                <p>We woke reasonably late following the feast and free flowing wine the night
                                                    before. After gathering ourselves and our packs, we headed down to our
                                                    homestay family's small dining room for breakfast.</p>
    
                                                <p>We woke reasonably late following the feast and free flowing wine the night
                                                    before. After gathering ourselves and our packs.</p>
    
    
                                                <p>We woke reasonably late following the feast and
                                                    free flowing wine the night before. After
                                                    gathering ourselves and our packs. We woke
                                                    reasonably late following the feast and free
                                                    flwing wine the night before. After gathering
                                                    urselves nd our packs. The feast and free flowing wine the night after gathering e woke
                                                    reasonably late following the feast and after gathering ourselves and our packs.</p>

                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatre from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through</p>
                                            </div>
                                            
                                        </div>
                                        

                                        
                                    </div>
                                    
                                    
                                    
                                </div> -->


                                        <div class="divider"></div>



                                        <div class="share-options">
                                            <div class="share">
                                                <img src="<?php echo get_theme_file_uri('./images/Path-5.png') ?>" alt="">
                                                <i class="fa-solid fa-share-nodes"></i>
                                                <span>Share</span>
                                            </div>

                                            <div class="share-media">
                                                <div class="facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </div>
                                                <div class="twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                                <div class="pinterest">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </div>
                                                <div class="whatsapp">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="divider"></div>





                                        <div class="articles">
                                            <div class="previous-article">
                                                <p class="title">Previous Article</p>
                                                <a href="<?php the_permalink(); ?>" class="d-block d-sm-none"><?php previous_post_link(); ?></a>

                                            </div>


                                            <div class="next-article">
                                                <p class="title">Next Article</p>
                                                <a href="<?php the_permalink(); ?>" class="d-none d-sm-block"><?php next_post_link(); ?></a>
                                            </div>

                                        </div>




                                        <div class="post-author">
                                            <div class="post-author-wrapper">
                                                <div class="media-object">
                                                    <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/kyle-glenn-nXt5HtLmlgE-unsplash.jpg') ?>" alt="">

                                                    <div class="media">
                                                        <p class="name">Orbital Media</p>
                                                        <a href="" class="website">https://www.lorem.com</a>
                                                        <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
                                                        <div class="social-media">
                                                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                                                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                                                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="related-news">
                                            <div class="tagline">
                                                <div class="tag">Related News</div>
                                                <span></span>
                                            </div>


                                            <div class="row">
                                                <?php
                                                $dynamic_cat = get_category('cat');

                                                $relatedNews_args = array(
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 3,
                                                    'category__in'   => wp_get_post_categories($post->ID),
                                                    'post__not_in'   => array($post->ID)
                                                );

                                                $relatedNews = new WP_Query($relatedNews_args);

                                                while ($relatedNews->have_posts()) {
                                                    $relatedNews->the_post(); ?>

                                                    <div class="item col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <?php news_item_image_thumb_thumbsize(); ?>
                                                        <div class="news-tag"><span><?php custom_post_tag(); ?></span></div>
                                                        <div class="title"><?php the_title(); ?></div>
                                                    </div>


                                                <?php  }

                                                wp_reset_query();

                                                ?>



                                            </div>


                                        </div>


                                        <div class="comments">
                                            <div class="tagline">
                                                <div class="tag"><?php echo comments_number();  ?></div>
                                                <span></span>
                                            </div>


                                            <div class="row">
                                                <?php

                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if (
                                                    comments_open() || get_comments_number()
                                                ) :
                                                    comments_template();
                                                endif;

                                                //Get only the approved comments
                                                $args = array(
                                                    'status' => 'approve',
                                                    'post_id' => get_the_ID()
                                                );

                                                // The comment Query
                                                $comments_query = new WP_Comment_Query;
                                                $comments = $comments_query->query($args);

                                                // Comment Loop
                                                // if (
                                                //     $comments
                                                // ) {
                                                //     foreach ($comments as $comment) {
                                                //         // echo '<p>' . $comment->comment_content . '</p>';
                                                //     }
                                                // } else {
                                                //     echo 'No comments found.';
                                                // }


                                                ?>


                                            </div>
                                            <!-- End Mobile Version -->


                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>









                        <div class="col-xxl-5 col-xl-5 d-xl-block d-none  global-second-col">
                            <div class="col-xxl-12 stay-orbital-banner">
                                <div class="stay-orbital-banner-wrapper">
                                    <div class="stay-orbital-banner-content">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png') ?>" alt="">
                                        <p>Bring Your Ad Here!</p>
                                        <p>Make Your Business Go <span>ORBITAL</span>!</p>
                                        <p class="resolution">350 x 350</p>
                                    </div>
                                </div>
                            </div>






                            <div class="most-popular">
                                <div class="most-popular-wrapper">
                                    <div class="tagline">
                                        <div class="tag">
                                            <!-- <img src="./images/Path-4-v2.png" alt=""> -->
                                            <p>Most Popular</p>
                                        </div>
                                        <span></span>
                                    </div>

                                    <div class="row">

                                        <?php
                                        $singleMostPopular_args = array(
                                            'posts_per_page' => 3,
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'meta_key' => 'views',
                                            'orderby' => 'meta_value_num',
                                            'order' => 'asc',
                                        );

                                        $singleMostPopular = new WP_Query($singleMostPopular_args);

                                        while ($singleMostPopular->have_posts()) {
                                            $singleMostPopular->the_post(); ?>


                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 item">
                                                <a href="<?php echo the_permalink(); ?>">
                                                    <div class="media-object">
                                                        <?php news_item_image_thumb(); ?>
                                                        <div class="media">
                                                            <div class="title">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <h1 class="title"><?php the_title(); ?> </h1>
                                                                </a>
                                                            </div>
                                                            <div class="date"><?php news_date(); ?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>




                                        <?php    }

                                        wp_reset_query();

                                        ?>




                                    </div>
                                </div>
                            </div>








                            <div class="recent-comments">
                                <div class="tagline">
                                    <div class="tag">
                                        <p>Recent Comments</p>
                                    </div>
                                    <span></span>
                                </div>


                                <?php

                                $recentComments_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'post_status' => 'publish',
                                    'orderby' => 'comment_count',
                                    'order' => 'desc',
                                    'category__in'   => wp_get_post_categories($post->ID),
                                    'post__not_in'   => array($post->ID)
                                );


                                $recentComments = new WP_Query($recentComments_args);



                                while ($recentComments->have_posts()) {
                                    $recentComments->the_post(); ?>


                                    <!-- Facebook -->
                                    <div class="col-xl-12 item">
                                        <div class="never-miss-carousel">
                                            <!-- First Slide -->
                                            <div class="content">
                                                <a href="#">
                                                    <p><?php echo bg_recent_comments(); ?>on<span class="name"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></p>

                                                </a>
                                            </div>
                                        </div>
                                    </div>



                                <?php   } //endwhile
                                wp_reset_query();



                                ?>



                            </div>




                        </div>


                    </div>
                </div>
            </div>
        </section>











    </section>


<?php }


get_footer();

?>