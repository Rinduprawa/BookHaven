<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
Book Management
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>

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

<?= view('layouts/dashboard/sidebar', ['bg1' => 'bg-[#161A30]', 'bg2' => 'bg-[#31304D]']) ?>
<?= view('layouts/dashboard/header', ['page' => 'Book Management']) ?>

<div class="ml-64 p-8">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h3 class="text-2xl font-bold text-[#31304D]">Book List</h3>
            <p class="text-[#31304D]">Manage all BookHaven collections</p>
        </div>
        <button
            class="px-4 py-2 bg-[#31304D] text-[#f0ece5] rounded-lg cursor-pointer hover:bg-[#0E0F1D] transition-colors"
            onclick="openBookModal('add')">
            <i class="fas fa-plus mr-1"></i> Add New
        </button>
    </div>

    <!-- Book Table -->
    <?= $this->include('layouts/components/book_table') ?>
</div>

<?= $this->include('layouts/components/book_modal') ?>
<?= $this->endSection() ?>