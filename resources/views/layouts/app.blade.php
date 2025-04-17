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
