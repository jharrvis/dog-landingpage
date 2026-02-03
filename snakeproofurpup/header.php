<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Loading Spinner Overlay -->
    <div id="loader"
        style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 9999; background-color: #0F2C59; display: flex; align-items: center; justify-content: center; transition: opacity 0.5s ease; overflow: hidden;">
        <!-- Lottie Animation -->
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/paws-animation.json"
            background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>

        <!-- Fallback Spinner (if Lottie fails) -->
        <div id="fallback-spinner" style="display: none; position: relative; width: 80px; height: 80px;">
            <div
                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; border: 6px solid rgba(255, 85, 0, 0.3); border-radius: 50%;">
            </div>
            <div
                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; border: 6px solid #FF5500; border-top-color: transparent; border-radius: 50%; animation: spin 1s linear infinite;">
            </div>
        </div>
    </div>
    <style>
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Navigation -->
    <nav
        class="py-4 px-4 sm:px-6 lg:px-10 flex justify-between items-center bg-[#0F2C59]/95 backdrop-blur-md fixed top-0 left-0 w-full z-50 border-b border-white/10 shadow-lg">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M10 5.172a2 2 0 0 0-2.828 0L3.828 8.515a2 2 0 0 0 0 2.828L8 15.515a2 2 0 0 0 2.828 0l3.344-3.344a2 2 0 0 0 0-2.828L10 5.172Z" />
                    <path
                        d="M14 5.172a2 2 0 0 1 2.828 0l4.172 4.172a2 2 0 0 1 0 2.828L16 17.172a2 2 0 0 1-2.828 0l-1.172-1.172" />
                </svg>
            </div>
            <a href="<?php echo home_url('/'); ?>"
                class="font-display text-xl sm:text-2xl font-bold tracking-tight text-white">SnakeProofUrPup</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex gap-8 font-semibold text-sm uppercase tracking-wider text-white">
            <a href="#facts" class="hover:text-orange-500 transition-colors">Facts</a>
            <a href="#reality" class="hover:text-orange-500 transition-colors">Vet Bill Reality</a>
            <a href="#regret" class="hover:text-orange-500 transition-colors">Why Us</a>
        </div>

        <!-- Desktop Register Button -->
        <a href="<?php echo esc_url(get_theme_mod('hero_btn_link', 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026')); ?>"
            class="hidden lg:inline-block bg-orange-custom border-2 border-orange-custom px-6 py-3 rounded-full font-bold text-white hover:bg-white hover:text-[#0F2C59] transition-all shadow-lg hover:shadow-none">
            <?php echo esc_html(get_theme_mod('hero_btn_text', 'Register Now')); ?>
        </a>

        <!-- Mobile Hamburger Button -->
        <button id="mobile-menu-btn" class="lg:hidden text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </nav>

    <!-- Mobile Offside Menu -->
    <div id="mobile-menu" class="fixed inset-0 z-[100] pointer-events-none">
        <!-- Overlay -->
        <div id="mobile-menu-overlay" class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300">
        </div>

        <!-- Menu Panel -->
        <div id="mobile-menu-panel"
            class="absolute top-0 right-0 h-full w-[280px] bg-[#0F2C59] shadow-2xl transform translate-x-full transition-transform duration-300 pointer-events-auto">
            <!-- Close Button -->
            <div class="flex justify-between items-center p-6 border-b border-white/10">
                <span class="font-display text-xl font-bold text-white">Menu</span>
                <button id="mobile-menu-close" class="text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Menu Links -->
            <div class="flex flex-col p-6 gap-4">
                <a href="#facts"
                    class="mobile-menu-link text-white font-semibold text-lg py-3 px-4 rounded-lg hover:bg-white/10 transition-colors">Facts</a>
                <a href="#reality"
                    class="mobile-menu-link text-white font-semibold text-lg py-3 px-4 rounded-lg hover:bg-white/10 transition-colors">Vet
                    Bill Reality</a>
                <a href="#regret"
                    class="mobile-menu-link text-white font-semibold text-lg py-3 px-4 rounded-lg hover:bg-white/10 transition-colors">Why
                    Us</a>

                <!-- Mobile Register Button -->
                <a href="<?php echo esc_url(get_theme_mod('hero_btn_link', 'https://calendly.com/olk9training/rattlesnake-avoidance-course-2026')); ?>"
                    class="mt-4 bg-orange-custom text-center border-2 border-orange-custom px-6 py-4 rounded-full font-bold text-white hover:bg-white hover:text-[#0F2C59] transition-all shadow-lg">
                    <?php echo esc_html(get_theme_mod('hero_btn_text', 'Register Now')); ?>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuPanel = document.getElementById('mobile-menu-panel');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

        function openMobileMenu() {
            mobileMenu.classList.remove('pointer-events-none');
            mobileMenuOverlay.classList.remove('opacity-0');
            mobileMenuPanel.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenuOverlay.classList.add('opacity-0');
            mobileMenuPanel.classList.add('translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('pointer-events-none');
                document.body.style.overflow = '';
            }, 300);
        }

        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
        if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
        if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Close menu when clicking a link
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    </script>