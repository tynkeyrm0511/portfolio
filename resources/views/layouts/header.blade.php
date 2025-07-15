<!-- Header Component - Pixel Perfect Figma Design -->
<header class="header-wrapper flex w-full h-14 py-3 px-4 sm:px-8 xl:px-[120px] justify-between items-center relative z-50 bg-transparent">

    <!-- Brand Name -->
    <div class="brand-container flex-shrink-0">
        <span class="text-[#25282B] font-[Comfortaa] font-bold text-lg leading-[180%]">
            Syntax Ngo
        </span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="desktop-navigation hidden lg:flex items-start gap-12">
        <div class="nav-tab flex flex-col items-start gap-[2px]">
            <a href="#about" class="nav-link text-[#25282B] font-[Raleway] text-lg font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer">
                About
            </a>
        </div>
        
        <div class="nav-tab flex flex-col items-start gap-[2px]">
            <a href="#projects" class="nav-link text-[#25282B] font-[Raleway] text-lg font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer">
                Projects
            </a>
        </div>
        
        <div class="nav-tab flex flex-col items-start gap-[2px]">
            <a href="#contacts" class="nav-link text-[#25282B] font-[Raleway] text-lg font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer">
                Contacts
            </a>
        </div>
    </nav>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-btn lg:hidden text-2xl text-[#25282B] cursor-pointer p-2 hover:text-[#FDC435] transition-colors duration-200" 
            onclick="toggleMobileMenu()">
        <i class="ti ti-menu-2" id="menu-icon"></i>
    </button>

    <!-- Mobile Navigation Overlay -->
    <div id="mobile-nav" class="mobile-nav-overlay fixed inset-0 bg-white bg-opacity-95 backdrop-blur-sm z-40 lg:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex flex-col h-full">
            <!-- Mobile Header -->
            <div class="mobile-header flex justify-between items-center p-4 border-b border-gray-100">
                <span class="text-[#25282B] font-[Comfortaa] font-bold text-lg leading-[180%]">
                    Madelyn Torff
                </span>
                <button class="mobile-close-btn text-2xl text-[#25282B] cursor-pointer p-2" 
                        onclick="toggleMobileMenu()">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            
            <!-- Mobile Menu Items -->
            <nav class="mobile-nav-menu flex flex-col p-6 space-y-6">
                <a href="#about" class="mobile-nav-item text-[#25282B] font-[Raleway] text-xl font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer py-3" 
                   onclick="toggleMobileMenu()">
                    About
                </a>
                <a href="#projects" class="mobile-nav-item text-[#25282B] font-[Raleway] text-xl font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer py-3" 
                   onclick="toggleMobileMenu()">
                    Projects
                </a>
                <a href="#contacts" class="mobile-nav-item text-[#25282B] font-[Raleway] text-xl font-normal leading-7 hover:text-[#FDC435] transition-colors duration-200 cursor-pointer py-3" 
                   onclick="toggleMobileMenu()">
                    Contacts
                </a>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Menu JavaScript -->
<script>
    function toggleMobileMenu() {
        const mobileNav = document.getElementById('mobile-nav');
        const menuIcon = document.getElementById('menu-icon');
        
        if (mobileNav.classList.contains('translate-x-full')) {
            // Open menu
            mobileNav.classList.remove('translate-x-full');
            mobileNav.classList.add('translate-x-0');
            menuIcon.className = 'ti ti-x';
            document.body.style.overflow = 'hidden';
        } else {
            // Close menu
            mobileNav.classList.remove('translate-x-0');
            mobileNav.classList.add('translate-x-full');
            menuIcon.className = 'ti ti-menu-2';
            document.body.style.overflow = 'auto';
        }
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const mobileNav = document.getElementById('mobile-nav');
        const menuToggle = document.querySelector('.mobile-menu-btn');
        
        if (!mobileNav.contains(event.target) && !menuToggle.contains(event.target)) {
            if (!mobileNav.classList.contains('translate-x-full')) {
                toggleMobileMenu();
            }
        }
    });

    // Close mobile menu on window resize to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            const mobileNav = document.getElementById('mobile-nav');
            const menuIcon = document.getElementById('menu-icon');
            
            mobileNav.classList.remove('translate-x-0');
            mobileNav.classList.add('translate-x-full');
            menuIcon.className = 'ti ti-menu-2';
            document.body.style.overflow = 'auto';
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

<style>
    /* CSS Variables matching Figma design */
    :root {
        --font-high-emphasis: #25282B;
        --accent-color: #FDC435;
    }

    /* Custom font loading - ensure fonts are available */
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Raleway:wght@400&display=swap');
    
    /* Font family utilities */
    .font-comfortaa {
        font-family: 'Comfortaa', -apple-system, Roboto, Helvetica, sans-serif;
    }
    
    .font-raleway {
        font-family: 'Raleway', -apple-system, Roboto, Helvetica, sans-serif;
    }

    /* Header specific styles */
    .header-wrapper {
        /* Ensures header matches Figma design dimensions */
        min-height: 56px;
        height: 56px;
    }

    /* Navigation hover effects */
    .nav-link:hover {
        color: var(--accent-color);
    }

    /* Mobile navigation styles */
    .mobile-nav-overlay {
        backdrop-filter: blur(10px);
    }

    /* Responsive breakpoints matching Figma design */
    @media (min-width: 1440px) {
        .header-wrapper {
            padding-left: 120px;
            padding-right: 120px;
        }
    }

    /* Tablet responsive adjustments */
    @media (min-width: 768px) and (max-width: 1023px) {
        .desktop-navigation {
            gap: 2rem;
        }
    }

    /* Mobile responsive adjustments */
    @media (max-width: 767px) {
        .brand-container span {
            font-size: 16px;
        }
    }
</style>
