<?php 
  add_action('wp_enqueue_scripts', 'add_styles');

  function add_styles() {
    wp_register_style(
      'google-fonts_style',
      'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@200&family=Zen+Kaku+Gothic+New:wght@300;400;700&display=swap',
      array(),
      '1.0'
    );

    wp_register_style(
      'slick_theme_style',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
      array(),
      '1.0'
    );

    wp_enqueue_style(
      'main_style',
      get_template_directory_uri() . '/css/main.css',
      array('google-fonts_style', 'slick_theme_style'),
      '1.0'
    );
  }

  add_action('wp_enqueue_scripts', 'add_scripts');

  function add_scripts() {
    wp_deregister_script(
      'jquery'
    );

    wp_register_script(
      'jquery_script',
      'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
      array(),
      '1.0'
    );

    wp_register_script(
      'slick_script',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array(),
      '1.0'
    );

    wp_register_script(
      'masonry_script',
      'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js',
      array(),
      '1.0'
    );
    wp_register_script(
      'images_script',
      'https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js',
      array(),
      '1.0'
    );

    wp_enqueue_script(
      'main_script',
      get_template_directory_uri() . '/js/main.js',
      array('jquery_script', 'slick_script', 'masonry_script', 'images_script'),
      '1.0'
    );

  }

  add_theme_support( 'post-thumbnails' );


?>

