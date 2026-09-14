<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Myainventory — Sistem Manajemen Inventaris Lab Komputer</title>
    <link rel="icon" href="{{ asset('icons/Logo-Myainventory.svg') }}">

    {{-- Google Fonts: Plus Jakarta Sans & Cormorant Garmond Serif Italic --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Instal Tailwind CSS v4 --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0A0D0E;
            /* Ultra-modern Dark Mode */
            color: #F3F4F6;
        }

        .font-serif-italic {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
        }

        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0A0D0E;
        }

        ::-webkit-scrollbar-thumb {
            background: #1E2628;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #D4F933;
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden selection:bg-[#D4F933] selection:text-black">

    {{-- 1. Navbar Glassmorphism --}}
    <nav class="fixed top-6 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-black/40 backdrop-blur-md border border-white/10 rounded-full px-6 py-3 flex items-center justify-between">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                    <i class='bx bx-cube text-[#D4F933] text-2xl group-hover:scale-110 transition-transform'></i>
                    <span
                        class="text-[#D4F933] font-serif-italic font-semibold text-xl tracking-wide">Myainventory</span>
                </a>

                {{-- Menu Navbar --}}
                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-400">
                    <a href="{{ url('/') }}" class="text-white transition-colors">Beranda</a>
                    <a href="{{ route('products.index') }}" class="hover:text-[#D4F933] transition-colors">
                        Daftar Barang
                    </a>
                    <a href="{{ route('products.create') }}" class="hover:text-[#D4F933] transition-colors">
                        Tambah Barang
                    </a>
                    <a href="#statistik" class="hover:text-[#D4F933] transition-colors">Statistik</a>
                    <a href="#faq" class="hover:text-[#D4F933] transition-colors">FAQ</a>
                </div>

                {{-- Right Button --}}
                <a href="{{ route('products.index') }}"
                    class="hidden sm:flex items-center gap-1 bg-[#D4F933] text-black hover:bg-[#B8E600] px-6 py-3 rounded-full text-sm font-semibold transition-all">
                    Daftar Inventaris <i class='bx bx-cube-alt text-lg'></i>
                </a>

                {{-- Mobile Menu Toogle --}}
                <button class="md:hidden text-white text-2xl">
                    <i class='bx bx-menu'></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    {{-- 10. Footer --}}
    <footer class="border-t border-white/10 bg-[#0A0D0E] pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">

                {{-- Kolom 1: Brand --}}
                <div class="lg:col-span-2">
                    <a href="#" class="flex items-center gap-2 mb-4">
                        <i class='bx bx-cube text-[#D4F933] text-2xl'></i>
                        <span class="text-white font-serif-italic font-bold text-xl">
                            Myainventory
                        </span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                        Sistem Manajemen Inventaris Lab Komputer Sekolah yang Terstruktur & Modern. Pantau stok,
                        spesifikasi, dan kondisi unit secara real-time.
                    </p>
                </div>

                {{-- Kolom 2: Navigasi --}}
                <div>
                    <h3 class="text-white font-semibold mb-4">Navigasi</h3>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-[#D4F933] transition">Beranda</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-[#D4F933] transition">Daftar
                                Barang</a></li>
                        <li><a href="{{ route('products.create') }}" class="hover:text-[#D4F933] transition">Tambah
                                Barang</a></li>
                        <li><a href="#how-it-works" class="hover:text-[#D4F933] transition">Cara Kerja</a></li>
                    </ul>
                </div>

                {{-- Kolom 3: Fitur --}}
                <div>
                    <h3 class="text-white font-semibold mb-4">Features</h3>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li>CRUD Product</li>
                        <li>Validasi Input Real-time</li>
                        <li>Pencarian Barang</li>
                        <li>Statistik Lab</li>
                    </ul>
                </div>

                {{-- Kolom 4: Tech Stack & Contact --}}
                <div>
                    <h3 class="text-white font-semibold mb-4">Tech Stack & Contact</h3>
                    <ul class="space-y-3 text-sm text-gray-400 mb-6">
                        <li>Laravel 13, MySQL</li>
                        <li>Tailwind CSS v4, Blade</li>
                    </ul>
                    <a href="mailto:admin@inventaris.sch.id"
                        class="flex items-center gap-2 text-sm text-white hover:text-[#D4F933] transition">
                        <i class='bx bx-envelope'></i> mahayana@gmail.com
                    </a>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-xs">
                    © 2026 Myainventory. Dibuat untuk Sistem Inventaris Lab Komputer Sekolah.
                </p>
                <div class="flex gap-4 text-gray-500">
                    <a href="#" class="hover:text-white transition"><i class='bx bxl-github text-lg'></i></a>
                    <a href="#" class="hover:text-white transition"><i class='bx bx-globe text-lg'></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
