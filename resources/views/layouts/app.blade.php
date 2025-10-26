<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Asktrix - Business Consulting Services')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
        }
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .carousel-item {
            display: none;
        }
        .carousel-item.active {
            display: block;
        }
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .carousel-slide {
            display: none;
        }
        .carousel-slide.active {
            display: block;
        }
        
        /* Navbar Dropdown Styles */
        .navbar-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
            min-width: 250px;
        }
        
        .navbar-group:hover .navbar-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .navbar-dropdown a {
            display: block;
            padding: 12px 16px;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .navbar-dropdown a:last-child {
            border-bottom: none;
        }
        
        .navbar-dropdown a:hover {
            background-color: #f9fafb;
            color: #2563eb;
            padding-left: 20px;
        }
        
        /* Payments dropdown specific styling */
        .payments-dropdown {
            right: 0;
            left: auto;
            min-width: 200px;
        }
        
        .payments-dropdown a:hover {
            color: #16a34a;
        }
        
        /* Enhanced Sticky Header Styles */
        #main-header {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            z-index: 50;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px); /* Safari */
            background-color: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid rgba(229, 231, 235, 0.8);
            transition: all 0.3s ease-in-out;
            will-change: transform, background-color, box-shadow;
        }
        
        #main-header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px); /* Safari */
        }
        
        /* Ensure body has proper scrolling */
        body {
            overflow-x: hidden;
        }
        
        /* Smooth scrolling for the entire page */
        html {
            scroll-behavior: smooth;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 1024px) {
            .navbar-dropdown {
                min-width: 200px;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background: #f9fafb;
                border-radius: 0;
                margin-top: 8px;
            }
            
            #main-header {
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px); /* Safari */
            }
            
            /* Mobile-specific text sizing */
            .mobile-text-sm {
                font-size: 0.875rem;
            }
            
            .mobile-text-xs {
                font-size: 0.75rem;
            }
            
            /* Mobile grid adjustments */
            .mobile-grid-1 {
                grid-template-columns: 1fr;
            }
            
            .mobile-grid-2 {
                grid-template-columns: repeat(2, 1fr);
            }
            
            /* Mobile spacing adjustments */
            .mobile-p-4 {
                padding: 1rem;
            }
            
            .mobile-p-6 {
                padding: 1.5rem;
            }
            
            .mobile-mb-4 {
                margin-bottom: 1rem;
            }
            
            .mobile-mb-6 {
                margin-bottom: 1.5rem;
            }
            
            /* Mobile form adjustments */
            .mobile-form-input {
                font-size: 16px; /* Prevents zoom on iOS */
            }
            
            /* Mobile button adjustments */
            .mobile-btn-full {
                width: 100%;
            }
            
            /* Mobile image adjustments */
            .mobile-img-responsive {
                width: 100%;
                height: auto;
            }
        }
        
        @media (max-width: 640px) {
            /* Small mobile adjustments */
            .sm-mobile-text-lg {
                font-size: 1.125rem;
            }
            
            .sm-mobile-text-base {
                font-size: 1rem;
            }
            
            .sm-mobile-p-3 {
                padding: 0.75rem;
            }
            
            .sm-mobile-gap-2 {
                gap: 0.5rem;
            }
            
            .sm-mobile-gap-4 {
                gap: 1rem;
            }
        }
        
        /* Mobile Navigation Styles */
        .mobile-nav-item {
            margin-bottom: 0.5rem;
        }
        
        .mobile-nav-header {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-header:hover {
            background-color: #f3f4f6;
            border-color: #d1d5db;
        }
        
        .mobile-nav-content {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .mobile-nav-icon {
            transition: transform 0.2s ease;
        }
        
        .mobile-nav-icon.rotate-180 {
            transform: rotate(180deg);
        }
        
        .mobile-nav-content a {
            border-radius: 0.25rem;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-content a:hover {
            background-color: #f8fafc;
            padding-left: 0.75rem;
        }
        
        /* Special styling for Payments section */
        .mobile-nav-item:last-child .mobile-nav-header {
            background-color: #f0fdf4;
            border-color: #bbf7d0;
        }
        
        .mobile-nav-item:last-child .mobile-nav-header:hover {
            background-color: #dcfce7;
            border-color: #86efac;
        }
    </style>
    @yield('styles')
</head>
<body class="bg-white">
    @include('layouts.header')
    
    @yield('content')
    
    @include('layouts.footer')

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top bg-blue-500 hover:bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg transition-colors" onclick="scrollToTop()">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        // Mobile menu toggle
        $(document).ready(function() {
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });
            
            // Mobile navigation accordion functionality
            window.toggleMobileNav = function(section) {
                const content = document.getElementById(section + '-content');
                const icon = document.getElementById(section + '-icon');
                
                // Close all other sections
                const allContents = document.querySelectorAll('.mobile-nav-content');
                const allIcons = document.querySelectorAll('.mobile-nav-icon');
                
                allContents.forEach(function(item) {
                    if (item.id !== section + '-content') {
                        item.classList.add('hidden');
                    }
                });
                
                allIcons.forEach(function(item) {
                    if (item.id !== section + '-icon') {
                        item.classList.remove('rotate-180');
                    }
                });
                
                // Toggle current section
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            };

            // Navbar dropdown functionality
            $('.group').hover(
                function() {
                    // Mouse enter
                    $(this).find('.group-hover\\:opacity-100').addClass('opacity-100 visible');
                    $(this).find('.group-hover\\:translate-y-0').addClass('translate-y-0');
                },
                function() {
                    // Mouse leave
                    $(this).find('.group-hover\\:opacity-100').removeClass('opacity-100 visible');
                    $(this).find('.group-hover\\:translate-y-0').removeClass('translate-y-0');
                }
            );

            // Close dropdowns when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('.group').length) {
                    $('.group-hover\\:opacity-100').removeClass('opacity-100 visible');
                    $('.group-hover\\:translate-y-0').removeClass('translate-y-0');
                }
            });

            // Prevent dropdown from closing when clicking inside
            $('.group').on('click', function(e) {
                e.stopPropagation();
            });

            // Carousel functionality
            let currentSlide = 0;
            const totalSlides = $('.carousel-slide').length;

            function showSlide(n) {
                $('.carousel-slide').removeClass('active');
                $('.carousel-slide').eq(n).addClass('active');
                $('.carousel-dot').removeClass('active');
                $('.carousel-dot').eq(n).addClass('active');
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }

            function previousSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }

            // Auto-advance carousel
            setInterval(nextSlide, 5000);

            // Dot navigation
            $('.carousel-dot').click(function() {
                currentSlide = $(this).index();
                showSlide(currentSlide);
            });

            // Scroll to top functionality
            function scrollToTop() {
                $('html, body').animate({scrollTop: 0}, 'smooth');
            }

            // Enhanced sticky header behavior
            let lastScrollTop = 0;
            let ticking = false;
            
            function updateHeader() {
                const scrollTop = $(window).scrollTop();
                const header = $('#main-header');
                
                // Add scrolled class when user scrolls down
                if (scrollTop > 10) {
                    header.addClass('scrolled');
                } else {
                    header.removeClass('scrolled');
                }
                
                // Show/hide scroll to top button
                if (scrollTop > 300) {
                    $('.scroll-to-top').fadeIn();
                } else {
                    $('.scroll-to-top').fadeOut();
                }
                
                lastScrollTop = scrollTop;
                ticking = false;
            }
            
            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(updateHeader);
                    ticking = true;
                }
            }
            
            // Use passive scroll listener for better performance
            $(window).on('scroll', requestTick);

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                const target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            // Make scrollToTop function global
            window.scrollToTop = scrollToTop;
            window.nextSlide = nextSlide;
            window.previousSlide = previousSlide;
        });
    </script>
    
    @yield('scripts')
</body>
</html>
