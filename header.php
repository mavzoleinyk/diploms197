<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Deus | Single Post</title>
  <?php wp_head(); ?>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
  <script src="https://use.fontawesome.com/72aa657e98.js"></script>

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body class="bg-light single-post style-default style-rounded" <?php body_class(); ?>>
  
  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="#" class="sidenav__menu-url">Home</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="index.html" class="sidenav__menu-url">Home Default</a></li>
            <li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
            <li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
            <li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
            <li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
            <li><a href="index-music.html" class="sidenav__menu-url">Home Music</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-url">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
            <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
            <li><a href="404.html" class="sidenav__menu-url">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Features</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-url">Single Post</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
              </ul>
            </li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
          </ul>
        </li>        

        <!-- Categories -->
        <li>
          <a href="#" class="sidenav__menu-url">World</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Business</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Fashion</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Lifestyle</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Advertise</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->


  <main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <!-- Top menu -->
          <div class="col-lg-6">
            <ul class="top-menu">
              <li><a href="tel:+78126067711">+7 (495) 255-11-77</a></li>
              <li><a href="mailto:zakaz@kupit-diplom-47.com">zakaz@diploms-197.com</a></li>
            </ul>
          </div>

          <!-- Socials -->
          <div class="col-lg-6">
            <div class="socials nav__socials socials--nobase socials--white justify-content-end"> 
              <a href="https://wa.me/74952551177" class="social social-whatsapp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-whatsapp.png" alt=""></a>
              <a href="viber://add?number=74952551177" class="social social-viber" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-viber.png" alt=""></a>
              <a href="tg://resolve?domain=74952551177" class="social social-telegram" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-telegram.png" alt=""></a>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> 

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">
                <?php
                    wp_nav_menu(
                        array(
                            'menu'  => '2',
                            'menu_class'=> 'nav__menu',
                        )
                    );
                ?>
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>                
              </div>             

            </div> <!-- end nav right -->            
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
      <div class="nav__herologo">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo177_4.png" alt="" title=""></a>
            </div>
          </div>
        </div>
      </div>
    </header> <!-- end navigation -->

    <!-- Breadcrumbs -->
    <div class="container">
      <?php
          if ( is_home() ) :
              echo '
                <ul class="breadcrumbs">
                  <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__url">Home</a>
                  </li>
                  <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__url">News</a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item--current">
                    World
                  </li>
                </ul>';
          else :
              echo '<div class="block-serp"></div>';
          endif;
      ?>
    </div>
