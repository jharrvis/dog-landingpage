<?php
/**
 * Theme Functions
 * 
 * @package SnakeProofUrPup
 */

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
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Inter:wght@400;600;700&display=swap', array(), null);
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_style('snakeproof-style', get_stylesheet_uri(), array(), '1.0.6');
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
}
add_action('wp_enqueue_scripts', 'snakeproof_scripts');

/**
 * Native WordPress Customizer Settings (no Kirki needed)
 */
function snakeproof_customize_register($wp_customize)
{

    // Panel
    $wp_customize->add_panel('snakeproof_panel', array(
        'title' => 'Landing Page Content',
        'priority' => 10,
    ));

    // === HERO SECTION ===
    $wp_customize->add_section('snakeproof_hero', array(
        'title' => 'Hero Section',
        'panel' => 'snakeproof_panel',
    ));

    $hero_settings = array(
        'hero_title_line1' => 'Is your dogs',
        'hero_title_line2' => 'life worth',
        'hero_title_highlight' => '135.00?',
        'hero_subtitle' => "Don't let an outdoor adventure turn into a 2am tragedy. Protect them before it's too late.",
        'hero_btn_text' => 'Secure Your Slot 🐾',
        'hero_btn_link' => 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026',
        'hero_video_id' => 'tzA0RzvcJwU',
    );

    foreach ($hero_settings as $id => $default) {
        $wp_customize->add_setting($id, array(
            'default' => $default,
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => ucwords(str_replace('_', ' ', $id)),
            'section' => 'snakeproof_hero',
            'type' => 'text',
        ));
    }

    // === FACTS SECTION ===
    $wp_customize->add_section('snakeproof_facts', array(
        'title' => 'Facts Section',
        'panel' => 'snakeproof_panel',
    ));

    $wp_customize->add_setting('facts_stat_1_number', array(
        'default' => '~7,000–8,000 dogs',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('facts_stat_1_number', array(
        'label' => 'Stat 1 Number',
        'section' => 'snakeproof_facts',
        'type' => 'text',
    ));

    $wp_customize->add_setting('facts_stat_1_text', array(
        'default' => 'are bitten by rattlesnakes in the U.S. every year',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('facts_stat_1_text', array(
        'label' => 'Stat 1 Text',
        'section' => 'snakeproof_facts',
        'type' => 'textarea',
    ));

    // === VET BILL SECTION ===
    $wp_customize->add_section('snakeproof_vet', array(
        'title' => 'Vet Bill Reality',
        'panel' => 'snakeproof_panel',
    ));

    $wp_customize->add_setting('vet_treatment_price', array(
        'default' => '$3,000–$7,000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vet_treatment_price', array(
        'label' => 'Average Treatment Price',
        'section' => 'snakeproof_vet',
        'type' => 'text',
    ));

    $wp_customize->add_setting('vet_severe_price', array(
        'default' => '$10,000–$15,000+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vet_severe_price', array(
        'label' => 'Severe Cases Price',
        'section' => 'snakeproof_vet',
        'type' => 'text',
    ));

    // === CTA SECTION ===
    $wp_customize->add_section('snakeproof_cta', array(
        'title' => 'CTA & Pricing',
        'panel' => 'snakeproof_panel',
    ));

    $wp_customize->add_setting('cta_headline_start', array(
        'default' => 'The first 50 dogs get in at:',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cta_headline_start', array(
        'label' => 'Headline Line 1',
        'section' => 'snakeproof_cta',
        'type' => 'text',
    ));

    $wp_customize->add_setting('cta_price_main', array(
        'default' => '135',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cta_price_main', array(
        'label' => 'Main Price',
        'section' => 'snakeproof_cta',
        'type' => 'text',
    ));

    $wp_customize->add_setting('cta_price_decimal', array(
        'default' => '.00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cta_price_decimal', array(
        'label' => 'Price Decimal',
        'section' => 'snakeproof_cta',
        'type' => 'text',
    ));

    // === CONTACT SECTION ===
    $wp_customize->add_section('snakeproof_contact', array(
        'title' => 'Contact Info',
        'panel' => 'snakeproof_panel',
    ));

    $wp_customize->add_setting('contact_email', array(
        'default' => 'info@snakeproofurpup.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label' => 'Email Address',
        'section' => 'snakeproof_contact',
        'type' => 'email',
    ));

    $wp_customize->add_setting('contact_phone', array(
        'default' => '+1-202-555-0137',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label' => 'Phone Number',
        'section' => 'snakeproof_contact',
        'type' => 'text',
    ));
}
add_action('customize_register', 'snakeproof_customize_register');
