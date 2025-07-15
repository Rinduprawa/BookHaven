<div id="book-modal" class="hidden fixed inset-0 bg bg-black/50 justify-center items-center z-50">
    <div class="bg-white p-8 rounded-lg max-w-[1000px] max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-5">
            <h2 id="book-modal-title" class="text-2xl font-semibold text-[#161A30]">Add New Book</h2>
            <button class="text-2xl text-red-600 bg-transparent border-0 cursor-pointer"
                onclick="closeBookModal()">&times;</button>
        </div>
        <form id="book-form" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left -->
                <div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="title">
                            Book Title <span class="text-red-600">*</span>
                        </label>
                        <input
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                            id="title" name="title" type="text" placeholder="E.g. Greatest Book of All Time">
                    </div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="publisher">
                            Publisher <span class="text-red-600">*</span>
                        </label>
                        <input
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                            id="publisher" name="publisher" type="text" placeholder="E.g. Rin's Publisher">
                    </div>
                    <div class="mb-5 grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="year">
                                Year <span class="text-red-600">*</span>
                            </label>
                            <input
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="year" name="year" type="number" placeholder="Published Year">
                        </div>
                        <div>
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="page_count">
                                Page Count
                            </label>
                            <input
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="page_count" name="page_count" type="number" placeholder="E.g. 240">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="dimensions">
                            Dimensions (cm)
                        </label>
                        <input
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
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
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
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
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
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
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                            id="desc" name="desc" rows="4" placeholder="Lorem ipsum dolor sit amet"></textarea>
                    </div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="cover">
                            Cover
                        </label>
                        <div class="mt-1 flex items-center">
                            <label
                                class="w-full flex justify-center cursor-pointer hover:bg-[#31304d] hover:text-white appearance-none border border-gray-200 rounded py-2.5 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline">
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
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="copies_count" name="copies_count" type="number" placeholder="E.g. 6">
                        </div>
                        <div>
                            <label class="block text-[#161A30] text-sm font-bold mb-2" for="copies_avail">
                                Copies Available <span class="text-red-600">*</span>
                            </label>
                            <input
                                class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                                id="copies_avail" name="copies_avail" type="number" placeholder="E.g. 2">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="max_lend_period">
                            Max Lend Duration (day) <span class="text-red-600">*</span>
                        </label>
                        <input
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
                            id="max_lend_period" name="max_lend_period" type="number" placeholder="E.g. 24">
                    </div>
                    <div class="mb-5">
                        <label class="block text-[#161A30] text-sm font-bold mb-2" for="age">
                            Age Category
                        </label>
                        <select
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
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
                            class="appearance-none border border-gray-200 rounded w-full py-2.5 px-3 text-[#161A30] leading-tight focus:outline-none focus:shadow-outline"
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
                            <input type="checkbox" id="audiobook_avail" name="audiobook_avail" class="form-checkbox">
                            <label class="ml-2 text-[#161A30] text-sm font-bold" for="audiobook_avail">
                                Audio Book Format
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-6 border-t border-[#31304D] pt-8 gap-3">
                <button type="button" onclick="closeBookModal()"
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
    // Open Book Modal (Add or Edit)
    function openBookModal(mode, id = null) {
        const modal = document.getElementById('book-modal');
        const form = document.getElementById('book-form');
        const title = document.getElementById('book-modal-title');
        // Reset form
        form.reset();
        document.getElementById('file-name').textContent = '';
        document.getElementById('cover').value = '';
        // Default: Add
        if (mode === 'add') {
            title.textContent = 'Add New Book';
            form.action = '<?= base_url('book/save') ?>';
            modal.style.display = 'flex';
        } else if (mode === 'edit' && id) {
            title.textContent = 'Edit Book';
            // Fetch data
            fetch('<?= base_url('book/get/') ?>' + id)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const book = data.book;
                        form.action = '<?= base_url('book/update/') ?>' + book.id;
                        document.getElementById('title').value = book.title;
                        document.getElementById('publisher').value = book.publisher;
                        document.getElementById('year').value = book.publication_year;
                        document.getElementById('page_count').value = book.page_count || '';
                        document.getElementById('dimensions').value = book.dimensions || '';
                        document.getElementById('writer').value = book.writer;
                        document.getElementById('genre').value = book.genre;
                        document.getElementById('language').value = book.language;
                        document.getElementById('desc').value = book.description || '';
                        document.getElementById('copies_count').value = book.copies_total;
                        document.getElementById('copies_avail').value = book.copies_available;
                        document.getElementById('max_lend_period').value = book.max_lend_duration;
                        document.getElementById('age').value = book.age_range || '';
                        document.getElementById('avail_status').value = book.availability_status;
                        document.getElementById('ebook_avail').checked = book.ebook_available == 1;
                        document.getElementById('audiobook_avail').checked = book.audiobook_available == 1;
                        modal.style.display = 'flex';
                    } else {
                        alert('Book not found!');
                    }
                });
        }
    }
    function closeBookModal() {
        document.getElementById('book-modal').style.display = 'none';
    }
    // Close Modal Outside Content
    window.onclick = function (event) {
        const modal = document.getElementById('book-modal');
        if (event.target === modal) {
            closeBookModal();
        }
    }
    // Uploaded File Name
    document.getElementById('cover').addEventListener('change', function () {
        let fileName = this.files[0] ? this.files[0].name : '';
        document.getElementById('file-name').textContent = fileName ? 'Choosen file: ' + fileName : '';
    });
    // Auto Close Alert
    setTimeout(function () {
        const alert = document.getElementById('alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 3000);
</script>