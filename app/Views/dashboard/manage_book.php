<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Management</title>
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#F0ECE5] font-inter">
    <!-- Success Alert -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="alert" class="ml-64 w-full fixed flex justify-center">
            <div class="w-full bg-green-200 border-l-6 border-green-600 text-green-700 py-7 px-8" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Error Alert -->
    <?php if (session()->getFlashdata('error')): ?>
        <div id="alert" class="ml-64 w-full fixed flex justify-center">
            <div class="w-full bg-red-200 border-l-6 border-red-600 text-red-700 py-7 px-8" role="alert">
                <h4 class="text-lg font-semibold">Nope, you did these wrong:</h4>
                <ul class="mt-2 list-disc list-inside">
                    <?php foreach (session()->getFlashdata('error') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- Sidebar -->
    <section
        class="fixed top-0 left-0 h-full w-64 flex flex-col justify-between bg-[#161A30] text-[#F0ECE5] transition-all duration-300 ease-in-out shadow-xl">
        <div>
            <!-- Logo -->
            <div class="p-6 border-b border-[#31304D]">
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
            </div>

            <!-- Menu -->
            <div class="py-6">
                <a class="px-6 py-4 flex items-center transition-all duration-200 hover:bg-[#31304D]" href="/dashboard">
                    <i class="fas fa-tachometer-alt w-1/6 text-lg"></i>
                    <div class="w-5/6" class="w-5/6">Dashboard</div>
                </a>
                <a class="px-6 py-4 flex items-center transition-all duration-200 bg-[#31304D]" href="/manage-book">
                    <i class="fas fa-book w-1/6 text-lg"></i>
                    <div class="w-5/6">Book Management</div>
                </a>
                <a class="px-6 py-4 flex items-center transition-all duration-200 text-[#31304D]">
                    <i class="fas fa-users w-1/6 text-lg"></i>
                    <div class="w-5/6">Member Management</div>
                </a>
                <a class="px-6 py-4 flex items-center transition-all duration-200 text-[#31304D]">
                    <i class="fas fa-exchange-alt w-1/6 text-lg"></i>
                    <div class="w-5/6">Loan</div>
                </a>
                <a class="px-6 py-4 flex items-center transition-all duration-200 text-[#31304D]">
                    <i class="fas fa-chart-bar w-1/6 text-lg"></i>
                    <div class="w-5/6">Record</div>
                </a>
            </div>
        </div>

        <!-- Setting -->
        <a class="p-6 flex items-center transition-all duration-200 text-[#31304D]">
            <i class="fas fa-cog w-1/6 text-lg"></i>
            <div class="w-5/6">Setting</div>
        </a>
    </section>

    <!-- Header -->
    <section
        class="ml-64 px-8 py-5 flex justify-between items-center bg-[#161A30] border-b border-[#31304D] text-[#f0ece5]">
        <h1 class="text-xl font-semibold">Book Management Panel</h1>
        <a class="flex items-center focus:outline-none">
            <img class="h-8 w-8 rounded-full object-cover" src="<?= base_url('img/girl.png') ?>" alt="Profile">
            <span class="ml-3">Admin</span>
            <i class="fas fa-chevron-down ml-2 text-xs"></i>
        </a>
    </section>

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

        <!-- Book Table -->
        <div class="card overflow-hidden rounded-lg shadow-md">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-[#31304D] text-[#F0ECE5]">
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Title</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Writer</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Genre</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Year</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Copies</th>
                            <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rowNum = 0; ?>
                        <?php foreach ($books as $book): ?>
                            <?php $rowNum++; ?>
                            <tr class="<?= ($rowNum % 2 == 0) ? '' : 'bg-white'; ?>">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-[#0E0F1D]"><?= esc($book['title']) ?></div>
                                    <div class="text-sm text-[#31304D]"><?= esc($book['publisher']) ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-[#0E0F1D]"><?= esc($book['writer']) ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-[#0E0F1D]"><?= esc($book['genre']) ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-[#0E0F1D]"><?= esc($book['publication_year']) ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php
                                    $status = $book['availability_status'];
                                    $statusClass = '';
                                    $statusText = '';

                                    if ($status === 'Available') {
                                        $statusClass = 'bg-green-100 text-green-800';
                                        $statusText = 'Available';
                                    } elseif ($status === 'Coming Soon') {
                                        $statusClass = 'bg-yellow-100 text-yellow-800';
                                        $statusText = 'Coming Soon';
                                    } else {
                                        $statusClass = 'bg-red-100 text-red-800';
                                        $statusText = 'Referred Only';
                                    }
                                    ?>
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?= $statusClass ?>">
                                        <?= $statusText ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-[#0E0F1D]">
                                    <?= esc($book['copies_available']) ?>/<?= esc($book['copies_total']) ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex">
                                        <a href="<?= base_url('detail/' . $book['id']) ?>"
                                            class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></a>
                                        <form action="<?= base_url('book/delete/' . $book['id']) ?>" method="post"
                                            onsubmit="return confirm('You really want to delete this data?')">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="text-red-600 hover:text-red-900"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
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

            <form action="<?= base_url('book/save') ?>" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left -->
                    <div>
                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="title">
                                Book Title <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="title" name="title" type="text" placeholder="E.g. Greatest Book of All Time"
                                value="<?= old('name') ?>">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="publisher">
                                Publisher <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="publisher" name="publisher" type="text" placeholder="E.g. Rin's Publisher"
                                value="<?= old('publisher') ?>">
                        </div>

                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="year">
                                    Year <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="year" name="year" type="number" placeholder="Published Year"
                                    value="<?= old('year') ?>">
                            </div>
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="page_count">
                                    Page Count
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="page_count" name="page_count" type="number" placeholder="E.g. 240"
                                    value="<?= old('page_count') ?>">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="dimensions">
                                Dimensions (cm)
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="dimensions" name="dimensions" type="text" placeholder="E.g. 29 x 24 x 06 cm"
                                value="<?= old('dimensions') ?>">
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="writer">
                                Writer <span class="text-red-600">*</span>
                            </label>
                            <input
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="writer" name="writer" type="text" placeholder="E.g. Lyve Zivanne"
                                value="<?= old('writer') ?>">
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
                                <option value="IND">Indonesia (ID)</option>
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
                                id="desc" name="desc" rows="4" placeholder="Lorem ipsum dolor sit amet"
                                value="<?= old('desc') ?>"></textarea>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="cover">
                                Cover
                            </label>
                            <div class="mt-1 flex items-center">
                                <label
                                    class="w-full flex justify-center cursor-pointer hover:bg-[#31304d] hover:text-white appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline">
                                    <svg class="w-7 h-7" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <input type="file" name="cover" id="cover" class="hidden" accept="image/*">
                                </label>
                            </div>
                            <div id="file-name" class="mt-2 text-sm text-gray-600"></div>
                            <p class="mt-1 text-sm text-[#161A30]">
                                Format: JPG, JPEG, PNG. Max 2MB.
                            </p>
                        </div>

                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="copies_count">
                                    Copies Count <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="copies_count" name="copies_count" type="number" placeholder="E.g. 6"
                                    value="<?= old('copies_count') ?>">
                            </div>
                            <div>
                                <label class="block text-[#161A30] text-sm font-bold mb-2" for="copies_avail">
                                    Copies Available <span class="text-red-600">*</span>
                                </label>
                                <input
                                    class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                    id="copies_avail" name="copies_avail" type="number" placeholder="E.g. 2"
                                    value="<?= old('copies_avail') ?>">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="max_lend_period">
                                Max Lend Duration (day) <span class="text-red-600">*</span>
                            </label>
                            <input
                                class=" appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="max_lend_period" name="max_lend_period" type="number" placeholder="E.g. 24"
                                value="<?= old('max_lend_period') ?>">
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
                                <option value="Coming Soon">Coming Soon</option>
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
        // Open Add Book Modal
        function openAddBookModal() {
            document.getElementById('add-book-modal').style.display = 'flex';
        }

        // Close Add Book Modal
        function closeAddBookModal() {
            document.getElementById('add-book-modal').style.display = 'none';
        }

        // Close Modal Outside Content
        window.onclick = function (event) {
            const modal = document.getElementById('add-book-modal');
            if (event.target === modal) {
                closeAddBookModal();
            }
        }

        // Uploaded File Name
        document.getElementById('cover').addEventListener('change', function () {
            let fileName = this.files[0].name;
            document.getElementById('file-name').textContent = 'Choosen file: ' + fileName;
        });

        // Auto Close Alert
        setTimeout(function () {
            const alert = document.getElementById('alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>