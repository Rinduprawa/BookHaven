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
    <!-- Detail -->
    <div class="container py-14 px-24">
        <div class="flex flex-col lg:flex-row gap-20">
            <!-- Left -->
            <div class="lg:w-1/3">
                <!-- Main Image Display -->
                <div class="mb-4">
                    <img id="mainBookImage"
                        src="<?= $book['cover_image'] ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000' ?>"
                        alt="<?= $book['title'] ?? 'Book Cover' ?>" class="w-full rounded-lg shadow-md">
                </div>

                <!-- Thumbnail Images -->
                <div class="flex gap-2 overflow-x-auto">
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
                </div>
            </div>

            <!-- Right -->
            <div class="lg:w-2/3">
                <div class="text-3xl font-bold text-[#161A30] mb-1"><?= $book['title'] ?? 'Book Title' ?></div>
                <div class="text-xl text-[#31304D] mb-2">by <a
                        class="text-[#31304D] font-semibold hover:underline"><?= $book['writer'] ?? 'Unknown Author' ?></a>
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
                                    <td class="py-3 px-2 text-[#31304D]"><?= $book['dimensions'] ?? 'Unknown' ?></td>
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
                        <div class="prose max-w-none">
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