<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#F0ECE5] font-inter">
    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Title -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h3 class="text-2xl font-bold text-[#11304D]">Book List</h3>
                <p class="text-[#31304D]">Manage all BookHaven collections</p>
            </div>
            <button
                class="px-4 py-2 bg-[#31304D] text-[#f0ece5] rounded-lg cursor-pointer hover:bg-[#0E0F1D] transition-colors"
                onclick="openAddBookModal()">
                <i class="fas fa-plus mr-1"></i> Add New
            </button>
        </div>
    </div>

    <!-- Add Book Modal -->
    <div id="add-book-modal" class="hidden fixed inset-0 bg bg-black/50 justify-center items-center z-50">

        <div class="bg-white p-8 rounded-lg max-w-[1000px] max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-semibold text-[#161A30]">Add New Book</h2>
                <button class="text-2xl text-red-600 bg-transparent border-0 cursor-pointer"
                    onclick="closeAddBookModal()">&times;</button>
            </div>
            <form action="<?= base_url('book/save') ?>" method="post" enctype="multipart/form-data" csrf_field()>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left -->
                    <div>
                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="title">
                                Book Title <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="title" name="title" type="text" placeholder="E.g. Greatest Book of All Time">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="publisher">
                                Publisher <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="publisher" name="publisher" type="text" placeholder="E.g. Rin's Publisher">
                        </div>

                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="year">
                                    Year <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="year" name="year" type="number" placeholder="Published Year">
                            </div>
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="page_count">
                                    Page Count
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="page_count" name="page_count" type="number" placeholder="E.g. 240">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="dimensions">
                                Dimensions (cm)
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="dimensions" name="dimensions" type="text" placeholder="E.g. 29 x 24 x 06 cm">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="writer">
                                Writer <span class="text-red-600">*</span>
                            </label>
                            <input
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="writer" name="writer" type="text" placeholder="E.g. Lyve Zivanne">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="genre">
                                Genre <span class="text-red-600">*</span>
                            </label>
                            <select
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="genre" name="genre">
                                <option value="Other">Choose Genre</option>
                                <option value="Non-fiction">Non-Fiction</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Science">Science</option>
                                <option value="History">History</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="language">
                                Language <span class="text-red-600">*</span>
                            </label>
                            <select
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="language" name="language">
                                <option value="Other">Choose Language</option>
                                <option value="ID">Indonesia (ID)</option>
                                <option value="EN">English (EN)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Right -->
                    <div>
                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="desc">
                                Description
                            </label>
                            <textarea
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="desc" name="desc" rows="4" placeholder="Lorem ipsum dolor sit amet"></textarea>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="cover">
                                Cover
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="cover" name="cover" type="file" accept="image/*">
                        </div>

                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="copies_count">
                                    Copies Count <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="copies_count" name="copies_count" type="number" placeholder="E.g. 6">
                            </div>
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="copies_avail">
                                    Copies Available <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="copies_avail" name="copies_avail" type="number" placeholder="E.g. 2">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="max_lend_period">
                                Max Lend Duration (day) <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="max_lend_period" name="max_lend_period" type="number" placeholder="E.g. 24">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="age">
                                Age Category
                            </label>
                            <select
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="age" name="age">
                                <option value="">Choose Age Category</option>
                                <option value="All Ages">All Ages</option>
                                <option value="Children">Kids (5-12)</option>
                                <option value="Teen">Teen (13-17)</option>
                                <option value="Adult">Adult (18+)</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="avail_status">
                                Availability Status <span class="text-red-600">*</span>
                            </label>
                            <select
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="avail_status" name="avail_status">
                                <option value="Available">Can be Borrowed</option>
                                <option value="Reference">Referred Only</option>
                                <option value="Coming Soon">Comming Soon</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="ebook_avail" name="ebook_avail" class="form-checkbox">
                                <label class="ml-2 text-[#161A30] text-sm font-bold" for="ebook_avail">
                                    E-Book Format
                                </label>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex items-center">
                                <input type="checkbox" id="audiobook_avail" name="audiobook_avail"
                                    class="form-checkbox">
                                <label class="ml-2 text-[#161A30] text-sm font-bold" for="audiobook_avail">
                                    Audio Book Format
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6 border-t border-[#31304D] pt-8 gap-3">
                    <button type="button" onclick="closeAddBookModal()"
                        class="bg-gray-200 text-[#161A30] py-2 px-4 rounded cursor-pointer focus:outline-none focus:shadow-outline">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-[#31304D] text-[#f0ece5] py-2 px-4 rounded cursor-pointer focus:outline-none focus:shadow-outline">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
        // Function to open Add Book Modal
        function openAddBookModal() {
            document.getElementById('add-book-modal').style.display = 'flex';
        }

        // Function to close Add Book Modal
        function closeAddBookModal() {
            document.getElementById('add-book-modal').style.display = 'none';
        }

        // Form submission handler
        document.getElementById('add-book-form').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Yay, we got a new book!');
            closeAddBookModal();
        });

        // Close modal when clicking outside the modal content
        window.onclick = function (event) {
            const modal = document.getElementById('add-book-modal');
            if (event.target === modal) {
                closeAddBookModal();
            }
        }
    </script>
</body>

</html>