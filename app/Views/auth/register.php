<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
Register
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>

<div class="bg-[#161A30] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md mx-auto p-6">
        <a href="<?= base_url('/') ?>"
            class="flex items-center justify-center mb-4 text-2xl text-[#F0ECE5] focus:outline-none">
            <div class="p-2 rounded-lg mr-1">
                <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.5em" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M18 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6v7L9.5 7.5L7 9V2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold">BookHaven</h1>
        </a>
        <!-- Form Register -->
        <div class="bg-[#31304D] rounded-2xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-white mb-6 text-center">Create an Account</h2>

            <!-- Error Message -->
            <?php if (session()->getFlashdata('errors')): ?>
                <div id="error-message" class="bg-red-500/20 text-white px-3 py-1 mb-4 rounded">
                    <ul class="text-red-400 py-2 text-sm">
                        <?php foreach (session()->getFlashdata('errors') as $e): ?>
                            <li><?= esc($e) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="/register/save" class="space-y-4">
                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2" for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="user@example.com"
                        class="w-full px-3 py-2 bg-darker-blue border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent-blue focus:border-transparent transition-all duration-200"
                        required />
                </div>

                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2" for="username">
                        Username
                    </label>
                    <input type="text" name="username" id="username" placeholder="your_username"
                        class="w-full px-3 py-2 bg-darker-blue border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent-blue focus:border-transparent transition-all duration-200"
                        required />
                </div>

                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2" for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="password123"
                        class="w-full px-3 py-2 bg-darker-blue border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent-blue focus:border-transparent transition-all duration-200"
                        required />
                </div>

                <button type="submit"
                    class="w-full bg-[#161A30] hover:bg-[#f0ece5] text-white hover:text-[#161A30] cursor-pointer font-medium py-2 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-1 focus:ring-offset-1">
                    Sign Up
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-400 text-sm">
                    Already have an account?
                    <a href="/login"
                        class="text-[#F0ECE5] hover:text-blue-400 font-semibold transition-colors duration-200">
                        Log in here
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-gray-500 text-xs">
                © 2025 BookHaven | Ryn
            </p>
        </div>
    </div>

</div>

<?= $this->endSection() ?>