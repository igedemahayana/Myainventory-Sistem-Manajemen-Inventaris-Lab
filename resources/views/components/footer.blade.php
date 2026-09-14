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
