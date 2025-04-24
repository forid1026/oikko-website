<main>
    <div class="w-full">
        <!-- Swiper -->
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $slider->image)  }}" class="w-full h-[600px] object-cover" alt="{{ $slider->title }}">
                </div>
                @endforeach
                
            </div>

            <!-- Pagination & Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!--  About -->
    <section class="bg-gray-100 py-16 px-4 md:px-20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- About Text -->
            <div>
                <h3 class="text-3xl font-bold text-gray-800 mb-6">{{ $about->title }}</h3>
                <div class="text-gray-600  mb-4 text-justify">
                    {!! $about->content !!}
                </div>
            </div>

            <!-- About Image -->
            <div>
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Us"
                    class="w-full rounded-2xl shadow-lg object-cover h-[400px]">
            </div>
        </div>
    </section>

    <!--  project -->
    <section class="bg-white py-16 px-4 md:px-20">
        <div class="max-w-7xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Our Projects</h2>
            <p class="text-gray-600 mt-4">
                Explore the initiatives we’ve launched to make a meaningful impact in our community.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden transition hover:shadow-xl">
                <img src="https://i.ibb.co/MGnWfZd/11752506-1600201733573841-791237990206415354-n.png" alt="Project"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Oikko Donate & Smile 15</h3>
                    <p class="text-gray-600 text-sm mb-4">Project Description</p>
                    <a href="" class="text-blue-600 hover:underline text-sm font-medium">
                        Learn more →
                    </a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden transition hover:shadow-xl">
                <img src="https://i.ibb.co/6yzrZZV/13613542-1721660314761315-4118021825931788512-o.jpg" alt="Project"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Oikko Eid for Poor Peoples 16</h3>
                    <p class="text-gray-600 text-sm mb-4">Project Description</p>
                    <a href="" class="text-blue-600 hover:underline text-sm font-medium">
                        Learn more →
                    </a>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden transition hover:shadow-xl">
                <img src="https://i.ibb.co/LNKzLfK/19477356-1879850372275641-2790745683552996462-o.jpg" alt="Project"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Oikko Eid for Poor Peoples 2017</h3>
                    <p class="text-gray-600 text-sm mb-4">Project Description</p>
                    <a href="" class="text-blue-600 hover:underline text-sm font-medium">
                        Learn more →
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--  contact -->
    <section class="bg-gray-100 py-16 px-4 md:px-20">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Contact Us</h2>
            <p class="text-gray-600 mt-4">
                Have questions or want to get involved? Reach out to us — we'd love to hear from you.
            </p>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
            <form method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                        <input type="text" name="name" required
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                        <input type="email" name="email" required
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                    <textarea name="message" rows="5" required
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mt-6 text-right">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>