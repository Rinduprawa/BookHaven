<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $book['title'] ?? 'Book Detail' ?></title>
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-inter">
    <!-- Header -->
    <header class="bg-[#161A30] fixed text-[#F0ECE5] w-full py-5 px-24 shadow-xl">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Left -->
            <div class="flex gap-20">
                <!-- Logo -->
                <a href="<?= base_url('/') ?>" class="flex text-xl font-semibold items-center">
                    <span class="pr-[5px]">
                        <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.5em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6v7L9.5 7.5L7 9V2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z" />
                        </svg>
                    </span>
                    BookHaven
                </a>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="<?= base_url('/') ?>"
                        class="hover:text-gray-300 transition duration-150 items-center text-sm">
                        Home
                    </a>
                    <a class="hover:text-gray-300 transition duration-150 cursor-pointer text-sm">
                        All Collection
                    </a>
                </nav>
            </div>

            <!-- Right -->
            <div class="flex gap-5">
                <!-- Search bar -->
                <div class="flex-grow min-w-md">
                    <form action="<?= base_url('search') ?>" method="GET" class="relative">
                        <input type="text" name="query" placeholder="Search for anything"
                            class="w-full py-1.5 px-5 pr-10 rounded-full bg-[#F0ECE5] text-[#161A30] focus:outline-none focus:ring-2 focus:ring-[#31304D] placeholder:text-[#31304D] placeholder:text-sm" />
                        <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-[#161A30]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Login -->
                <a href="<?= base_url('dashboard') ?>"
                    class="bg-[#F0ECE5] text-[#161A30] text-sm flex items-center py-1 px-5 rounded-full transition duration-150">
                    Login
                </a>
            </div>
        </div>
    </header>

    <!-- Space -->
    <section class="h-14"></section>

    <!-- Detail -->
    <div class="container py-14 px-24">
        <div class="flex flex-col lg:flex-row gap-20">
            <!-- Left -->
            <div class="lg:w-1/3">
                <!-- Main Image Display -->
                <div class="mb-4">
                    <?php
                    // Check if cover_image exists and format the path
                    $coverImage = $book['cover_image'] ?? '';
                    $imagePath = !empty($coverImage) ? base_url('uploads/covers/' . $coverImage) : 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000';
                    ?>
                    <img id="mainBookImage" src="<?= $imagePath ?>" alt="<?= $book['title'] ?? 'Book Cover' ?>"
                        class="w-full rounded-lg shadow-md">
                </div>

                <!-- Thumbnail Images -->
                <!-- <div class="flex gap-2 overflow-x-auto">
                    <button class="thumbnail-btn"
                        onclick="document.getElementById('mainBookImage').src='<?= $book['cover_image'] ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000' ?>'">
                        <img src="<?= $book['cover_image'] ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000' ?>"
                            alt="Book Cover Front" class="w-20 h-28 object-cover rounded border-2 border-blue-500">
                    </button>
                    <button class="thumbnail-btn"
                        onclick="document.getElementById('mainBookImage').src='https://images.unsplash.com/photo-1554357395-ebeff84d3f6d?q=80&w=1000'">
                        <img src="https://images.unsplash.com/photo-1554357395-ebeff84d3f6d?q=80&w=1000"
                            alt="Book Cover Back"
                            class="w-20 h-28 object-cover rounded border-2 border-gray-200 hover:border-blue-500">
                    </button>
                    <button class="thumbnail-btn"
                        onclick="document.getElementById('mainBookImage').src='https://images.unsplash.com/photo-1541963463532-d68292c34b19?q=80&w=1000'">
                        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?q=80&w=1000"
                            alt="Book Pages"
                            class="w-20 h-28 object-cover rounded border-2 border-gray-200 hover:border-blue-500">
                    </button>
                </div> -->
            </div>

            <!-- Right -->
            <div class="lg:w-2/3">
                <div class="text-3xl font-bold text-[#161A30] mb-1"><?= $book['title'] ?? 'Book Title' ?></div>
                <div class="text-xl text-[#31304D] mb-2">by <a
                        class="text-[#31304D] font-semibold hover:underline"><?= $book['writer'] ?? 'Anonymous' ?></a>
                </div>
                <div
                    class="mt-4 mb-3 w-fit text-[#31304D] border border-[#31304D] py-1 px-3 shadow-sm rounded-md text-sm">
                    <?= $book['genre'] ?? 'Genre' ?>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-3 mb-6">
                    <button
                        class="bg-[#31304D] hover:bg-[#161A30] text-white py-2 px-6 rounded-md flex items-center cursor-pointer">
                        <i class="fas fa-book-reader mr-2"></i> Borrow Now
                    </button>
                    <button
                        class="bg-white hover:bg-[#F0ECE5] text-[#31304D] border border-gray-200 py-2 px-6 rounded-md flex items-center cursor-pointer">
                        <i class="far fa-heart mr-2"></i> Add to Wishlist
                    </button>
                </div>

                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-4">
                    <div class="flex flex-wrap -mb-px">
                        <button class="tab-button bg-[#31304D] text-white py-2 px-4 rounded-t-md mr-1 cursor-pointer"
                            onclick="openTab(event, 'bookDetails')">
                            Book Details
                        </button>
                        <button class="tab-button text-[#31304D] py-2 px-4 rounded-t-md mr-1 cursor-pointer"
                            onclick="openTab(event, 'description')">
                            Description
                        </button>
                        <button class="tab-button text-[#31304D] py-2 px-4 rounded-t-md mr-1 cursor-pointer"
                            onclick="openTab(event, 'availability')">
                            Availability
                        </button>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content-container">
                    <!-- Details -->
                    <div id="bookDetails" class="tab-content">
                        <table class="w-full border-collapse">
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold w-1/3">Publisher</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['publisher'] ?? 'Unknown' ?></td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Publication Year</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['publication_year'] ?? 'Unknown' ?>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Page Count</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['page_count'] ?? '0' ?> pages</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Language</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['language'] ?? 'Unknown' ?></td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Dimensions</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['dimensions'] ?? 'Unknown' ?> cm</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Age Range</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['age_range'] ?? 'All Ages' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Description -->
                    <div id="description" class="tab-content hidden">
                        <div class="max-w-none text-[#31304D]">
                            <?= nl2br($book['description'] ?? 'No description available.') ?>
                        </div>
                    </div>

                    <!-- Availability -->
                    <div id="availability" class="tab-content hidden">
                        <table class="w-full border-collapse">
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold w-1/3">Status</td>
                                    <td class="py-3 px-2 text-[#31304D]">
                                        <span
                                            class="<?= ($book['availability_status'] ?? '') === 'Available' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' ?> py-1 px-3 rounded-full text-sm font-medium">
                                            <?= $book['availability_status'] ?? 'Unknown' ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Copies Available</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['copies_available'] ?? '0' ?> of
                                        <?= $book['copies_total'] ?? '0' ?>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Maximum Loan Period</td>
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['max_lend_duration'] ?? '0' ?> days
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">E-book Format</td>
                                    <td class="py-3 px-2 text-[#31304D]">
                                        <?= $book['ebook_available'] ? 'Available' : 'Not Available' ?>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-2 text-[#161A30] font-semibold">Audiobook</td>
                                    <td class="py-3 px-2 text-[#31304D]">
                                        <?= $book['audiobook_available'] ? 'Available' : 'Not Available' ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Book -->
    <div class="py-14 px-24">
        <h2 class="text-2xl font-bold text-[#161A30] mb-6">You May Also Like</h2>
        <!-- Grid  -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <?php foreach ($books as $relatedBook): ?>
                <div class="flex flex-col">
                    <a href="<?= base_url('detail/' . $relatedBook['id']) ?>">
                        <?php
                        $coverImage = $relatedBook['cover_image'] ?? '';
                        $imagePath = !empty($coverImage) ? base_url('uploads/covers/' . $coverImage) : 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000';
                        ?>
                        <img src="<?= $imagePath ?>" alt="<?= $relatedBook['title'] ?? 'Book Cover' ?>"
                            class="w-full h-64 object-cover object-top rounded-md mb-2">
                        <h3 class="font-semibold text-[#161A30] mb-1 line-clamp-1">
                            <?= $relatedBook['title'] ?? 'Book Title' ?>
                        </h3>
                        <p class="text-[#31304D] text-sm mb-1"><?= $relatedBook['writer'] ?? 'Anonymous' ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <section class="mt-6 text-[#F0ECE5]">
        <div class="container py-14 px-24 bg-[#31304D]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
                <!-- 1 & 2 -->
                <div class="lg:col-span-3">
                    <a class="text-xl font-semibold text-[#F0ECE5] no-underline flex items-center">
                        <svg class="mb-1 mr-1" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.5em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6v7L9.5 7.5L7 9V2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z" />
                        </svg>
                        BookHaven
                    </a>
                    <div class="mt-4 py-3 text-sm text-[#F0ECE5]">Download our app by clicking the link
                        below:</div>
                    <div class="mb-4 flex gap-3">
                        <a class="cursor-pointer">
                            <img src="/img/image 1 (1).png" alt="App Store">
                        </a>
                        <a class="cursor-pointer">
                            <img src="/img/image 2.png" alt="Google Play">
                        </a>
                    </div>
                    <div class="pt-3 flex gap-3">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-xl text-[#F0ECE5] no-underline">
                            <i class="fa fa-brands fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-xl text-[#F0ECE5] no-underline">
                            <i class="fa fa-brands fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-xl text-[#F0ECE5] no-underline">
                            <i class="fa fa-brands fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-xl text-[#F0ECE5] no-underline">
                            <i class="fa fa-brands fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- 3 -->
                <div class="lg:col-span-1 md:col-span-1">
                    <div class="mb-4 mt-1 font-bold text-white text-base">About BookHaven</div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            About Us
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            Our Library
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            Membership
                        </a>
                    </div>
                </div>

                <!-- 4 -->
                <div class="lg:col-span-1 md:col-span-1">
                    <div class="mb-4 mt-1 font-bold text-white text-base">Others</div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            T&C
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            Privacy Policy
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer">
                            Help
                        </a>
                    </div>
                </div>

                <!-- Column 5: Contact Us -->
                <div class="lg:col-span-1 md:col-span-1">
                    <div class="mb-4 mt-1 font-bold text-white text-base">Contact Us</div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 1024 1024"
                                class="mr-1">
                                <path fill="#F0ECE5"
                                    d="M885.6 230.2L779.1 123.8a80.83 80.83 0 0 0-57.3-23.8c-21.7 0-42.1 8.5-57.4 23.8L549.8 238.4a80.83 80.83 0 0 0-23.8 57.3c0 21.7 8.5 42.1 23.8 57.4l83.8 83.8A393.8 393.8 0 0 1 553.1 553A395.3 395.3 0 0 1 437 633.8L353.2 550a80.83 80.83 0 0 0-57.3-23.8c-21.7 0-42.1 8.5-57.4 23.8L123.8 664.5a80.9 80.9 0 0 0-23.8 57.4c0 21.7 8.5 42.1 23.8 57.4l106.3 106.3c24.4 24.5 58.1 38.4 92.7 38.4c7.3 0 14.3-.6 21.2-1.8c134.8-22.2 268.5-93.9 376.4-201.7C828.2 612.8 899.8 479.2 922.3 344c6.8-41.3-6.9-83.8-36.7-113.8" />
                            </svg>
                            (+62)82155555555
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20"
                                class="mr-1">
                                <path fill="#F0ECE5"
                                    d="M3.87 4h13.25C18.37 4 19 4.59 19 5.79v8.42c0 1.19-.63 1.79-1.88 1.79H3.87c-1.25 0-1.88-.6-1.88-1.79V5.79c0-1.2.63-1.79 1.88-1.79m6.62 8.6l6.74-5.53c.24-.2.43-.66.13-1.07c-.29-.41-.82-.42-1.17-.17l-5.7 3.86L4.8 5.83c-.35-.25-.88-.24-1.17.17c-.3.41-.11.87.13 1.07z" />
                            </svg>
                            contact@havenlyread.com
                        </a>
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-sm text-[#F0ECE5] no-underline hover:text-white cursor-pointer flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 384 512"
                                class="mr-1">
                                <path fill="#F0ECE5"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0M192 128a64 64 0 1 1 0 128a64 64 0 1 1 0-128" />
                            </svg>
                            Surabaya, Indonesia
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="py-2 bg-[#161A30] text-sm text-center">
            © 2025 BookHaven | Ryn
        </div>
    </section>

    <script>
        function openTab(evt, tabName) {
            const tabContents = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.add("hidden");
            }

            const tabLinks = document.getElementsByClassName("tab-button");
            for (let i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("bg-[#31304D]", "text-white");
                tabLinks[i].classList.add("text-[#31304D]");
            }

            document.getElementById(tabName).classList.remove("hidden");
            evt.currentTarget.classList.remove("text-[#31304D]");
            evt.currentTarget.classList.add("bg-[#31304D]", "text-white");
        }
    </script>
</body>

</html>