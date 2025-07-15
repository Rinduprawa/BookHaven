<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>
<?= view('layouts/dashboard/sidebar', ['bg1' => 'bg-[#31304D]', 'bg2' => 'bg-[#161A30]']) ?>
<?= view('layouts/dashboard/header', ['page' => 'Dashboard']) ?>
<section class="ml-64 p-6">
    <div class="">Welcome, Admin!</div>
</section>
<style>
    body {
        background-color: #F0ECE5;
    }
</style>
<?= $this->endSection() ?>