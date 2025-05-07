<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BookHaven</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-inter">
    <!-- Header -->
    <header class="bg-[#161A30] fixed text-[#F0ECE5] w-full py-6 px-24 shadow-xl">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Left -->
            <div class="flex gap-20">
                <!-- Logo -->
                <a href="<?= base_url('/') ?>" class="flex text-2xl font-semibold items-center">
                    <span class="pr-[5px]">
                        <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.5em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6v7L9.5 7.5L7 9V2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z" />
                        </svg>
                    </span>
                    BookHaven
                </a>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="<?= base_url('/') ?>" class="hover:text-gray-300 transition duration-150 items-center">
                        Home
                    </a>
                    <a href="<?= base_url('about') ?>" class="hover:text-gray-300 transition duration-150">
                        About
                    </a>
                </nav>
            </div>

            <!-- Right -->
            <div class="flex gap-5">
                <!-- Search bar -->
                <div class="flex-grow min-w-md">
                    <form action="<?= base_url('search') ?>" method="GET" class="relative">
                        <input type="text" name="query" placeholder="Search for anything"
                            class="w-full py-2 px-5 pr-10 rounded-full bg-[#F0ECE5] text-[#161A30] focus:outline-none focus:ring-2 focus:ring-[#31304D] placeholder:text-[#31304D] placeholder:text-sm" />
                        <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-[#161A30]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Login -->
                <a href="<?= base_url('login') ?>"
                    class="bg-[#F0ECE5] text-[#161A30] font-medium py-2 px-5 rounded-full transition duration-150">
                    Login
                </a>
            </div>
        </div>
    </header>