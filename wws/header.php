<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>WWS</title>
</head>
<body <?php body_class(); ?>>
  <?php $uri = get_theme_file_uri(); ?>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container nav-content">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $uri; ?>/assets/img/logo.png" class="d-none d-lg-block" alt="WWS-logo">
          <img src="<?php echo $uri; ?>/assets/img/logo-mobile.png" class="d-lg-none" alt="WWS-logo">
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <?php 
          
          if (has_nav_menu('primary')) {
            wp_nav_menu([
              'theme_location'  => 'primary',
              'depth'           => 2, 
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ]);
          }

          ?>
          </div>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav> 