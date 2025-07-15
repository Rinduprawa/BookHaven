<section class="py-14 px-24">
    <div class="container mx-auto">
        <!-- Title -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-[26px] font-bold text-[#161A30]">Popular Books</h2>
            <a class="font-medium text-[#31304D] cursor-pointer">See All</a>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-10">
            <?php $rowNum = 0; ?>
            <?php foreach ($books as $book): ?>
                <?php $rowNum++; ?>
                <div
                    class="bg-white shadow-[1px_4px_10px_0px_rgba(22,26,48,0.15)] overflow-hidden hover:shadow-[1px_4px_20px_0px_rgba(22,26,48,0.25)] transition-shadow duration-300 rounded-lg">
                    <a href="<?= base_url('detail/' . $book['id']) ?>">
                        <div class="p-5">
                            <?php
                            $coverImage = $book['cover_image'] ?? '';
                            $imagePath = !empty($coverImage) ? base_url('uploads/covers/' . $coverImage) : 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000';
                            ?>
                            <img id="mainBookImage" src="<?= $imagePath ?>" alt="<?= $book['title'] ?? 'Book Cover' ?>"
                                class="w-full h-full object-cover mb-4 rounded-t-lg">
                            <p class="text-sm text-[#31304D] mb-1"><?= $book['writer'] ?? 'Anonymous' ?></p>
                            <h3 class="font-medium text-[#161A30]"><?= $book['title'] ?? 'Book Title' ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>