<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header fixed-top">
<a class="navbar-brand" href="<?php echo site_url() ?>">
      <img class="navbar-brand__logo" id="logo" src="<?php echo get_theme_file_uri('/images/logo.png') ?>);" alt="Energex Power Logo" >
</a>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <?php
            wp_nav_menu([
            'menu'            => 'primary-top',
            'theme_location'  => 'headerMenuLocation',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'nav navbar-nav mr-auto',
            'depth'           => 2,
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
            ]);
        ?>
      </div>
</nav>
<div class="navbar-right">
    <a class="navbar-right__contact" href="#">Contact</a>
    <a class="navbar-right__member" href="#">My Energex Power</a>
</div>
<div class="buttom__bar"></div>
</header>
