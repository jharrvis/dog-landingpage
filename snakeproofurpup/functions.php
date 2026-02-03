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
    wp_enqueue_style('snakeproof-style', get_stylesheet_uri());

    // Tailwind (Note: specific configuration or build step recommended for production, using CDN as requested)
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);

    // Lottie Player
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    // Add inline CSS for theme colors and styles
    $custom_css = "
        :root {
            --primary-yellow: #FFD233;
            --primary-blue: #0F2C59;
            --primary-orange: #FF5500;
            --primary-white: #F8F9FA;
            --dark: #0a0a0a;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--primary-blue);
            color: var(--primary-white);
        }

        .text-navy { color: var(--primary-blue); }
        .bg-navy { background-color: var(--primary-blue); }
        .text-orange-custom { color: var(--primary-orange); }
        .bg-orange-custom { background-color: var(--primary-orange); }

        h1, h2, h3, .font-display {
            font-family: 'Fredoka', sans-serif;
        }

        .grid-pattern {
            background-size: 40px 40px;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        }

        .bento-card {
            border-radius: 32px;
            transition: transform 0.3s ease;
        }

        .bento-card:hover {
            transform: translateY(-5px);
        }
    ";
    wp_add_inline_style('snakeproof-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'snakeproof_scripts');


/**
 * Kirki Customizer Configuration
 */
if (class_exists('Kirki')) {

    Kirki::add_config('snakeproof_config', array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ));

    // --- Panel: General Settings ---
    Kirki::add_panel('snakeproof_general', array(
        'priority' => 10,
        'title' => esc_html__('Landing Page Content', 'snakeproofurpup'),
        'description' => esc_html__('Manage the content for the landing page sections.', 'snakeproofurpup'),
    ));

    // --- Section: Hero ---
    Kirki::add_section('hero_section', array(
        'title' => esc_html__('Hero Section', 'snakeproofurpup'),
        'panel' => 'snakeproof_general',
        'priority' => 160,
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_line1',
        'label' => esc_html__('Hero Title Top', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => 'Is your dogs',
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_line2',
        'label' => esc_html__('Hero Title Middle', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => 'life worth',
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_title_highlight',
        'label' => esc_html__('Hero Title Highlight (Orange)', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => '135.00?',
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'textarea',
        'settings' => 'hero_subtitle',
        'label' => esc_html__('Hero Subtitle', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => "Don't let an outdoor adventure turn into a 2am tragedy. Protect them before it's too late.",
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_btn_text',
        'label' => esc_html__('Button Text', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => 'Secure Your Slot 🐾',
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'link',
        'settings' => 'hero_btn_link',
        'label' => esc_html__('Button Link', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026',
        'priority' => 10,
    ]);

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'hero_video_id',
        'label' => esc_html__('YouTube Video ID', 'snakeproofurpup'),
        'section' => 'hero_section',
        'default' => 'tzA0RzvcJwU',
        'priority' => 10,
    ]);

    // --- Section: Facts ---
    Kirki::add_section('facts_section', array(
        'title' => esc_html__('Facts Section', 'snakeproofurpup'),
        'panel' => 'snakeproof_general',
        'priority' => 160,
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'facts_stat_1_number',
        'label' => esc_html__('Stat 1 Number', 'snakeproofurpup'),
        'section' => 'facts_section',
        'default' => '~7,000–8,000 dogs',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'textarea',
        'settings' => 'facts_stat_1_text',
        'label' => esc_html__('Stat 1 Text', 'snakeproofurpup'),
        'section' => 'facts_section',
        'default' => 'are bitten by rattlesnakes in the U.S. every year',
    ]);

    // --- Section: Vet Bill Reality ---
    Kirki::add_section('vet_section', array(
        'title' => esc_html__('Vet Bill Reality', 'snakeproofurpup'),
        'panel' => 'snakeproof_general',
        'priority' => 160,
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'vet_treatment_price',
        'label' => esc_html__('Average Treatment Price', 'snakeproofurpup'),
        'section' => 'vet_section',
        'default' => '$3,000–$7,000',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'vet_severe_price',
        'label' => esc_html__('Severe Case Price', 'snakeproofurpup'),
        'section' => 'vet_section',
        'default' => '$10,000–$15,000+',
    ]);

    // --- Section: CTA ---
    Kirki::add_section('cta_section', array(
        'title' => esc_html__('CTA & Pricing', 'snakeproofurpup'),
        'panel' => 'snakeproof_general',
        'priority' => 160,
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_headline_start',
        'label' => esc_html__('Headline Line 1', 'snakeproofurpup'),
        'section' => 'cta_section',
        'default' => 'The first 50 dogs get in at:',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_price_main',
        'label' => esc_html__('Main Price (Whole)', 'snakeproofurpup'),
        'section' => 'cta_section',
        'default' => '135',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'cta_price_decimal',
        'label' => esc_html__('Price Decimal', 'snakeproofurpup'),
        'section' => 'cta_section',
        'default' => '.00',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'textarea',
        'settings' => 'cta_subtext',
        'label' => esc_html__('Urgency Subtext HTML', 'snakeproofurpup'),
        'section' => 'cta_section',
        'default' => 'After that, price goes to $150.<br><span class="text-red-500 font-bold">When spots are gone, they\'re gone.</span>',
    ]);

    // --- Section: Contact ---
    Kirki::add_section('contact_section', array(
        'title' => esc_html__('Contact Info', 'snakeproofurpup'),
        'panel' => 'snakeproof_general',
        'priority' => 160,
    ));

    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'contact_email',
        'label' => esc_html__('Email Address', 'snakeproofurpup'),
        'section' => 'contact_section',
        'default' => 'info@snakeproofurpup.com',
    ]);
    Kirki::add_field('snakeproof_config', [
        'type' => 'text',
        'settings' => 'contact_phone',
        'label' => esc_html__('Phone Number', 'snakeproofurpup'),
        'section' => 'contact_section',
        'default' => '+1-202-555-0137',
    ]);

}
