<?php

function energexpower_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('bootsrap4-style', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
  wp_enqueue_script('jquery','//code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
  wp_enqueue_script('popper','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
  wp_enqueue_script('bootstrap4-script', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

//   Development and Production setup
  if (strstr($_SERVER['SERVER_NAME'], 'energexpower.local')) {
    wp_enqueue_script('main-energexpower-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.7212f914a50c0d94efdf.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.7212f914a50c0d94efdf.css'));
  }
}
add_action('wp_enqueue_scripts', 'energexpower_files');

function energexpower_features() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'energexpower_features');

function ignoreCertainFiles ($exclude_filters) {
  $exclude_filters[] = 'themes/energexpower/node_modules';
  return $exclude_filters;
}
add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles')

?>