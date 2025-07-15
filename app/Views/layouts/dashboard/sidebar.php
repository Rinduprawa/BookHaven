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
            <a class="px-6 py-4 flex items-center transition-all duration-200 hover:bg-[#31304D] <?= $bg1 ?>"
                href="admin/dashboard">
                <i class="fas fa-tachometer-alt w-1/6 text-lg"></i>
                <div class="w-5/6" class="w-5/6">Dashboard</div>
            </a>
            <a class="px-6 py-4 flex items-center transition-all duration-200 hover:bg-[#31304D] <?= $bg2 ?>"
                href="/manage-book">
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