<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Manajemen Perpustakaan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --color-dark-blue: #0E0F1D;
            --color-navy: #161A30;
            --color-purple: #31304D;
            --color-cream: #F0ECE5;
            --color-white: #FFFFFF;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-cream);
        }

        .sidebar {
            background-color: var(--color-dark-blue);
            color: var(--color-white);
        }

        .content {
            background-color: var(--color-cream);
        }

        .header {
            background-color: var(--color-navy);
        }

        .card {
            background-color: var(--color-white);
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: var(--color-purple);
            color: var(--color-white);
        }

        .btn-primary:hover {
            background-color: #272643;
        }

        .table-header {
            background-color: var(--color-navy);
            color: var(--color-white);
        }

        .table-row:nth-child(even) {
            background-color: #f8f5f0;
        }

        .table-row:hover {
            background-color: #e8e4dc;
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <div class="sidebar w-64 flex flex-col">
        <div class="p-4 flex items-center justify-center border-b border-gray-700">
            <i class="fas fa-book-open text-2xl mr-2"></i>
            <h1 class="text-xl font-bold">PerpusOnline</h1>
        </div>
        <nav class="flex-1 overflow-y-auto py-4">
            <ul>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="px-4 py-2 bg-gray-800">
                    <a href="#" class="flex items-center text-white">
                        <i class="fas fa-book mr-3"></i>
                        <span>Manajemen Buku</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-users mr-3"></i>
                        <span>Manajemen Pengguna</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-exchange-alt mr-3"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-user-edit mr-3"></i>
                        <span>Penulis</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-language mr-3"></i>
                        <span>Bahasa</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-tag mr-3"></i>
                        <span>Genre</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-chart-bar mr-3"></i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-800">
                    <a href="#" class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-cog mr-3"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4 border-t border-gray-700">
            <a href="#" class="flex items-center text-gray-300 hover:text-white">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Keluar</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="header flex items-center justify-between px-6 py-4 text-white">
            <div class="flex items-center">
                <h2 class="text-lg font-medium">Manajemen Buku</h2>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Cari..."
                        class="bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                </div>
                <div class="ml-4 relative">
                    <button class="flex items-center focus:outline-none">
                        <img class="h-8 w-8 rounded-full object-cover" src="/api/placeholder/40/40" alt="Admin Profile">
                        <span class="ml-2">Admin</span>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Content Body -->
        <main class="content flex-1 overflow-y-auto p-6">
            <div class="mb-6 flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">Daftar Buku</h3>
                    <p class="text-gray-600">Kelola semua koleksi buku perpustakaan</p>
                </div>
                <button id="tambahBukuBtn" class="btn-primary px-5 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Buku Baru
                </button>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="card p-4">
                    <div class="flex items-center">
                        <div class="rounded-full bg-blue-100 p-3">
                            <i class="fas fa-book text-blue-500"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-gray-500 text-sm">Total Buku</h4>
                            <h3 class="text-2xl font-bold">358</h3>
                        </div>
                    </div>
                </div>
                <div class="card p-4">
                    <div class="flex items-center">
                        <div class="rounded-full bg-green-100 p-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-gray-500 text-sm">Tersedia</h4>
                            <h3 class="text-2xl font-bold">286</h3>
                        </div>
                    </div>
                </div>
                <div class="card p-4">
                    <div class="flex items-center">
                        <div class="rounded-full bg-red-100 p-3">
                            <i class="fas fa-hand-holding text-red-500"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-gray-500 text-sm">Dipinjam</h4>
                            <h3 class="text-2xl font-bold">72</h3>
                        </div>
                    </div>
                </div>
                <div class="card p-4">
                    <div class="flex items-center">
                        <div class="rounded-full bg-purple-100 p-3">
                            <i class="fas fa-file-pdf text-purple-500"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-gray-500 text-sm">E-Book</h4>
                            <h3 class="text-2xl font-bold">142</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Bar -->
            <div class="card p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Genre</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm p-2 bg-white">
                            <option value="">Semua Genre</option>
                            <option value="fiksi">Fiksi</option>
                            <option value="nonfiksi">Non-Fiksi</option>
                            <option value="novel">Novel</option>
                            <option value="sejarah">Sejarah</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm p-2 bg-white">
                            <option value="">Semua Penulis</option>
                            <option value="1">Andrea Hirata</option>
                            <option value="2">Tere Liye</option>
                            <option value="3">Pramoedya Ananta Toer</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Bahasa</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm p-2 bg-white">
                            <option value="">Semua Bahasa</option>
                            <option value="id">Indonesia</option>
                            <option value="en">Inggris</option>
                            <option value="ar">Arab</option>
                            <option value="jp">Jepang</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm p-2 bg-white">
                            <option value="">Semua Status</option>
                            <option value="available">Tersedia</option>
                            <option value="borrowed">Dipinjam</option>
                            <option value="reserved">Dipesan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm p-2 bg-white">
                            <option value="">Semua Tahun</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2">Reset</button>
                    <button class="btn-primary px-4 py-2 rounded-lg">Terapkan Filter</button>
                </div>
            </div>

            <!-- Book Table -->
            <div class="card overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="table-header">
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Penulis
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Genre</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tahun</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tersedia
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-8 flex-shrink-0 mr-3">
                                            <img class="h-10 w-8 rounded" src="/api/placeholder/32/40" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Laskar Pelangi</div>
                                            <div class="text-sm text-gray-500">Gramedia</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Andrea Hirata</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Novel, Drama</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2008</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Tersedia
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5/5</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="table-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-8 flex-shrink-0 mr-3">
                                            <img class="h-10 w-8 rounded" src="/api/placeholder/32/40" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Bumi Manusia</div>
                                            <div class="text-sm text-gray-500">Lentera Dipantara</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Pramoedya Ananta Toer</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Sejarah, Fiksi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1980</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Dipinjam
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2/3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="table-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-8 flex-shrink-0 mr-3">
                                            <img class="h-10 w-8 rounded" src="/api/placeholder/32/40" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Hujan</div>
                                            <div class="text-sm text-gray-500">Gramedia</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Tere Liye</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Novel, Romansa</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2016</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Dipesan
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3/4</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="table-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-8 flex-shrink-0 mr-3">
                                            <img class="h-10 w-8 rounded" src="/api/placeholder/32/40" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Filosofi Teras</div>
                                            <div class="text-sm text-gray-500">Kompas</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Henry Manampiring</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Filsafat, Self-Help</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2018</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Tersedia
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6/6</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="table-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-8 flex-shrink-0 mr-3">
                                            <img class="h-10 w-8 rounded" src="/api/placeholder/32/40" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Laut Bercerita</div>
                                            <div class="text-sm text-gray-500">Kepustakaan Populer Gramedia</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Leila S. Chudori</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Novel, Sejarah</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">2017</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Tersedia
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4/4</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-white px-4 py-3 border-t border-gray-200 flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                            Sebelumnya
                        </a>
                        <a href="#"
                            class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                            Selanjutnya
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Menampilkan
                                <span class="font-medium">1</span>
                                sampai
                                <span class="font-medium">5</span>
                                dari
                                <span class="font-medium">25</span>
                                hasil
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                aria-label="Pagination">
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Sebelumnya</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-50 text-sm font-medium text-indigo-600 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    2
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    3
                                </a>
                                <span
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                    ...
                                </span>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    5
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Selanjutnya</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Form Tambah/Edit Buku -->
    <div id="bukuModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg w-full max-w-4xl max-h-screen overflow-y-auto">
            <div class="header p-4 flex justify-between items-center">
                <h3 class="text-lg font-bold text-white">Tambah Buku Baru</h3>
                <button id="closeModal" class="text-white"><i class="fas fa-times"></i></button>
            </div>
            <div class="p-6">
                <form id="bukuForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kolom Kiri -->
                        <div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="judul">
                                    Judul Buku*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="judul" type="text" placeholder="Masukkan judul buku">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="publisher">
                                    Penerbit*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="publisher" type="text" placeholder="Masukkan nama penerbit">
                            </div>

                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="year">
                                        Tahun Terbit*
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="year" type="number" placeholder="Tahun">
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="page_count">
                                        Jumlah Halaman
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="page_count" type="number" placeholder="Jumlah halaman">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="dimensions">
                                    Dimensi Buku
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="dimensions" type="text" placeholder="Contoh: 21 x 14 cm">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="penulis">
                                    Penulis*
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="penulis" multiple>
                                    <option value="1">Andrea Hirata</option>
                                    <option value="2">Tere Liye</option>
                                    <option value="3">Pramoedya Ananta Toer</option>
                                    <option value="4">Dee Lestari</option>
                                    <option value="5">Leila S. Chudori</option>
                                </select>
                                <div class="text-xs text-gray-500 mt-1">Tekan Ctrl/Cmd untuk memilih lebih dari satu
                                    penulis</div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="genre">
                                    Genre*
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="genre" multiple>
                                    <option value="1">Novel</option>
                                    <option value="2">Fiksi</option>
                                    <option value="3">Non-Fiksi</option>
                                    <option value="4">Sejarah</option>
                                    <option value="5">Romansa</option>
                                    <option value="6">Drama</option>
                                    <option value="7">Filsafat</option>
                                    <option value="8">Self-Help</option>
                                </select>
                                <div class="text-xs text-gray-500 mt-1">Tekan Ctrl/Cmd untuk memilih lebih dari satu
                                    genre</div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="bahasa">
                                    Bahasa*
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="bahasa">
                                    <option value="">Pilih Bahasa</option>
                                    <option value="id">Indonesia (ID)</option>
                                    <option value="en">Inggris (EN)</option>
                                    <option value="ar">Arab (AR)</option>
                                    <option value="jp">Jepang (JP)</option>
                                    <option value="cn">Mandarin (CN)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
                                    Deskripsi Buku
                                </label>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="desc" rows="4" placeholder="Deskripsi singkat tentang buku"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="cover">
                                    Gambar Sampul
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="cover" type="file" accept="image/*">
                            </div>

                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="copies_count">
                                        Jumlah Total*
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="copies_count" type="number" placeholder="Total buku">
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="copies_avail">
                                        Tersedia*
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="copies_avail" type="number" placeholder="Jumlah tersedia">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="max_lend_period">
                                    Maksimal Durasi Peminjaman (hari)*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="max_lend_period" type="number" placeholder="Hari">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="usia">
                                    Kategori Usia
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="usia">
                                    <option value="">Pilih Kategori Usia</option>
                                    <option value="all">Semua Usia</option>
                                    <option value="kids">Anak-anak (5-12)</option>
                                    <option value="teen">Remaja (13-17)</option>
                                    <option value="adult">Dewasa (18+)</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    Status Ketersediaan*
                                </label>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="status_availability"
                                            value="available" checked>
                                        <span class="ml-2">Tersedia untuk Dipinjam</span>
                                    </label>
                                </div>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="status_availability"
                                            value="not_available">
                                        <span class="ml-2">Tidak Tersedia untuk Dipinjam</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="ebook_avail" class="form-checkbox">
                                    <label class="ml-2 text-gray-700 text-sm font-bold" for="ebook_avail">
                                        Tersedia dalam format E-Book
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="audiobook_avail" class="form-checkbox">
                                    <label class="ml-2 text-gray-700 text-sm font-bold" for="audiobook_avail">
                                        Tersedia dalam format Audio Book
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-6 border-t pt-4">
                        <button type="button" id="cancelButton"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded mr-2 focus:outline-none focus:shadow-outline">
                            Batal
                        </button>
                        <button type="submit"
                            class="btn-primary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Simpan Buku
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>