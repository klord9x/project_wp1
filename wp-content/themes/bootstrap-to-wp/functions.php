<?php

function theme_styles() {

    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

    global $wp_scripts;
    wp_register_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
    wp_register_script('ie_modes_warning', 'http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js', '', '', false);
    wp_register_script('ie_viewport_bug', 'http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js', '', '', false);

    $wp_scripts->add_data('wp_enqueue_scripts', 'html5shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('wp_enqueue_scripts', 'respond_js', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('wp_enqueue_scripts', 'ie_modes_warning', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('wp_enqueue_scripts', 'ie_viewport_bug', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_js');

//add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
    register_nav_menus(
            array(
                'header-menu' => __('Header Menu')
            )
    );
}

add_action('init', 'register_theme_menus');

function create_widget($name, $id, $description) {
    register_sidebar(
            array(
                'name' => __( $name ),
                'id' => $id,
                'description' => __( $description ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            )
    );
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage');
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage');

create_widget( 'Page with sidebar', 'page', 'Displays page with sidebar on right');
create_widget( 'Blog with sidebar', 'blog', 'Displays page with sidebar and posts blog section');