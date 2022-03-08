<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <meta name="theme-color" content="#008080">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class();?>>
    <div class="cover">
      <div class="logo">
        <img src="<?php bloginfo('template_url');?>/assets/logo.svg" aria-hidden="true" alt="MMCSB grayscale logo">
      </div>
      <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <img width="1920" height="1080" class="bg-effect" id="anim-a" src="<?php bloginfo('template_url');?>/assets/anim_a.svg" alt="Background animation" aria-hidden="true">
    <img width="1920" height="1080" class="bg-effect" id="anim-b" src="<?php bloginfo('template_url');?>/assets/anim_b.svg" alt="Background animation" aria-hidden="true">
    <img width="1920" height="1080" class="bg-effect" id="anim-c" src="<?php bloginfo('template_url');?>/assets/anim_c.svg" alt="Background animation" aria-hidden="true">

    <header class="header">
      <nav class="navbar navbar-expand-lg bar-color">
        <div class="container-lg">
          <a class="navbar-brand" href="<?php echo home_url();?>">
            <img src="<?php bloginfo('template_url');?>/assets/logo.svg" alt="MMCSB logo" width="32" height="32" class="d-inline-block align-text-top">
            <?php if (is_front_page()) {echo "&nbsp;MMCSB";}?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
              ?>
          </div>
        </div>
      </nav>
    </header>