<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function snakeproof_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'snakeproof_setup');

/**
 * Enqueue scripts and styles.
 */
function snakeproof_scripts()
{
    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Inter:wght@400;600;700&display=swap', array(), null);

    // AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');

    // Main Style
    wp_enqueue_style('snakeproof-style', get_stylesheet_uri(), array(), '1.0.4');

    // Tailwind
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);

    // Lottie Player
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
}
add_action('wp_enqueue_scripts', 'snakeproof_scripts');

/**
 * Kirki Customizer Configuration
 */
function snakeproof_kirki_config()
{
    // Only run if Kirki is available
    if (!class_exists('Kirki')) {
        return;
    }

    Kirki::add_config('snakeproof_config', array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ));

    // Panel
    Kirki::add_panel('snakeproof_general', array(
        'priority' => 10,
        'title' => 'Landing Page Content',
    ));

    // Hero Section
    Kirki::add_section('hero_section', array(
        'title' => 'Hero Section',
        'panel' => 'snakeproof_general',
    ));

    $hero_fields = array(
        'hero_title_line1' => array('text', 'Hero Title Top', 'Is your dogs'),
        'hero_title_line2' => array('text', 'Hero Title Middle', 'life worth'),
        'hero_title_highlight' => array('text', 'Hero Title Highlight', '135.00?'),
        'hero_subtitle' => array('textarea', 'Hero Subtitle', "Don't let an outdoor adventure turn into a 2am tragedy."),
        'hero_btn_text' => array('text', 'Button Text', 'Secure Your Slot 🐾'),
        'hero_btn_link' => array('url', 'Button Link', 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026'),
        'hero_video_id' => array('text', 'YouTube Video ID', 'tzA0RzvcJwU'),
    );

    foreach ($hero_fields as $setting => $config) {
        Kirki::add_field('snakeproof_config', array(
            'type' => $config[0],
            'settings' => $setting,
            'label' => $config[1],
            'section' => 'hero_section',
            'default' => $config[2],
        ));
    }

    // Facts Section
    Kirki::add_section('facts_section', array(
        'title' => 'Facts Section',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'facts_stat_1_number',
        'label' => 'Stat 1 Number',
        'section' => 'facts_section',
        'default' => '~7,000–8,000 dogs',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'textarea',
        'settings' => 'facts_stat_1_text',
        'label' => 'Stat 1 Text',
        'section' => 'facts_section',
        'default' => 'are bitten by rattlesnakes in the U.S. every year',
    ));

    // Vet Section
    Kirki::add_section('vet_section', array(
        'title' => 'Vet Bill Reality',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'vet_treatment_price',
        'label' => 'Average Treatment',
        'section' => 'vet_section',
        'default' => '$3,000–$7,000',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'vet_severe_price',
        'label' => 'Severe Cases',
        'section' => 'vet_section',
        'default' => '$10,000–$15,000+',
    ));

    // CTA Section
    Kirki::add_section('cta_section', array(
        'title' => 'CTA & Pricing',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'cta_price_main',
        'label' => 'Price',
        'section' => 'cta_section',
        'default' => '135',
    ));

    // Contact Section
    Kirki::add_section('contact_section', array(
        'title' => 'Contact Info',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'contact_email',
        'label' => 'Email',
        'section' => 'contact_section',
        'default' => 'info@snakeproofurpup.com',
    ));

    Kirki::add_field('snakeproof_config', array(
        'type' => 'text',
        'settings' => 'contact_phone',
        'label' => 'Phone',
        'section' => 'contact_section',
        'default' => '+1-202-555-0137',
    ));
}
add_action('init', 'snakeproof_kirki_config');

/**
 * Helper function to get theme mod with default
 */
function snakeproof_get($setting, $default = '')
{
    return get_theme_mod($setting, $default);
}
