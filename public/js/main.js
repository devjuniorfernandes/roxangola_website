document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const navLogo = document.getElementById('nav-logo');
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    // Sticky Navbar & Logo switch
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-md');
            navbar.classList.remove('bg-transparent');
            // Change to black logo when background is white
            navLogo.src = 'assets/logo.svg';
            // Change nav links text to black
            document.querySelectorAll('#nav-links a').forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-black');
            });
            // Change burger menu bars to black
            document.querySelectorAll('#mobile-menu .bar').forEach(bar => {
                bar.classList.remove('bg-white');
                bar.classList.add('bg-black');
            });
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white', 'shadow-md');
            // Revert to white logo
            navLogo.src = 'assets/logo-w.svg';
            // Revert nav links text to white
            document.querySelectorAll('#nav-links a').forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-black');
            });
            // Revert burger menu bars to white
            document.querySelectorAll('#mobile-menu .bar').forEach(bar => {
                bar.classList.add('bg-white');
                bar.classList.remove('bg-black');
            });
        }
    });

    // Mobile Menu Toggle
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const closeSidebarBtn = document.getElementById('close-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');

    function openSidebar() {
        sidebarOverlay.classList.remove('hidden');
        // trigger reflow
        void sidebarOverlay.offsetWidth;
        sidebarOverlay.classList.remove('opacity-0');
        sidebarOverlay.classList.add('opacity-100');
        
        mobileSidebar.classList.remove('-translate-x-full');
        mobileSidebar.classList.add('translate-x-0');
    }

    function closeSidebar() {
        sidebarOverlay.classList.remove('opacity-100');
        sidebarOverlay.classList.add('opacity-0');
        
        mobileSidebar.classList.remove('translate-x-0');
        mobileSidebar.classList.add('-translate-x-full');

        setTimeout(() => {
            sidebarOverlay.classList.add('hidden');
        }, 300);
    }

    mobileMenuBtn.addEventListener('click', openSidebar);
    closeSidebarBtn.addEventListener('click', closeSidebar);
    sidebarOverlay.addEventListener('click', closeSidebar);

    // Simple Tab Switching logic (Explore Models)
    const tabs = document.querySelectorAll('.tab-btn');
    const carImage = document.getElementById('car-image');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            // Remove active class from all
            tabs.forEach(t => {
                t.classList.remove('active', 'text-black');
                t.classList.add('text-gray-400');
            });
            // Add active class to clicked
            tab.classList.add('active', 'text-black');
            tab.classList.remove('text-gray-400');
            
            // Add a subtle fade effect for image
            carImage.style.opacity = '0';
            setTimeout(() => {
                carImage.style.opacity = '1';
            }, 300);
        });
    });

    // Intersection Observer for Scroll Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const animateElements = document.querySelectorAll('.animate-up');
    animateElements.forEach(el => {
        observer.observe(el);
    });

    // Mobile Sidebar Accordion logic
    const accordionBtns = document.querySelectorAll('.accordion-btn');
    accordionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const submenu = btn.nextElementSibling;
            const icon = btn.querySelector('svg');
            
            // Toggle hidden class on the submenu
            submenu.classList.toggle('hidden');
            submenu.classList.toggle('flex');
            
            // Rotate the chevron icon
            if (submenu.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});
