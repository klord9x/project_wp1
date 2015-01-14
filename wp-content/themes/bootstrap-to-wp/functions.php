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