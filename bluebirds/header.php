<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php
      
      wp_head();
      
    ?>  



  </head>

  <body <?php body_class(); ?>>
        <?php wp_body_open ();?>

   
    <!-- Header -->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
         
        <?php if (has_custom_logo() || get_bloginfo( 'description', 'display' )):?>
         <div class="site-ident">
          <div class="logo"><?php the_custom_logo(); ?></div>
          <h1><?php echo get_bloginfo( 'description', 'display' ); ?></h1>
         </div> 
         <?php endif;?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div id="navbarResponsive" class="navbar-collapse collapse">
          <?php 
            wp_nav_menu( [
                'theme_location'  => 'header_menu',
                'menu'            => '',
                'menu_class'      => 'navbar-nav bb-nav-menu',
                
                 ] );?>
        </div>
              
            <?php if ( is_active_sidebar( 'header1' ) ) : ?>
                <div class="header-widget-area">
                <?php dynamic_sidebar('header1');?>
                </div>
                <?php endif; ?>

            <?php if ( is_active_sidebar( 'social-icons' ) ) : ?>
                <div class="header-widget-area">
                <?php dynamic_sidebar('social-icons');?>
                </div>
                <?php endif; ?>
               
        </div>
      </nav>
    </header>
