<?php

function add_setup_config() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('menus');

  register_nav_menus([
    // 'header_menu' => 'Menu do Cabeçalho',
  ]);
}
add_action('after_setup_theme', 'add_setup_config', 0);

function enqueue_assets() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', []);
}
add_action('wp_enqueue_scripts', 'enqueue_assets');
