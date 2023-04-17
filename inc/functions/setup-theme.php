<?php

function add_setup_config() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'add_setup_config', 0);
