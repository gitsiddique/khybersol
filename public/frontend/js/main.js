document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('#mobile-menu-btn');
    const mobileMenu = document.querySelector('#mobile-menu');
    const closeMenuBtn = document.querySelector('#close-menu');
    const menuOverlay = document.querySelector('#menu-overlay');

    if (mobileMenuBtn && mobileMenu) {
        const openMenu = () => {
            mobileMenu.classList.add('active');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scroll
        };

        const closeMenu = () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = ''; // Restore scroll
        };

        mobileMenuBtn.addEventListener('click', openMenu);
        if (closeMenuBtn) closeMenuBtn.addEventListener('click', closeMenu);
        if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

        // Close menu on link click (excluding dropdown toggles)
        const menuLinks = mobileMenu.querySelectorAll('.menu-link:not(.has-dropdown), .mobile-submenu-link');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Mobile Services Toggle
        const servicesToggle = document.querySelector('#mobile-services-toggle');
        const servicesMenu = document.querySelector('#mobile-services-menu');

        if (servicesToggle && servicesMenu) {
            servicesToggle.addEventListener('click', (e) => {
                e.preventDefault();
                servicesToggle.classList.toggle('active');
                servicesMenu.classList.toggle('active');
            });
        }
    }

    // Set active nav link
    const currentPath = window.location.pathname.split('/').pop() || 'index.shtml';
    const navLinks = document.querySelectorAll('.nav-link, .menu-link, .mobile-submenu-link');
    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        if (linkPath === currentPath) {
            link.classList.add('active');
            // If it's a submenu link, also make parent menu active
            if (link.classList.contains('mobile-submenu-link')) {
                const submenu = link.closest('.mobile-submenu');
                const toggle = document.querySelector('#mobile-services-toggle');
                if (submenu && toggle) {
                    submenu.classList.add('active');
                    toggle.classList.add('active');
                }
            }
        } else {
            link.classList.remove('active');
        }
    });

    // GSAP Animations
    if (typeof gsap !== 'undefined') {
        // Hero Content Animation
        const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

        tl.to(".hero-tag", { opacity: 1, y: 0, duration: 0.6 })
            .to(".hero-title", { opacity: 1, y: 0, duration: 0.7 }, "-=0.4")
            .to(".hero-description", { opacity: 1, y: 0, duration: 0.6 }, "-=0.5")
            .to(".hero-actions", { opacity: 1, y: 0, duration: 0.6 }, "-=0.5")
            .to(".hero-stats", { opacity: 1, y: 0, duration: 0.6 }, "-=0.5");

        // Floating Shapes Animation
        gsap.to(".shape-1", {
            x: "30px",
            y: "50px",
            duration: 8,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        gsap.to(".shape-2", {
            x: "-50px",
            y: "-30px",
            duration: 10,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        gsap.to(".shape-3", {
            x: "40px",
            y: "-40px",
            duration: 7,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Coding Elements Floating Animation
        document.querySelectorAll('.coding-element').forEach((el, i) => {
            gsap.to(el, {
                y: "-20px",
                x: i % 2 === 0 ? "10px" : "-10px",
                duration: 3 + i,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: i * 0.5
            });
        });

        // Mouse Move parallax for shapes
        document.addEventListener("mousemove", (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 40;
            const y = (e.clientY / window.innerHeight - 0.5) * 40;

            gsap.to(".hero-shape", {
                x: x,
                y: y,
                duration: 2,
                ease: "power2.out"
            });
        });

        // Counter Animation
        if (typeof ScrollTrigger !== 'undefined') {
            gsap.utils.toArray('.counter').forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                gsap.to(counter, {
                    innerText: target,
                    duration: 2,
                    snap: { innerText: 1 },
                    scrollTrigger: {
                        trigger: counter,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });
        }
    }
});
