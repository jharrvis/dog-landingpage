<?php

if (!defined('ABSPATH')) {
    exit;
}

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
    wp_enqueue_style('snakeproof-style', get_stylesheet_uri(), array(), '1.0.3');

    // Tailwind
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);

    // Lottie Player
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
}
add_action('wp_enqueue_scripts', 'snakeproof_scripts');

/**
 * Kirki Customizer Configuration - loaded on init
 */
function snakeproof_kirki_config()
{
    if (!class_exists('Kirki')) {
        return;
    }

    Kirki::add_config('snakeproof_config', array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ));

    // --- Panel: General Settings ---
    Kirki::add_panel('snakeproof_general', array(
        'priority' => 10,
        'title' => 'Landing Page Content',
        'description' => 'Manage the content for the landing page sections.',
    ));

    // --- Section: Hero ---
    Kirki::add_section('hero_section', array(
        'title' => 'Hero Section',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_line1',
        'label' => 'Hero Title Top',
        'section' => 'hero_section',
        'default' => 'Is your dogs',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_line2',
        'label' => 'Hero Title Middle',
        'section' => 'hero_section',
        'default' => 'life worth',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_highlight',
        'label' => 'Hero Title Highlight (Orange)',
        'section' => 'hero_section',
        'default' => '135.00?',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'textarea',
        'settings' => 'hero_subtitle',
        'label' => 'Hero Subtitle',
        'section' => 'hero_section',
        'default' => "Don't let an outdoor adventure turn into a 2am tragedy. Protect them before it's too late.",
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_btn_text',
        'label' => 'Button Text',
        'section' => 'hero_section',
        'default' => 'Secure Your Slot 🐾',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'url',
        'settings' => 'hero_btn_link',
        'label' => 'Button Link',
        'section' => 'hero_section',
        'default' => 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_video_id',
        'label' => 'YouTube Video ID',
        'section' => 'hero_section',
        'default' => 'tzA0RzvcJwU',
    ]);

    // --- Section: Facts ---
    Kirki::add_section('facts_section', array(
        'title' => 'Facts Section',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'facts_stat_1_number',
        'label' => 'Stat 1 Number',
        'section' => 'facts_section',
        'default' => '~7,000–8,000 dogs',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'textarea',
        'settings' => 'facts_stat_1_text',
        'label' => 'Stat 1 Text',
        'section' => 'facts_section',
        'default' => 'are bitten by rattlesnakes in the U.S. every year',
    ]);

    // --- Section: Vet Bill Reality ---
    Kirki::add_section('vet_section', array(
        'title' => 'Vet Bill Reality',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'vet_treatment_price',
        'label' => 'Average Treatment Price',
        'section' => 'vet_section',
        'default' => '$3,000–$7,000',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'vet_severe_price',
        'label' => 'Severe Case Price',
        'section' => 'vet_section',
        'default' => '$10,000–$15,000+',
    ]);

    // --- Section: CTA ---
    Kirki::add_section('cta_section', array(
        'title' => 'CTA & Pricing',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_headline_start',
        'label' => 'Headline Line 1',
        'section' => 'cta_section',
        'default' => 'The first 50 dogs get in at:',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_price_main',
        'label' => 'Main Price (Whole)',
        'section' => 'cta_section',
        'default' => '135',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_price_decimal',
        'label' => 'Price Decimal',
        'section' => 'cta_section',
        'default' => '.00',
    ]);

    // --- Section: Contact ---
    Kirki::add_section('contact_section', array(
        'title' => 'Contact Info',
        'panel' => 'snakeproof_general',
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'contact_email',
        'label' => 'Email Address',
        'section' => 'contact_section',
        'default' => 'info@snakeproofurpup.com',
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'contact_phone',
        'label' => 'Phone Number',
        'section' => 'contact_section',
        'default' => '+1-202-555-0137',
    ]);
}
add_action('init', 'snakeproof_kirki_config');
