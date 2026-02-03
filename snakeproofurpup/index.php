<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center pt-28 lg:pt-32 grid-pattern overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Subtle Blue Glow/Gradient Right (Matches Navy Theme) -->
        <div
            class="absolute -right-[10%] -top-[10%] w-[50%] h-[80%] bg-gradient-to-b from-blue-400/10 to-transparent blur-3xl transform rotate-12">
        </div>

        <!-- Sharp Angled Shape (Flyer Style) -->
        <div
            class="absolute top-0 right-0 w-[400px] h-[400px] bg-orange-custom/10 transform translate-x-1/3 -translate-y-1/4 rotate-45">
        </div>

        <!-- Dotted Path -->
        <svg class="absolute top-0 left-0 w-full h-full z-0 opacity-40" viewBox="0 0 1440 800" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M-100 600 C 200 400, 600 900, 1500 500" stroke="#FF5500" stroke-width="3"
                stroke-dasharray="10 10" />
        </svg>
    </div>
    <div
        class="container mx-auto px-4 sm:px-6 lg:px-10 flex flex-col-reverse lg:grid lg:grid-cols-5 gap-8 lg:gap-12 items-center">
        <!-- Text Content - Shows below video on mobile -->
        <div class="z-10 lg:col-span-2 text-center lg:text-left w-full" data-aos="fade-right">
            <h1
                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight lg:leading-[0.9] mb-6 lg:mb-8 uppercase text-white">
                <?php echo get_theme_mod('hero_title_line1', 'Is your dogs'); ?> <br class="hidden sm:block">
                <?php echo get_theme_mod('hero_title_line2', 'life worth'); ?> <br class="hidden sm:block"> <span
                    class="text-orange-custom">
                    <?php echo get_theme_mod('hero_title_highlight', '135.00?'); ?>
                </span>
            </h1>
            <p class="text-lg sm:text-xl text-gray-300 mb-8 lg:mb-10 max-w-lg mx-auto lg:mx-0" data-aos="fade-up"
                data-aos-delay="200">
                <?php echo get_theme_mod('hero_subtitle', "Don't let an outdoor adventure turn into a 2am tragedy. Protect them before it's too late."); ?>
            </p>
            <div class="flex justify-center lg:justify-start gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo get_theme_mod('hero_btn_link', 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026'); ?>"
                    class="bg-orange-custom text-white px-8 sm:px-10 py-4 sm:py-5 rounded-2xl font-display text-lg sm:text-xl font-bold shadow-[6px_6px_0px_0px_rgba(255,255,255,0.2)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all inline-block">
                    <?php echo get_theme_mod('hero_btn_text', 'Secure Your Slot 🐾'); ?>
                </a>
            </div>
        </div>
        <!-- Video - Shows above text on mobile -->
        <div class="relative flex flex-col items-center lg:items-end justify-center w-full lg:col-span-3"
            data-aos="fade-left" data-aos-delay="200">

            <!-- Header (Visible on Mobile & Desktop) -->
            <div class="text-center lg:text-right mb-4 lg:mb-2 w-full">
                <h1
                    class="text-4xl sm:text-5xl lg:text-5xl font-bold uppercase text-white leading-none font-display text-shadow-lg">
                    Rattlesnake<br>Avoidance
                </h1>
                <p class="text-orange-custom text-2xl sm:text-3xl lg:text-2xl mt-1 font-bold font-display">For your
                    dog</p>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-orange-custom/10 rounded-full blur-3xl pointer-events-none">
            </div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl pointer-events-none">
            </div>

            <!-- Floating Paw Icons -->
            <div class="absolute top-10 right-10 text-4xl opacity-20 animate-bounce"
                style="animation-delay: 0s; animation-duration: 3s;">🐾</div>
            <div class="absolute bottom-20 left-5 text-3xl opacity-15 animate-bounce"
                style="animation-delay: 1s; animation-duration: 4s;">🐾</div>
            <div class="absolute top-1/2 right-5 text-2xl opacity-10 animate-bounce"
                style="animation-delay: 2s; animation-duration: 5s;">🐾</div>

            <!-- YouTube Video Placeholder -->
            <div class="relative z-10 w-full aspect-video rounded-3xl overflow-hidden shadow-2xl bg-dark"
                style="border: 4px solid rgba(255, 85, 0, 0.3);">
                <?php
                $video_id = get_theme_mod('hero_video_id', 'tzA0RzvcJwU');
                ?>
                <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>?autoplay=1&mute=1&rel=0&loop=1&playlist=<?php echo esc_attr($video_id); ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section (Grid Bento) -->
<section id="facts" class="py-24 bg-[#0F2C59] relative overflow-hidden">
    <!-- Background Rattlesnake Sign (Watermark) -->
    <div class="absolute -right-48 -top-24 pointer-events-none opacity-10 z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rattlesnakes-sign.webp" alt=""
            class="w-[800px] rotate-12 transform grayscale">
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
        <div class="grid lg:grid-cols-3 gap-8 items-end">
            <!-- Content Column (Left) -->
            <div class="lg:col-span-2">
                <div
                    class="flex flex-col lg:flex-row justify-between items-center lg:items-end mb-12 lg:mb-16 text-center lg:text-left">
                    <div>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold uppercase mb-4 text-white">Rattlesnake
                            bite <br class="hidden sm:block"> <span class="text-orange-custom">facts</span></h2>
                        <p class="text-gray-300 max-w-md mx-auto lg:mx-0">Key figures every dog owner should know.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bento-card bg-white p-10 border-4 border-white shadow-xl" data-aos="zoom-in"
                        data-aos-delay="100">
                        <span class="text-4xl mb-4 block">⚠️</span>
                        <h3 class="text-2xl font-bold mb-4 uppercase text-[#0F2C59]">
                            <?php echo get_theme_mod('facts_stat_1_number', '~7,000–8,000 dogs'); ?>
                        </h3>
                        <p class="text-lg opacity-80 text-gray-700">
                            <?php echo get_theme_mod('facts_stat_1_text', 'are bitten by rattlesnakes in the U.S. every year'); ?>
                        </p>
                    </div>
                    <div class="bento-card bg-orange-custom p-10 border-4 border-orange-custom shadow-xl text-white"
                        data-aos="zoom-in" data-aos-delay="200">
                        <h3 class="text-4xl font-bold mb-2">3-4x</h3>
                        <p class="font-semibold uppercase text-sm text-white/80 mb-4">Higher Risk</p>
                        <p>Dogs are 3–4x more likely to be bitten than humans</p>
                    </div>
                    <div class="bento-card bg-[#1a3b6e] p-10 border-4 border-[#1a3b6e] shadow-xl text-white"
                        data-aos="zoom-in" data-aos-delay="300">
                        <h3 class="text-2xl font-bold mb-4 uppercase text-orange-400">Peak Season</h3>
                        <p class="text-lg">Most bites happen March–October, peak in May–June</p>
                    </div>
                    <div class="bento-card bg-white p-10 border-4 border-white shadow-xl" data-aos="zoom-in"
                        data-aos-delay="400">
                        <h3 class="text-2xl font-bold mb-4 uppercase text-red-600">10–20% Mortality</h3>
                        <p class="text-lg text-gray-700">Without fast treatment, mortality can reach 10–20%</p>
                    </div>
                </div>
            </div>

            <!-- Image Column (Right) -->
            <div class="lg:col-span-1 relative h-full min-h-[400px] lg:min-h-[650px] block" data-aos="fade-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tom-mcgovern.webp" alt="Tom McGovern"
                    class="absolute bottom-0 right-0 w-full max-w-[400px] lg:max-w-[850px] object-contain drop-shadow-2xl mx-auto lg:mx-0 left-0 lg:left-auto">
            </div>
        </div>
    </div>
</section>

<!-- Vet Bill Section - Modern Redesign -->
<section id="reality" class="py-24 bg-gradient-to-br from-[#0a192f] to-[#0F2C59] relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-orange-custom/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
        <div class="bg-white rounded-[40px] overflow-hidden shadow-2xl grid lg:grid-cols-2" data-aos="fade-up">

            <!-- LEFT SIDE - White Background (Vet Bill Reality) -->
            <div class="p-6 sm:p-8 lg:p-12 xl:p-16 bg-gradient-to-br from-white to-gray-50">
                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6 lg:mb-8 uppercase text-[#0F2C59] text-center lg:text-left">
                    Vet Bill Reality</h2>

                <!-- Dog Snake Bite Image -->
                <div class="mb-8 rounded-3xl overflow-hidden shadow-xl border-4 border-gray-200" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vet-bill/dog_snake_bite.png"
                        alt="Dog with rattlesnake bite" class="w-full h-full object-cover aspect-square">
                </div>

                <!-- Cost Breakdown -->
                <div class="space-y-4">
                    <!-- Average Treatment -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg border-2 border-gray-100 hover:border-orange-500 transition-all duration-300"
                        data-aos="fade-right" data-aos-delay="300">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-[#0F2C59]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Average
                                    Treatment</p>
                                <p class="text-2xl font-bold text-[#0F2C59]">
                                    <?php echo get_theme_mod('vet_treatment_price', '$3,000–$7,000'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Severe Cases -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg border-2 border-gray-100 hover:border-red-500 transition-all duration-300"
                        data-aos="fade-right" data-aos-delay="400">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Severe Cases
                                </p>
                                <p class="text-2xl font-bold text-red-600">
                                    <?php echo get_theme_mod('vet_severe_price', '$10,000–$15,000+'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Footnote -->
                    <div class="pt-4 px-2" data-aos="fade-up" data-aos-delay="500">
                        <p class="text-sm text-gray-500 italic">
                            *Antivenom alone: $400–$800 per vial (many dogs need multiple)
                        </p>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE - Orange Background (The Hard Question) -->
            <div class="p-6 sm:p-8 lg:p-12 xl:p-16 bg-orange-custom text-white flex flex-col justify-between">
                <!-- Happy Dog Image -->
                <div class="mb-8 rounded-3xl overflow-hidden shadow-xl border-4 border-white" data-aos="zoom-in"
                    data-aos-delay="300">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vet-bill/happy_healthy_dog.png"
                        alt="Happy healthy dog" class="w-full h-full object-cover aspect-square">
                </div>

                <!-- The Hard Question -->
                <div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6 lg:mb-8 text-white uppercase tracking-tight text-center lg:text-left"
                        data-aos="fade-left" data-aos-delay="400">
                        The Hard Question
                    </h3>

                    <ul class="space-y-6 mb-10">
                        <li class="flex gap-4 items-start" data-aos="fade-left" data-aos-delay="500">
                            <div
                                class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg leading-relaxed">
                                Is $135 worth your dog's life?
                            </p>
                        </li>
                        <li class="flex gap-4 items-start" data-aos="fade-left" data-aos-delay="600">
                            <div
                                class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg leading-relaxed">
                                Is $135 worth avoiding a $7,000 emergency bill?
                            </p>
                        </li>
                        <li class="flex gap-4 items-start" data-aos="fade-left" data-aos-delay="700">
                            <div
                                class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg leading-relaxed">
                                Is $135 worth not having to decide how
                                much your dog is "worth" at 2am?
                            </p>
                        </li>
                    </ul>

                    <!-- CTA Button -->
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="800">
                        <a href="https://calendly.com/olk9training/rattlesnake-avoidance-course-2026"
                            class="inline-block bg-white text-[#0F2C59] px-10 py-5 rounded-full font-bold text-xl uppercase tracking-wide hover:bg-[#0F2C59] hover:text-white transition-all duration-300 shadow-2xl hover:shadow-none transform hover:scale-105">
                            Protect Your Dog Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-24 bg-[#0F2C59] relative">
    <div class="container mx-auto px-10">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold uppercase mb-4 text-white">Happy <span
                    class="text-orange-custom italic">Graduates</span></h2>
            <p class="text-gray-300">Join thousands of safe and happy dogs.</p>
        </div>

        <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
            <?php
            $gallery_images = [
                '527fe90f-ca58-466b-ade7-44e855193a5a.jpg',
                '9a62ce56-acf4-4448-adb6-3251b13fc663.jpg',
                'ad6b39d5-3266-4e64-abfe-8f598bcaf91e.jpg',
                'cd76fe32-3ff4-4293-8ac6-142c937c31fb.jpg',
                'd3d4c750-7ee4-4773-b37b-8e0bf697d73c.jpg',
                'fa95ccdb-1d2a-437b-a5e1-76f526e25359.jpg',
                'fd06ddf4-b189-4d45-a63a-894569fb4c9d.jpg'
            ];
            foreach ($gallery_images as $index => $img): ?>
                <div class="break-inside-avoid rounded-3xl overflow-hidden border-4 border-white shadow-xl hover:scale-[1.02] transition-transform duration-300"
                    data-aos="fade-up" <?php echo $index > 0 ? 'data-aos-delay="' . ($index * 100) . '"' : ''; ?>>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/<?php echo $img; ?>"
                        alt="Dog Training Graduate" class="w-full h-auto">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Regret Section (Testimonial Style) -->
    <section id="regret" class="py-24 bg-[#0F2C59]">
        <div class="container mx-auto px-10">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold uppercase mb-4 text-white">Why people <span
                        class="text-orange-custom italic">regret waiting</span></h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-10 rounded-[40px] border-none bg-white shadow-lg">
                    <div class="text-5xl mb-6 text-orange-custom">“</div>
                    <p class="text-xl font-medium italic mb-6 text-[#0F2C59]">"I didn’t think it would happen to my
                        dog"
                    </p>
                </div>
                <div class="p-10 rounded-[40px] border-none bg-[#1a3b6e] text-white shadow-lg">
                    <div class="text-5xl mb-6 text-orange-custom">“</div>
                    <p class="text-xl font-medium italic mb-6">"We hike here all the time"</p>
                </div>
                <div class="p-10 rounded-[40px] border-none bg-white shadow-lg">
                    <div class="text-5xl mb-6 text-orange-custom">“</div>
                    <p class="text-xl font-medium italic mb-6 text-[#0F2C59]">"I was going to sign up next month"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsive CTA Pricing Section -->
    <section class="py-12 lg:py-20 bg-orange-custom relative overflow-hidden">
        <!-- Background Decoration (Subtle Pattern) -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid-pattern" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
                </pattern>
                <rect width="100" height="100" fill="url(#grid-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
            <!-- Mobile: Full Width Card, Desktop: Centered Rounded Card -->
            <div class="max-w-xl mx-auto">
                <!-- Card Container -->
                <div class="rounded-none sm:rounded-[40px] overflow-hidden" data-aos="zoom-in">

                    <!-- Header Content -->
                    <div class="p-8 sm:p-10 text-center">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#0F2C59] uppercase leading-tight mb-6 drop-shadow-sm">
                            By the time<br>you need<br>this training,<br>
                            <span class="italic text-white">it's already<br>too late.</span>
                        </h2>

                        <!-- Limited Time Badge -->
                        <div
                            class="inline-flex items-center gap-2 bg-[#0F2C59] backdrop-blur-sm px-6 py-2 rounded-full mb-8 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-white text-sm font-bold uppercase tracking-wider">Limited Time
                                Offer</span>
                        </div>
                    </div>

                    <!-- Pricing Box -->
                    <div class="bg-white mx-0 sm:mx-6 rounded-none sm:rounded-3xl p-6 sm:p-10 shadow-2xl">
                        <div
                            class="flex flex-col sm:flex-row items-center justify-between gap-6 mb-8 text-center sm:text-left">
                            <div class="w-full text-center">
                                <p class="text-[#0F2C59] text-sm lg:text-base font-bold mb-2 leading-tight mx-auto">
                                    <?php echo get_theme_mod('cta_headline_start', 'The first 50 dogs get in at:'); ?>
                                </p>
                                <div class="flex items-baseline justify-center">
                                    <span class="text-[#0F2C59] text-6xl font-black tracking-tighter">$
                                        <?php echo get_theme_mod('cta_price_main', '135'); ?>
                                    </span>
                                    <span class="text-[#0F2C59] text-3xl font-bold">
                                        <?php echo get_theme_mod('cta_price_decimal', '.00'); ?>
                                    </span>
                                </div>
                                <p class="text-gray-500 text-xs mt-2 leading-relaxed mx-auto">
                                    <?php echo get_theme_mod('cta_subtext', 'After that, price goes to $150.<br><span class="text-red-500 font-bold">When spots are gone, they\'re gone.</span>'); ?>
                                </p>
                            </div>
                        </div>



                        <!-- CTA Button -->
                        <a href="<?php echo get_theme_mod('hero_btn_link', 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026'); ?>"
                            class="block w-full bg-[#0F2C59] text-white text-center py-5 rounded-xl font-black text-xl lg:text-2xl uppercase tracking-wide hover:bg-[#1a3a6b] hover:scale-[1.02] transition-all shadow-xl hover:shadow-2xl mb-6">
                            Protect My Dog Now
                        </a>

                        <!-- Trust Indicators -->
                        <div
                            class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 text-gray-400 text-xs font-semibold uppercase tracking-wide">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                                <span>SSL Secure</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>Instant Confirmation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Urgency -->
                <p class="text-center text-white/80 text-sm font-medium mt-8 flex items-center justify-center gap-2">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
                    </span>
                    4 spots remaining for this month
                </p>
            </div>
        </div>
    </section>

    <!-- Schedule Section (Calendly) -->
    <section id="schedule" class="py-24 bg-white relative">
        <div class="container mx-auto px-10 text-center">
            <h2 class="text-4xl font-bold uppercase mb-12 text-[#0F2C59]">Select Your
                <span class="text-orange-custom">Training Experience</span>
            </h2>
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget"
                data-url="https://calendly.com/olk9training/rattlesnake-avoidance-course-2026"
                style="min-width:320px;height:700px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
        </div>
    </section>

    <?php get_footer(); ?>