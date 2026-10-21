<?php

function stage_portfolio_setup() {
    // Zorgt voor de titel in de tab
    add_theme_support('title-tag');
    
    // Zorgt voor uitgelichte afbeeldingen
    add_theme_support('post-thumbnails');

    // DIT is de belangrijke regel voor jouw menu:
    register_nav_menus(array(
        'primary-menu' => __('Primaire Navigatie', 'stage-portfolio'),
    ));
}
add_action('after_setup_theme', 'stage_portfolio_setup');

function stage_portfolio_scripts() {
    wp_enqueue_style('stage-portfolio-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'stage_portfolio_scripts');