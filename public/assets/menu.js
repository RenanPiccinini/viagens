function twentytwentyoneExpandSubMenu(button) {
    var expanded = button.getAttribute('aria-expanded') === 'true' || false;
    button.setAttribute('aria-expanded', !expanded);
    var submenu = button.nextElementSibling;
    if (submenu && submenu.classList.contains('sub-menu')) {
        submenu.style.display = expanded ? 'none' : 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // 1. Sub-menu toggle functionality (Estudantil dropdown)
    var toggles = document.querySelectorAll('.sub-menu-toggle');
    toggles.forEach(function(toggle) {
        var link = toggle.previousElementSibling;
        if (link && link.tagName === 'A') {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent scrolling to top
                twentytwentyoneExpandSubMenu(toggle);
            });
        }
    });

    // 2. Mobile/Tablet Hamburger Menu functionality
    var mobileMenuBtn = document.getElementById('primary-mobile-menu');
    var navContainer = document.getElementById('site-navigation');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            var expanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuBtn.setAttribute('aria-expanded', !expanded);
            
            // Toggles the class that Twenty Twenty-One CSS uses to display the mobile menu
            if (expanded) {
                document.body.classList.remove('primary-navigation-open');
                if (navContainer) {
                    navContainer.classList.remove('primary-navigation-open');
                }
            } else {
                document.body.classList.add('primary-navigation-open');
                if (navContainer) {
                    navContainer.classList.add('primary-navigation-open');
                }
            }
        });
    }

    // 3. Hero Section Background Slider logic
    var allSlides = document.querySelectorAll('.elementor-background-slideshow__slide');
    if (allSlides.length > 0) {
        var slides = [];
        
        // Swiper exports 3 copies of the slides (15 total) for infinite looping.
        // We delete the clones from the DOM so our custom slider cycles exactly 5 unique slides.
        allSlides.forEach(function(slide) {
            if (slide.className.includes('duplicate')) {
                slide.parentNode.removeChild(slide);
            } else {
                slides.push(slide);
            }
        });

        var currentSlide = 0;
        
        // Hide all slides initially except the first one
        slides.forEach(function(slide, index) {
            // Force them to stack on top of each other
            slide.style.position = 'absolute';
            slide.style.top = '0';
            slide.style.left = '0';
            slide.style.width = '100%';
            slide.style.height = '100%';
            
            // Remove the transform so it stays on screen, and handle visibility via opacity
            slide.style.transform = 'none';
            slide.style.transition = 'opacity 1s ease-in-out';
            if (index === 0) {
                slide.style.opacity = 1;
            } else {
                slide.style.opacity = 0;
            }
        });

        // Rotate every 5 seconds
        setInterval(function() {
            // Fade out current slide
            slides[currentSlide].style.opacity = 0;
            
            // Move to next slide
            currentSlide = (currentSlide + 1) % slides.length;
            
            // Fade in next slide
            slides[currentSlide].style.opacity = 1;
        }, 5000);
    }

});
