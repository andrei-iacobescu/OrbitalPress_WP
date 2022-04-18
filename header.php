<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    
</head>
<body <?php body_class(); ?>>
    
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-8">
                    <div class="date fs-9">
                        <span>10°C Bucharest</span>
                        <span>Friday, November 17 2021</span>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-4">
                    <div class="social-media">
                        <i class="px-1 fab fa-facebook-f"></i>
                        <i class="px-1 fab fa-instagram"></i>
                        <i class="px-1 fab fa-twitter"></i>
                        <i class="px-1 fab fa-youtube"></i>
                    </div>
                </div>




            </div>
        </div>
    </section>


    <!-- Desktop Logobar -->
    <section id="logobar">
        <div class="wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 col-12 m-auto">
                    <div class="logo">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png')?>" alt="">
                        <div class="logo-content">
                            <p><a href="<?php echo site_url() ?>"><span class="name">Orbital<span>Press</span></span> <br> <span class="motto">This is a company motto</span></a></p>
                        </div>
                       
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                    <div class="banner">

                        <div class="content">
                            <img src="<?php echo get_theme_file_uri('./images/Asset-2.png')?>" alt="">
                            <div class="copy">
                                <span>Bring Your Ad Here!</span>
                                <span>Make Your Business Go <span class="orbital">ORBITAL!</span></span>
                                <span>728 x 90</span>
                            </div>
                            <img src="<?php echo get_theme_file_uri('./images/Asset-2.png')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="breaking-news" class="desktop">
        <div class="container">
          <div class="breaking-news-wrapper">
            <div class="row">
              <div class="col-xl-7">
                <div class="breaking-text">
                  <span>BREAKING NEWS!</span>
                </div>
              </div>
            </div>
           
            <div class="col-xl-5">
              <div class="ticker-wrap">
              <div class="ticker">
                <div class="ticker__item">
                  <p>
                    <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                  </p>
                </div>
                <div class="ticker__item">
                  <p>
                   
                    <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                  </p>
                </div>
                <div class="ticker__item">
                  <p>
                   
                    <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                  </p>
                </div>
              </div>
            </div>
            </div>
            

          </div>
          
           
        </div>
    </section>


   
    


    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->

              <!-- Mobile Logo -->
              <div class="logo d-md-none">
                <img class="img-fluid" src="<?php echo get_theme_file_uri('./images/Asset-2.png')?>" alt="">
                <div class="logo-content">
                    <p><span class="name">Orbital<span>Press</span></span> <br> <span class="motto">This is a company motto</span></p>
                </div>
              </div>
                <!-- Mobile Logo -->

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

               

                <ul class="navbar-nav">
                <?php

                wp_nav_menu(array(
                  'theme_location' => 'headerMenuLocation',
                  'container_class' => 'custom-menu-class'
                ));

                ?>



                  <!-- <li class="nav-item search d-block d-md-none">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                     
                    </form>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('/about-us') ?>">Politics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./categories/sports.html">Sports</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Economy
                    </a>
                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./categories/crypto.html">Crypto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./categories/global.html">Global</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./categories/local.html">Local</a>
                  </li> -->
                </ul>
               
              </div>
            </div>
          </nav>
    </section>






    <section id="breaking-news" class="mobile">
      <div class="container">
        <div class="breaking-news-wrapper">
          <div class="row">
            <div class="col-xl-7">
              <div class="breaking-text">
                <span>BREAKING NEWS!</span>
              </div>
            </div>
          </div>
         
          <div class="col-xl-5">
            <div class="ticker-wrap">
            <div class="ticker">
              <div class="ticker__item">
                <p>
                  <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                </p>
              </div>
              <div class="ticker__item">
                <p>
                 
                  <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                </p>
              </div>
              <div class="ticker__item">
                <p>
                 
                  <span class="line">This is a breaking news title event. It usually slides along with many other news or events happening events happening events hap</span>
                </p>
              </div>
            </div>
          </div>
          </div>
          

        </div>
        
         
      </div>
    </section>

    