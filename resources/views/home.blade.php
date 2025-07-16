<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nguyen's Portfolio</title>

    <!-- External Fonts and Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Playfair+Display:wght@700&family=Raleway:wght@400&family=Nunito:wght@400;700&family=Roboto:wght@400;500&display=swap">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Laravel Vite Assets -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
@extends('layouts.app')
@section('content')

    <body>
        <!-- Hero Section -->
        <section class="w-full min-h-[629px] relative">
            <div class="max-w-[1440px] mx-auto relative">
                <!-- Hero Content - Left Side -->
                <div data-aos="fade-right" data-aos-delay="200" class="absolute left-4 lg:left-[120px] top-[110px] w-full max-w-[486px] z-10">
                    <!-- UI/UX Designer Badge -->
                    <div class="text-[#FDC435] font-bold text-xl font-nunito uppercase mb-3">
                        FULLSTACK DEVELOPER (PHP / Laravel / MERN)
                    </div>

                    <!-- Main Title -->
                    <h1
                        class="text-[#25282B] font-bold text-4xl sm:text-5xl lg:text-[64px] font-playfair leading-[120%] mb-8">
                        Hi, I’m Ngô Hoàng Nguyên
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-[#828282] text-lg lg:text-2xl font-nunito leading-[150%] mb-8">
                        I’m a backend developer with experience in Laravel and database design. I enjoy building practical
                        web applications, from student management systems to full e-commerce websites.
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="#projects"
                            class="bg-[#FDC435] text-[#25282B] px-6 py-2 rounded-lg font-roboto text-lg hover:bg-[#E6B12F] transition-colors text-center">
                            Projects
                        </a>
                        <a href="https://linkedin.com" target="_blank"
                            class="border-2 border-[#25282B] text-[#25282B] px-6 py-2 rounded-lg font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors text-center">
                            LinkedIn
                        </a>
                    </div>
                </div>

                <!-- Hero Image - Right Side -->
                <div
                    data-aos="fade-left" data-aos-delay="200" class="absolute right-[120px] top-[110px] w-[600px] h-[600px] hidden lg:flex items-center justify-center">
                    <div
                        class="w-[600px] h-[600px] rounded-full overflow-hidden bg-[#FDC435] shadow-lg flex items-center justify-center p-4">
                        <img src="{{ asset('build/assets/avt.jpg') }}" alt="Madelyn Torff"
                            class="w-full h-full object-cover rounded-full transition duration-500 transform hover:scale-105 hover:rotate-1 hover:shadow-yellow-400" " />
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section id="projects" class="py-20 lg:py-[50px]">
                    <div class="max-w-[992px] mx-auto px-4">
                        <!-- Section Title -->
                        <div data-aos="fade-up" data-aos-delay="200" class="text-center mb-20">
                            <h2 class="text-[#25282B] text-center text-4xl lg:text-5xl font-bold font-playfair leading-[150%] mb-1">
                                Projects
                            </h2>
                            <div class="w-25 h-1 rounded-sm bg-[#FDC435] mx-auto"></div>
                        </div>

                        <div class="space-y-20">
                            <!-- Project 1 -->
                            <div
                                class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                                <div class="lg:w-1/2 p-8 lg:p-12 flex items-center">
                                    <div class="w-full max-w-[407px]">
                                        <h3
                                            class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                            Student Management System
                                        </h3>
                                        <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                            A Laravel-based system that allows admin to manage students, classes, subjects, and
                                            scores. Includes authentication via Laravel Breeze.
                                        </p>
                                        <a href="https://github.com/tynkeyrm0511/studentmanagement"
                                            class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                                <div class="lg:w-1/2">
                                    <div class="bg-[#FDC435] p-2 rounded-xl">
                                        <img src="{{ asset('build/assets/studentmanagement.png') }}" alt="Project 1"
                                            class="w-full h-64 lg:h-[524px] object-cover  rounded-xl transition-transform duration-300 hover:scale-105 hover:shadow-xl" />
                                    </div>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div
                                class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                                <div class="lg:w-1/2 order-2 lg:order-1">
                                    <div class="bg-[#FDC435] p-2 rounded-xl">
                                        <img src="{{ asset('build/assets/winform.png') }}" alt="Project 2"
                                            class="w-full h-64 lg:h-[524px] object-cover  rounded-xl transition-transform duration-300 hover:scale-105 hover:shadow-xl" />
                                    </div>
                                </div>
                                <div class="lg:w-1/2 p-8 lg:p-12 flex items-center order-1 lg:order-2">
                                    <div class="w-full max-w-[407px]">
                                        <h3
                                            class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                            Pet Care Management System & Appointment Booking Website
                                        </h3>
                                        <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                            WinForms + ASP.NET system for pet spa booking and management, with calendar scheduling
                                            and admin dashboard.
                                        </p>
                                        <a href="https://github.com/tynkeyrm0511/PetCareManagementSolution"
                                            class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div
                                class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                                <div class="lg:w-1/2 p-8 lg:p-12 flex items-center">
                                    <div class="w-full max-w-[407px]">
                                        <h3
                                            class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                            MERN Phone Store
                                        </h3>
                                        <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                            Full-stack e-commerce website with user login, product listing, cart, and admin product
                                            management.
                                        </p>
                                        <a href="https://github.com/tynkeyrm0511/WebsiteBanDienThoai"
                                            class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                                <div class="lg:w-1/2">
                                    <div class="bg-[#FDC435] p-2 rounded-xl">
                                        <img src="{{ asset('build/assets/mern.png') }}" alt="Project 1"
                                            class="w-full h-64 lg:h-[524px] object-cover  rounded-xl transition-transform duration-300 hover:scale-105 hover:shadow-xl" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                AOS.init({
                    duration: 800,
                    once: true,
                });
                </script>
            </body>
@endsection

</html>
