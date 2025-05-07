<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BookHaven</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-inter">
    <!-- Bookstore Recommendation Slider with Dots and Arrows -->
    <section class="py-8 px-4 md:px-6 lg:px-8">
        <div class="container mx-auto">
            <!-- Header with title and "See All" link -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-[#161A30]">Bookstore Recommendation</h2>
                <a href="<?= base_url('recommendations') ?>" class="text-[#31304D] hover:text-[#161A30]">See All</a>
            </div>

            <!-- Slider container with navigation -->
            <div class="relative" x-data="{ activeSlide: 0, totalSlides: 3 }">
                <!-- Left navigation arrow -->
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-md z-10 hover:bg-gray-100"
                    @click="activeSlide = activeSlide === 0 ? totalSlides - 1 : activeSlide - 1"
                    aria-label="Previous slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#161A30]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Slides container -->
                <div class="overflow-hidden">
                    <!-- Slides wrapper -->
                    <div class="flex transition-transform duration-500 ease-in-out"
                        :style="`transform: translateX(-${activeSlide * 100}%)`">

                        <!-- Slide 1 -->
                        <div class="w-full flex-none">
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6 lg:gap-8">
                                <!-- Book 1 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/girl.png') ?>"
                                            alt="The Girl Who Fell Beneath the Sea"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Axie Oh</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Girl Who Fell Beneath the Sea
                                        </h3>
                                    </div>
                                </div>

                                <!-- Book 2 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/hunger-games.png') ?>"
                                            alt="The Hunger Games: The Balad of Songbirds & Snakes"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Suzanne Collins</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Hunger Games: The Balad of
                                            Songbirds & Snakes</h3>
                                    </div>
                                </div>

                                <!-- Book 3 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/secret-love.png') ?>" alt="Secrets of Divine Love"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">A. Helwa</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Secrets of Divine Love: A Spiritual
                                            Journey into the Heart of Islam</h3>
                                    </div>
                                </div>

                                <!-- Book 4 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/jjk.png') ?>" alt="Jujutsu Kaisen 11"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Gege Akutami</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Jujutsu Kaisen 11</h3>
                                    </div>
                                </div>

                                <!-- Book 5 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/solo-leveling.png') ?>" alt="Solo Leveling III"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Chugong</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Solo Leveling III</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 (reusing books in different order) -->
                        <div class="w-full flex-none">
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6 lg:gap-8">
                                <!-- Book 3 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/secret-love.png') ?>" alt="Secrets of Divine Love"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">A. Helwa</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Secrets of Divine Love: A Spiritual
                                            Journey into the Heart of Islam</h3>
                                    </div>
                                </div>

                                <!-- Book 5 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/solo-leveling.png') ?>" alt="Solo Leveling III"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Chugong</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Solo Leveling III</h3>
                                    </div>
                                </div>

                                <!-- Book 1 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/girl.png') ?>"
                                            alt="The Girl Who Fell Beneath the Sea"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Axie Oh</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Girl Who Fell Beneath the Sea
                                        </h3>
                                    </div>
                                </div>

                                <!-- Book 4 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/jjk.png') ?>" alt="Jujutsu Kaisen 11"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Gege Akutami</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Jujutsu Kaisen 11</h3>
                                    </div>
                                </div>

                                <!-- Book 2 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/hunger-games.png') ?>"
                                            alt="The Hunger Games: The Balad of Songbirds & Snakes"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Suzanne Collins</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Hunger Games: The Balad of
                                            Songbirds & Snakes</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 (reusing books in different order) -->
                        <div class="w-full flex-none">
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6 lg:gap-8">
                                <!-- Book 4 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/jjk.png') ?>" alt="Jujutsu Kaisen 11"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Gege Akutami</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Jujutsu Kaisen 11</h3>
                                    </div>
                                </div>

                                <!-- Book 2 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/hunger-games.png') ?>"
                                            alt="The Hunger Games: The Balad of Songbirds & Snakes"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Suzanne Collins</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Hunger Games: The Balad of
                                            Songbirds & Snakes</h3>
                                    </div>
                                </div>

                                <!-- Book 5 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/solo-leveling.png') ?>" alt="Solo Leveling III"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Chugong</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Solo Leveling III</h3>
                                    </div>
                                </div>

                                <!-- Book 1 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/girl.png') ?>"
                                            alt="The Girl Who Fell Beneath the Sea"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">Axie Oh</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">The Girl Who Fell Beneath the Sea
                                        </h3>
                                    </div>
                                </div>

                                <!-- Book 3 -->
                                <div
                                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300">
                                    <div class="p-5">
                                        <img src="<?= base_url('/img/secret-love.png') ?>" alt="Secrets of Divine Love"
                                            class="w-full h-48 object-cover mb-4">
                                        <p class="text-sm text-[#31304D] mb-1">A. Helwa</p>
                                        <h3 class="font-medium text-[#161A30] mb-2">Secrets of Divine Love: A Spiritual
                                            Journey into the Heart of Islam</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right navigation arrow -->
                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-md z-10 hover:bg-gray-100"
                    @click="activeSlide = activeSlide === totalSlides - 1 ? 0 : activeSlide + 1"
                    aria-label="Next slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#161A30]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots navigation -->
                <div class="flex justify-center mt-6 space-x-2">
                    <template x-for="(slide, index) in totalSlides" :key="index">
                        <button class="w-3 h-3 rounded-full focus:outline-none transition-colors duration-200"
                            :class="{ 'bg-[#161A30]': activeSlide === index, 'bg-gray-300': activeSlide !== index }"
                            @click="activeSlide = index" :aria-label="`Go to slide ${index + 1}`"></button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Alpine.js CDN (required for the slider functionality) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Optional: Auto-slide functionality -->
    <script>
        document.addEventListener('alpine:init', () => {
            // Optional: If you want auto-sliding
            setInterval(() => {
                const slider = document.querySelector('[x-data]').__x.$data;
                slider.activeSlide = slider.activeSlide === slider.totalSlides - 1 ? 0 : slider.activeSlide + 1;
            }, 7000); // Change slide every 7 seconds
        });
    </script>
</body>

</html>