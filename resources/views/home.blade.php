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
                <div class="absolute left-4 lg:left-[120px] top-[110px] w-full max-w-[486px] z-10">
                    <!-- UI/UX Designer Badge -->
                    <div class="text-[#FDC435] font-bold text-xl font-nunito uppercase mb-3">
                        UI/UX DESIGNER
                    </div>

                    <!-- Main Title -->
                    <h1
                        class="text-[#25282B] font-bold text-4xl sm:text-5xl lg:text-[64px] font-playfair leading-[120%] mb-8">
                        Hello, my name is Madelyn Torff
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-[#828282] text-lg lg:text-2xl font-nunito leading-[150%] mb-8">
                        Short text with details about you, what you do or your professional career. You can add more
                        information on the about page.
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
                    class="absolute right-[120px] top-[110px] w-[500px] h-[500px] hidden lg:flex items-center justify-center">
                    <div
                        class="w-[400px] h-[400px] rounded-full overflow-hidden bg-[#FDC435] shadow-lg flex items-center justify-center p-4">
                        <img src="https://cdn.builder.io/api/v1/image/assets%2F82b2b2b3942e4a32a2bef06e50229f2a%2Fab94b7b145834a3986ab352478e9ec74?format=webp&width=800"
                            alt="Madelyn Torff" class="w-full h-full object-cover rounded-full" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 lg:py-[200px]">
            <div class="max-w-[992px] mx-auto px-4">
                <!-- Section Title -->
                <div class="text-center mb-20">
                    <h2 class="text-[#25282B] text-center text-4xl lg:text-5xl font-bold font-playfair leading-[150%] mb-1">
                        Projects
                    </h2>
                    <div class="w-25 h-1 rounded-sm bg-[#FDC435] mx-auto"></div>
                </div>

                <div class="space-y-20">
                    <!-- Project 1 -->
                    <div
                        class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden">
                        <div class="lg:w-1/2 p-8 lg:p-12 flex items-center">
                            <div class="w-full max-w-[407px]">
                                <h3
                                    class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                    Project Name
                                </h3>
                                <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                    I created this personal project in order to show how to create an interface in Figma
                                    using a portfolio as an example.
                                </p>
                                <button
                                    class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                    View Project
                                </button>
                            </div>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2c389e556e50e7e5c3b77936550c24acebaac414?width=992"
                                alt="Project 1" class="w-full h-64 lg:h-[524px] object-cover" />
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div
                        class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden">
                        <div class="lg:w-1/2 order-2 lg:order-1">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/28d67c2acffffd47551654c38d2e5175a51d7116?width=992"
                                alt="Project 2" class="w-full h-64 lg:h-[524px] object-cover" />
                        </div>
                        <div class="lg:w-1/2 p-8 lg:p-12 flex items-center order-1 lg:order-2">
                            <div class="w-full max-w-[407px]">
                                <h3
                                    class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                    Project Name
                                </h3>
                                <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                    What was your role, your deliverables, if the project was personal, freelancing.
                                </p>
                                <button
                                    class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                    View Project
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div
                        class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0px_6px_64px_0px_rgba(112,144,176,0.10)] overflow-hidden">
                        <div class="lg:w-1/2 p-8 lg:p-12 flex items-center">
                            <div class="w-full max-w-[407px]">
                                <h3
                                    class="text-[#25282B] text-2xl lg:text-[40px] font-bold font-playfair leading-[150%] mb-6">
                                    Project Name
                                </h3>
                                <p class="text-[#828282] text-lg font-nunito leading-[150%] mb-6">
                                    You can also add in this description the type of the project, if it was for web, mobile,
                                    electron.
                                </p>
                                <button
                                    class="border border-[#25282B] text-[#25282B] px-6 py-2 rounded-3xl font-roboto text-lg hover:bg-[#25282B] hover:text-white transition-colors">
                                    View Project
                                </button>
                            </div>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d149830d8618c2a87eebf7b58745c9438c306db4?width=992"
                                alt="Project 3" class="w-full h-64 lg:h-[524px] object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection

</html>
