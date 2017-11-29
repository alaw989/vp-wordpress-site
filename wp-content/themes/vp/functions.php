<?php
  // Regiester Nav Walker class_alias
  require_once('wp-bootstrap-navwalker.php');

  // Theme Support
  function wpb_theme_setup() {
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme', 'wpb_theme_setup');

  function enqueue_theme_css()
  {
      wp_enqueue_style('style', get_template_directory_uri() . '/app/css/normalize.css');
      wp_enqueue_style('style', get_template_directory_uri() . '/app/css/styles.css');
      wp_enqueue_style('style', get_template_directory_uri() . '/app/css/grid12.css');
      wp_enqueue_style('style', get_template_directory_uri() . '/app/css/main.css');
  }

    add_action( 'wp_enqueue_scripts', 'enqueue_theme_css' );

    function wpb_init_widgets($id) {
      register_sidebar(array(
        'name' => 'Box1',
        'id'   => 'box1',
        'before_widget' => '<div class="services-box">',
        'after_widget'  => '</div>', 
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets');

      function wpb_init_widgets2($id) {
      register_sidebar(array(
        'name' => 'Box2',
        'id'   => 'box2',
        'before_widget' => '<div class="services-box">',
        'after_widget'  => '</div>', 
        'before_title'  => '<h3 class="services-title">',
        'after_title'   => '</h3>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets2');

      function wpb_init_widgets3($id) {
      register_sidebar(array(
        'name' => 'Box3',
        'id'   => 'box3',
        'before_widget' => '<div class="masthead-title">',
        'after_widget'  => '</div>', 
        'before_title'  => '<h1>',
        'after_title'   => '</h1>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets3');

    function wpb_init_widgets4($id) {
      register_sidebar(array(
        'name' => 'Box4',
        'id'   => 'Box4',
        'before_widget' => '<div class="about-section__content">',
        'after_widget'  => '</div>', 
        'before_title'  => '<h1>',
        'after_title'   => '</h1>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets4');

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
