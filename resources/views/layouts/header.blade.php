    <!-- Header -->
    <header
        class="fixed top-0 left-0 w-full h-14 px-4 sm:px-8 lg:px-[120px] flex justify-between items-center z-50 bg-transparent backdrop-blur-sm">
        <!-- Brand Name -->
        <div class="text-[#25282B] font-bold text-lg font-comfortaa drop-shadow-sm">
            Syntax Ngo
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-start gap-12">
            <a href="#about"
                class="text-[#25282B] font-raleway text-lg leading-7 hover:text-[#FDC435] transition-colors cursor-pointer drop-shadow-sm">
                About
            </a>
            <a href="#projects"
                class="text-[#25282B] font-raleway text-lg leading-7 hover:text-[#FDC435] transition-colors cursor-pointer drop-shadow-sm">
                Projects
            </a>
            <a href="#contacts"
                class="text-[#25282B] font-raleway text-lg leading-7 hover:text-[#FDC435] transition-colors cursor-pointer drop-shadow-sm">
                Contacts
            </a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="lg:hidden text-2xl text-[#25282B] cursor-pointer p-2 hover:text-[#FDC435] transition-colors"
            onclick="toggleMobileMenu()">
            <i class="ti ti-menu-2" id="menu-icon"></i>
        </button>

        <!-- Mobile Navigation -->
        <div id="mobile-nav"
            class="fixed inset-0 bg-white bg-opacity-95 backdrop-blur-sm z-40 lg:hidden transform translate-x-full transition-transform duration-300">
            <div class="flex flex-col h-full">
                <div class="flex justify-between items-center p-4 border-b border-gray-100">
                    <span class="font-comfortaa font-bold text-lg text-[#25282B]">Madelyn Torff</span>
                    <button class="text-2xl text-[#25282B] p-2" onclick="toggleMobileMenu()">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <nav class="flex flex-col p-6 space-y-6">
                    <a href="#about"
                        class="text-[#25282B] font-raleway text-xl leading-7 hover:text-[#FDC435] transition-colors py-3"
                        onclick="toggleMobileMenu()">About</a>
                    <a href="#projects"
                        class="text-[#25282B] font-raleway text-xl leading-7 hover:text-[#FDC435] transition-colors py-3"
                        onclick="toggleMobileMenu()">Projects</a>
                    <a href="#contacts"
                        class="text-[#25282B] font-raleway text-xl leading-7 hover:text-[#FDC435] transition-colors py-3"
                        onclick="toggleMobileMenu()">Contacts</a>
                </nav>
            </div>
        </div>
    </header>