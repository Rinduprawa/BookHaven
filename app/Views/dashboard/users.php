<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>

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
            <a class="px-6 py-4 flex items-center transition-all duration-200bg-[#31304D]" href="/user/dashboard">
                <i class="fas fa-tachometer-alt w-1/6 text-lg"></i>
                <div class="w-5/6" class="w-5/6">Dashboard</div>
            </a>
            <a class="px-6 py-4 flex items-center transition-all duration-200 text-[#31304D]">
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

    <!-- Logout -->
    <a class="p-6 flex items-center" href="<?= base_url('/logout') ?>">
        <i class="fas fa-sign-out-alt w-1/6 text-lg"></i>
        <div class="w-5/6">Logout</div>
    </a>
</section>
<section
    class="ml-64 px-8 py-5 flex justify-between items-center bg-[#161A30] border-b border-[#31304D] text-[#f0ece5]">
    <h1 class="text-xl font-semibold">Dashboard</h1>
    <a class="flex items-center focus:outline-none">
        <img class="h-8 w-8 rounded-full object-cover" src="<?= base_url('img/girl.png') ?>" alt="Profile">
        <span class="ml-3"><?= esc(session()->get('user')['username']) ?></span>
        <i class="fas fa-chevron-down ml-2 text-xs"></i>
    </a>
</section>
<section class="ml-64 p-6">
    <div class="">Welcome, <?= esc(session()->get('user')['username']) ?>!</div>
</section>
<style>
    body {
        background-color: #F0ECE5;
    }
</style>
<?= $this->endSection() ?>