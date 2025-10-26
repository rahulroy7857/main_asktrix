// Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    const navMenu = document.querySelector(".nav-menu");

    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener("click", function () {
            navMenu.classList.toggle("active");
            mobileMenuToggle.classList.toggle("active");
        });
    }
});

// Scroll to Top Button
document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopBtn = document.querySelector(".scroll-to-top");

    if (scrollToTopBtn) {
        // Show/hide scroll to top button based on scroll position
        window.addEventListener("scroll", function () {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        });

        // Scroll to top when button is clicked
        scrollToTopBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }
});

// Carousel Functionality
document.addEventListener("DOMContentLoaded", function () {
    const carouselContainer = document.querySelector(".carousel-container");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const carouselSlide = document.querySelector(".carousel-slide");

    if (carouselContainer && prevBtn && nextBtn && carouselSlide) {
        let currentSlide = 0;
        const slides = [
            {
                title: "Private Limited Company",
                subtitle: "Incorporation",
                buildings: ["Asktrix", "Asktrix", "Asktrix", "Asktrix"],
                sign: "PRIVATE LIMITED",
            },
            {
                title: "Public Limited Company",
                subtitle: "Incorporation",
                buildings: ["Asktrix", "Asktrix", "Asktrix", "Asktrix"],
                sign: "PUBLIC LIMITED",
            },
            {
                title: "Partnership Firm",
                subtitle: "Registration",
                buildings: ["Asktrix", "Asktrix", "Asktrix", "Asktrix"],
                sign: "PARTNERSHIP",
            },
        ];

        function updateCarousel() {
            const slide = slides[currentSlide];
            const buildingCluster =
                carouselSlide.querySelector(".building-cluster");
            const foregroundSign =
                carouselSlide.querySelector(".foreground-sign");
            const captionTitle = document.querySelector(".caption-title");
            const captionSubtitle = document.querySelector(".caption-subtitle");

            // Update buildings
            const buildings =
                buildingCluster.querySelectorAll(".building-text");
            buildings.forEach((building, index) => {
                building.textContent = slide.buildings[index] || "Asktrix";
            });

            // Update sign
            const signTextLarge =
                foregroundSign.querySelector(".sign-text-large");
            const signTextSmall =
                foregroundSign.querySelector(".sign-text-small");
            signTextLarge.textContent = slide.sign;
            signTextSmall.textContent = slide.sign;

            // Update caption
            captionTitle.textContent = slide.title;
            captionSubtitle.textContent = slide.subtitle;
        }

        // Previous button
        prevBtn.addEventListener("click", function () {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateCarousel();
        });

        // Next button
        nextBtn.addEventListener("click", function () {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        });

        // Auto-play carousel
        setInterval(function () {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        }, 5000);

        // Initialize carousel
        updateCarousel();
    }
});

// Smooth Scrolling for Navigation Links
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link, .footer-links a");

    navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            const href = this.getAttribute("href");

            // Check if it's an internal link
            if (href && href.startsWith("#")) {
                e.preventDefault();
                const targetElement = document.querySelector(href);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            }
        });
    });
});

// Intersection Observer for Animations
document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll(
        ".service-card, .partner-logo, .bank-logo"
    );
    animatedElements.forEach((el) => {
        el.classList.add("fade-in");
        observer.observe(el);
    });

    // Observe hero content
    const heroText = document.querySelector(".hero-text");
    const heroImage = document.querySelector(".hero-image");

    if (heroText) {
        heroText.classList.add("slide-in-left");
        observer.observe(heroText);
    }

    if (heroImage) {
        heroImage.classList.add("slide-in-right");
        observer.observe(heroImage);
    }
});

// Header Scroll Effect
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");

    if (header) {
        window.addEventListener("scroll", function () {
            if (window.pageYOffset > 100) {
                header.style.backgroundColor = "rgba(26, 35, 126, 0.95)";
                header.style.backdropFilter = "blur(10px)";
            } else {
                header.style.backgroundColor = "#1a237e";
                header.style.backdropFilter = "none";
            }
        });
    }
});

// Service Card Hover Effects
document.addEventListener("DOMContentLoaded", function () {
    const serviceCards = document.querySelectorAll(".service-card");

    serviceCards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-10px) scale(1.02)";
        });

        card.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0) scale(1)";
        });
    });
});

// Form Validation (if forms are added later)
function validateForm(form) {
    const inputs = form.querySelectorAll("input[required], textarea[required]");
    let isValid = true;

    inputs.forEach((input) => {
        if (!input.value.trim()) {
            input.classList.add("error");
            isValid = false;
        } else {
            input.classList.remove("error");
        }
    });

    return isValid;
}

// Loading Animation
document.addEventListener("DOMContentLoaded", function () {
    // Add loading class to body initially
    document.body.classList.add("loading");

    // Remove loading class when page is fully loaded
    window.addEventListener("load", function () {
        document.body.classList.remove("loading");
        document.body.classList.add("loaded");
    });
});

// Touch Events for Mobile Carousel
document.addEventListener("DOMContentLoaded", function () {
    const carouselSlide = document.querySelector(".carousel-slide");

    if (carouselSlide) {
        let startX = 0;
        let endX = 0;

        carouselSlide.addEventListener("touchstart", function (e) {
            startX = e.touches[0].clientX;
        });

        carouselSlide.addEventListener("touchend", function (e) {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    // Swipe left - next slide
                    const nextBtn = document.querySelector(".next-btn");
                    if (nextBtn) nextBtn.click();
                } else {
                    // Swipe right - previous slide
                    const prevBtn = document.querySelector(".prev-btn");
                    if (prevBtn) prevBtn.click();
                }
            }
        }
    }
});

// Performance Optimization - Lazy Loading for Images
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll("img[data-src]");

    const imageObserver = new IntersectionObserver(function (entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove("lazy");
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach((img) => imageObserver.observe(img));
});

// Error Handling
window.addEventListener("error", function (e) {
    console.error("JavaScript Error:", e.error);
});

// Console Welcome Message
console.log(
    "%cWelcome to Asktrix!",
    "color: #1a237e; font-size: 20px; font-weight: bold;"
);
console.log(
    "%cOne-stop Solution For Your Entire Business",
    "color: #4CAF50; font-size: 14px;"
);
