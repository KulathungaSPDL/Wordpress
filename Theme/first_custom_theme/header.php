<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <!-- header start -->
    <div class="header">

        <!-- navigation start -->
        <nav id="navbar" class="navbar navbar-expand-lg static-top">
          <div class="container ">
            <div class="line"></div>
            <a class="navbar-brand">
              <?php
                  if(function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id); 
                  }
              ?>
              <img class="logo" src="<?php echo $logo[0]; ?>" alt="logo" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <?php
                  wp_nav_menu(
                    array(
                      'menu' => 'primary',
                      'container' => '',
                      'theme_location' => 'primary',
                      'items_wrap' => '<ul id="" class="navbar-nav ms-auto" >%3$s</ul>'
                    )
                  );
              ?> 
            </div>
          </div>
        </nav>
        <!-- navigation end -->

    <!-- header end -->
