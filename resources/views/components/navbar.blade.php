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
