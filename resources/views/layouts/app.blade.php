<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Non-Profit</title>
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
                    <img src="data:image/png;base64,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" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
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
                    <li><a wire:click.prevent="setPage('home')" class="hover:text-white">Home</a></li>
                    <li><a wire:click.prevent="setPage('about')" class="hover:text-white">About</a></li>
                    <li><a wire:click.prevent="setPage('projects')" class="hover:text-white">Projects</a></li>
                    <li><a wire:click.prevent="setPage('contact')" class="hover:text-white">Contact</a></li>
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
