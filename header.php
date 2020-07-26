<?php

/**
 * Header Theme
 * 
 * @since 1.0
 * @version 1.0
 * 
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="site-header">
            <div class="container">
              <h1 class="school-logo-text float-left"><a href="<?php echo site_url(); ?>"><strong>Fictional</strong> University</a></h1>
              <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
              <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
              <div class="site-header__menu group">
                <nav class="main-navigation">
                  <?php 
                    $args = array(
                      'theme_location' => 'header-menu-location',
                      'container' => 'ul',
                      'menu_class' => 'min-list group'
                    );
                    wp_nav_menu($args);
                  ?>
                </nav>
                <div class="site-header__util">
                  <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                  <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
                  <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
              </div>
            </div>
          </header>
        
    