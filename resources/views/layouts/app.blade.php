<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Oikko- non profit organization' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" wire:navigate  class="flex items-center">
                    <img src="https://oikko-awo.com/static/media/1.d8f763dc015b0877ad8f.png" class="h-10 mr-3" alt="Oikko Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Oikko</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#"
                        class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
                        in</a>
                    <a href="#"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get
                        started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/" wire:navigate
                                class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about" wire:navigate  href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="/projects" wire:navigate  href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Projects</a>
                        </li>
                        <li>
                            <a  href="/contact" wire:navigate
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    {{ $slot }}
    @livewireScripts

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".bannerSwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!--  Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 px-4 md:px-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Logo & About -->
            <div>
                <h3 class="text-2xl font-bold mb-4">
                    <img class="w-32" src="https://oikko-awo.com/static/media/1.d8f763dc015b0877ad8f.png"
                        alt="">
                </h3>
                <p class="text-sm text-gray-300">
                    A non-profit dedicated to creating meaningful change through community-driven projects and support.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a wire:navigate href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a wire:navigate href="{{  route('about') }}"  class="hover:text-white">About</a></li>
                    <li><a wire:navigate href="{{ route('projects.index') }}" class="hover:text-white">Projects</a></li>
                    <li><a wire:navigate href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Contact</h4>
                <ul class="text-sm text-gray-300 space-y-2">
                    <li>Email: info@yourorg.org</li>
                    <li>Phone: +880 123-456-789</li>
                    <li>Address: 123 NGO Street, Dhaka, Bangladesh</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-red-600"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center text-sm text-gray-500 border-t border-gray-700 pt-6">
            © {{ date('Y') }} Oikko. All rights reserved.
        </div>
    </footer>

</body>
</html>
