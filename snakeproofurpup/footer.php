<!-- Footer -->
<footer class="bg-dark text-white pt-20 pb-10">
    <div class="container mx-auto px-10">
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-8 h-8 bg-orange-custom rounded flex items-center justify-center text-white">🐾
                    </div>
                    <span class="font-display text-2xl font-bold tracking-tight">SnakeProofUrPup</span>
                </div>
                <p class="text-gray-400 max-w-sm">
                    Specialized training to keep your best friend safe from wilderness hazards.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase tracking-widest text-orange-custom text-sm">Links</h4>
                <ul class="space-y-4 text-gray-400">
                    <li><a href="#" class="hover:text-white">About Us</a></li>
                    <li><a href="#" class="hover:text-white">Locations</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase tracking-widest text-orange-custom text-sm">Contact Us</h4>
                <p class="text-gray-400 mb-2">
                    <?php echo get_theme_mod('contact_email', 'info@snakeproofurpup.com'); ?>
                </p>
                <p class="text-gray-400">
                    <?php echo get_theme_mod('contact_phone', '+1-202-555-0137'); ?>
                </p>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-10 text-center text-gray-500 text-sm">
            <p>&copy;
                <?php echo date('Y'); ?> SnakeProofUrPup Aversion Training. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        animation: marquee 25s linear infinite;
    }

    /* Scroll to Top Button */
    #scrollTopBtn {
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        transform: translateY(20px);
        box-shadow: 0 4px 14px rgba(255, 85, 0, 0.4);
    }

    #scrollTopBtn.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
</style>

<!-- Scroll to Top Button -->
<button id="scrollTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
    class="fixed bottom-8 right-8 bg-orange-custom text-white w-12 h-12 rounded-full flex items-center justify-center z-50 hover:bg-white hover:text-orange-custom border-2 border-orange-custom cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
        <path d="m18 15-6-6-6 6" />
    </svg>
</button>

<script>
    // Show/Hide Scroll to Top Button
    const scrollBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });

    // Hide Loader on Window Load
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        loader.classList.add('opacity-0', 'pointer-events-none');
        setTimeout(() => {
            loader.remove(); // Remove from DOM after fade out
            document.body.classList.remove('overflow-hidden');
            document.body.classList.add('overflow-x-hidden');
        }, 500);
    });


    // Enhanced Lottie Fallback Handler with Debugging
    const lottiePlayer = document.querySelector('lottie-player');
    const fallbackSpinner = document.getElementById('fallback-spinner');

    // console.log('Lottie Debug - Player element:', lottiePlayer);
    // console.log('Lottie Debug - Fallback element:', fallbackSpinner);

    if (lottiePlayer) {
        // Listen for Lottie load event
        lottiePlayer.addEventListener('load', () => {
            // console.log('Lottie animation loaded successfully!');
        });

        // Listen for Lottie error event
        lottiePlayer.addEventListener('error', (e) => {
            console.error('Lottie failed to load:', e);
            // console.log('Showing fallback spinner...');
            lottiePlayer.style.display = 'none';
            fallbackSpinner.style.display = 'block';
        });

        // Timeout fallback - if Lottie doesn't load in 2 seconds, show fallback
        setTimeout(() => {
            // Check if Lottie has actually loaded
            if (!lottiePlayer.getLottie || typeof lottiePlayer.getLottie !== 'function') {
                // console.warn('Lottie player not initialized after 2s, showing fallback');
                lottiePlayer.style.display = 'none';
                fallbackSpinner.style.display = 'block';
            } else {
                // console.log('Lottie player initialized successfully');
            }
        }, 2000);
    } else {
        console.error('Lottie player element not found!');
        if (fallbackSpinner) {
            fallbackSpinner.style.display = 'block';
        }
    }
</script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });
</script>

<?php wp_footer(); ?>
</body>

</html>