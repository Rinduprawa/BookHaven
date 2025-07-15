<?php
$menuItems = [
    ['img' => 'img/menu-1.png', 'label' => 'Latest Arrivals'],
    ['img' => 'img/menu-2.png', 'label' => 'Most Borrowed'],
    ['img' => 'img/menu-3.png', 'label' => 'Global Collection'],
    ['img' => 'img/menu-4.png', 'label' => 'Digital Resources'],
    ['img' => 'img/menu-5.png', 'label' => 'Print on Demand'],
    ['img' => 'img/menu-6.png', 'label' => 'Non-Book Items']
];
?>

<section class="h-[70px]"></section>
<section class="py-14 px-24 flex flex-col gap-8 text-[#161A30] text-center">
    <img class="mx-auto w-full" src="<?= base_url('img/hero-image.png') ?>" alt="">
    <div class="mx-20 flex justify-between">
        <?php
        foreach ($menuItems as $item) {
            echo view('/layouts/components/hero_menu', $item);
        }
        ?>
    </div>
</section>