<section id="footer" style="background-image: url(<?php echo get_theme_file_uri('./images/matteo-catanese-dVCGpKZB_E8-unsplash.jpg') ?>);">
  <div class="overlay"></div>
  <footer>
    <div class="footer-wrapper">
      <div class="container">
        <div class="row first-row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 editor-picks item">
            <h3 class="title">Editor Picks</h3>
            <ul>
              <li>
                <a href="">
                  <div class="media-object">
                    <img src="<?php echo get_theme_file_uri('./images/dariusz-sankowski-3OiYMgDKJ6k-unsplash.jpg') ?>" alt="" class="img-fluid">
                    <div class="media">
                      <div class="title">This Is A Test News Title. Its Purpose Is To Illustrate How A Title Would Look</div>
                      <div class="date">
                        November 21, 2022
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="media-object">
                    <img src="<?php echo get_theme_file_uri('./images/guillaume-perigois-0NRkVddA2fw-unsplash.jpg') ?>" alt="" class="img-fluid">
                    <div class="media">
                      <div class="title">This Is A Test News Title. Its Purpose Is To Illustrate How A Title Would Look</div>
                      <div class="date">
                        November 21, 2022
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="media-object">
                    <img src="<?php echo get_theme_file_uri('./images/christian-lue-7dEyTJ7-8os-unsplash.jpg') ?>" alt="" class="img-fluid">
                    <div class="media">
                      <div class="title">This Is A Test News Title. Its Purpose Is To Illustrate How A Title Would Look</div>
                      <div class="date">
                        November 21, 2022
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>




          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 popular-posts item">
            <h3 class="title">Popular Posts</h3>
            <ul>

              <?php if (have_posts()) {
                $args = array(

                  'posts_per_page' => 3,
                  'meta_key' => 'views',
                  'orderby' => 'meta_value_num',
                  'order' => 'desc',
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  // 'category_name' => 'economy',
                  // 'posts_per_page' => 3,

                  // 'paged' => $paged,
                  // 'tax_query' => array(
                  //     array(
                  //         'taxonomy' => 'post_tag',
                  //         'field'    => 'slug',
                  //         'terms'    => 'politics-geopolitics'
                  //     ),
                  // ),

                );
                $arr_posts = new WP_Query($args);

                while ($arr_posts->have_posts()) {
                  $arr_posts->the_post(); ?>

                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="media-object">
                        <div class="image">
                          <?php news_item_image_thumb(); ?>
                        </div>
                        <div class="media">
                          <div class="title"><?php the_title(); ?></div>
                          <div class="date">
                            <?php echo news_date(); ?>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>



              <?php }  // end while

              } // end if

              ?>
            </ul>
          </div>




          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 popular-category item">
            <h3 class="title">Popular Category</h3>
            <ul class="popular-category">

            <?php
            // wp_list_categories(array(
            //   'orderby'    => 'name',
            //   'show_count' => true,
            //   'title_li' => '',
            //   'style' => ''
            // ));

              $categories = get_categories(array(
                'orderby' => 'count',
                'order' => 'desc'
              ));
              $count = count($categories);
              if ( $count > 0 ){
                  echo "<ul class='popular-category'>";
                  
                  foreach ( $categories as $category ) {
                      echo "<li><a href='" . get_category_link($category) . "'><div class='media-object'><p>" . $category->name . "</p>" ."<p>" . $category->count . "</p>" . "</div></a></li>";
                      // echo "<p>" . $category->count . "</p>";
                  }
                  
                  echo "</ul>";
              }


            
            ?>

              
              
            </ul>
          </div>




        </div>


        <div class="line"></div>


        <div class="row second-row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <ul>
              <li>
                <a href="<?php echo site_url() ?>">
                  <div class="logo">
                    <p>Orbital<span>Press</span></p>
                    <span class="motto">This is a company motto</span>
                  </div>
                </a>
              </li>

            </ul>
          </div>

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <h3 class="title">About Orbital</h3>
            <p class="about">This is a test news title. Its purpose is to illustrate
              how a title would look. This is a test news title,
              its purpose is to illustrate.</p>
          </div>


          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 social-col">
            <h3 class="title">Follow us</h3>
            <div class="social-media">
              <div class="facebook">
                <i class="fa-brands fa-facebook-f"></i>
              </div>
              <div class="instagram">
                <i class="fa-brands fa-instagram"></i>
              </div>
              <div class="twitter">
                <i class="fa-brands fa-twitter"></i>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>

  </footer>
</section>




<section id="copyright">
  <div class="container">
    <div class="copyright-row">

      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 item item-1">
          <span>© OrbitalPress Theme developed by Apexoft.ro</span>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 item item-2">
          <ul>
            <?php

            wp_nav_menu(array(
              'theme_location' => 'footerMenuLocation',
              'container_class' => 'footer-menu-class'
            ));

            ?>
            <!-- <li><a href="#">Disclaimer</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                  <li><a href="#">Advertisement</a></li>
                  <li><a href="#">Contact</a></li> -->
          </ul>
        </div>
      </div>


    </div>
  </div>
</section>








<?php wp_footer(); ?>

</body>

</html>