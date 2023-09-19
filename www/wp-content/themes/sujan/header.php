<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('', true, 'right'); ?> </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900&amp;display=swap|IBM+Plex+Mono:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <?php wp_head();
  ?>
</head>

<body>
  <div class="section-dark-mode">
    <div class="container-fluid main-section overflow-hidden">
      <div class="container"> 
        <div class="row">
          <?php
          $args = array(
            'category_name' => 'hero-banner', // Replace with the slug of your category.
          );

          $custom_query = new WP_Query($args);

          // Loop through the posts and display them.
          if ($custom_query->have_posts()) {
            while ($custom_query->have_posts()) {
              $custom_query->the_post();
              $main_title = get_field('main_title');
              $medium_title = get_field('middle_title');
              $changing_title = get_field('text_changing_title');
              $content = wpautop(get_the_content());
              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Use get_the_ID() to get the current post's ID.

          ?>
              <div class="col-md-6 col-12">
                <div class="banner-left">
                  <h1><?php echo ($main_title); ?></h1>
                  <h2><?php echo ($medium_title); ?></h2>
                  <span class="head-bottom"></span>
                  <h6 class="header-mono"><span id="changingText"><?php echo ($changing_title); ?></span></h6>
                  <?php echo $content; ?>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="banner-top">
                  <div class="banner-img">
                    <img src="<?php echo ($image_url); ?>" alt="Image Alt Text">
                  </div>
                </div>
              </div>
          <?php
            }
            wp_reset_postdata(); // Reset the query.
          }
          ?>
        </div>
      </div>

    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white affix" data-spy="affix" data-offset-top="510">
      <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="/" class="menu-title nav-link active" data-target="home">Home</a></li>
            <li class="nav-item"><a href="#" class="menu-title nav-link" data-target="about">About</a></li>
            <li class="nav-item"><a href="#" class="menu-title nav-link" data-target="resume">Resume</a></li>
          </ul>
          <ul class="navbar-nav brand">
            <li class="brand-txt">
              <h5 class="brand-title">Sujan Shrestha</h5>
              <div class="brand-subtitle">WordPress Web Developer</div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="menu-title nav-link" data-target="service">Service</a></li>
            <li class="nav-item"><a href="#" class="menu-title nav-link" data-target="blog">Blog</a></li>
            <li class="nav-item last-item"><a href="#" class="menu-title nav-link" data-target="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
</body>