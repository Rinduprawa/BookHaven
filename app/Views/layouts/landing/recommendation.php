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