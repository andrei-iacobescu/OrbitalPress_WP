<?php get_header();?>


<section id="category-banner">
            <div class="bg-overlay"></div>
            <div class="banner">
                <div class="container">
                   <?php

                   $theParent = wp_get_post_parent_id(get_the_ID());
                    
                    if ($theParent) { ?>
                        
                        <div class="breadcrumb">
                            <p><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a> > <a href="#"><?php the_title(); ?></a></p>
                        </div>

                   <?php }?>
                
                   
                <div class="content">
                    <div class="title">
                        <h1>Welcome to our INDEX page!</h1>

                    </div>
                    <div class="tags">
                        <span><a href="">Geopolitics</a></span>
                        <span><a href="">Military</a></span>
                        <span><a href="">Diplomacy</a></span>
                        <span><a href="">Climate</a></span>
                        <span><a href="">Russia</a></span>
                    </div>
            
                    <div class="description">
                        <p class="d-none d-lg-block">Keep up with our latest news</p>
                        <p class="d-block d-lg-none">Keep up with our latest news</p>
                    </div>
                </div>
        </div>
    </div>
      
</section>





<div class="container">
<?php
    
    while(have_posts()) {
        the_post();  ?>

        <div class="post-item">
            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="">
                <p>Posted by <?php the_author_posts_link(); ?> on <?php the_date(); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>

            <div class="">
                <?php the_excerpt(); ?>
                <p><a class="btn btn-primary" href="<?php echo the_permalink(); ?>">Continue reading</a></p>
            </div>
        </div>


   <?php }
   
        echo paginate_links();
   
   ?>
    
    





</div>







<?php get_footer();?>