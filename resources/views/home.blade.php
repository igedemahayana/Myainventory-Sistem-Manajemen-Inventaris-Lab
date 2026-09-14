@extends('layouts.app')

@section('content')
    {{-- 2. Hero Section --}}
    <section class="relative pt-40 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">

        {{-- Background Gradient Effect --}}
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-[#D4F933]/10 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                <i class='bx bx-cube text-[#D4F933]'></i> Kelola Inventaris Hanya Lewat 1 Website
            </div>
            <h1
                class="text-5xl md:text-6xl lg:text-7xl font-bold text-white tracking-tight mb-6 max-w-4xl mx-auto leading-tight">
                Kelola Inventaris Lab Komputer Sekolah Jadi <br class="hidden md:block">
                <span class="font-serif-italic text-[#D4F933] font-normal text-6xl md:text-7xl lg:text-8xl">Lebih
                    Terstruktur</span>
            </h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Tidak perlu lagi pencatatan manual di buku atau spreadsheet. Pantau stok monitor, PC, keyboard, hingga
                komponen jaringan secara real-time langsung dari dashboard lab.
            </p>
            {{-- CTA Button --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('products.index') }}"
                    class="flex items-center gap-2 bg-[#D4F933] hover:bg-[#B8E600] text-black px-8 py-4 rounded-full font-semibold text-sm transition-transform hover:scale-105">
                    Kelola Barang Sekarang <i class='bx bx-right-arrow-alt text-2xl'></i>
                </a>
                <div
                    class="flex items-center gap-2 px-8 py-4 rounded-full border border-white/10 bg-white/5 text-gray-300 text-sm">
                    +500 Unit Perangkat Sudah Terdata
                    <i class="bx bx-box text-white"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Sponsor Banner --}}
    <section class="border-y border-white/5 bg-white/[0.02] py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center font-bold text-gray-400 mb-6 text-2xl">Terintegrasi untuk berbagai laboratorium
                komputer sekolah</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 grayscale opacity-60">
                <span class="font-semibold text-xl text-white tracking-widest">LAB RPL</span>
                <span class="font-semibold text-xl text-white tracking-widest">LAB TKJ</span>
                <span class="font-semibold text-xl text-white tracking-widest">MULTIMEDIA</span>
                <span class="font-semibold text-xl text-white tracking-widest">IT DEPARTEMENT</span>
                <span class="font-semibold text-xl text-white tracking-widest">SERVER ROOM</span>
            </div>
        </div>
    </section>

    {{-- 4. About Section --}}
    <section class="py-24 border-t border-white/5 bg-[#0A0D0E]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25">
            <div class="flex flex-col lg:flex-row gap-16 items-center">

                <div class="lg:w-1/2">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                        <i class='bx bx-cube text-[#D4F933]'></i> Tentang Myainventory
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Tentang <br> <span class="font-serif-italic text-[#D4F933]">Myainventory</span>
                    </h2>
                    <p class="text-gray-400 text-lg mb-6 leading-relaxed">
                        Myainventory lahir untuk mengatasi kendala pencatatan inventaris lab komputer sekolah yang selama
                        ini tersebar di spreadsheet.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">
                        Setiap penambahan barang baru, perubahan stok, hingga spesifikasi teknis terekam secara efisien
                        dalam satu ekosistem berbasis MySQL.
                    </p>
                </div>

                <div class="lg:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-4">

                    {{-- Card 1 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:border-[#D4F933]/50 transition">
                        <i class='bx bx-archive-in text-2xl text-[#D4F933] mb-3'></i>
                        <h4 class="text-white font-semibold mb-2">
                            Data Terpusat
                        </h4>
                        <p class="text-sm text-gray-500">
                            Semua unit PC dan komponen tersimpan rapi dalam satu database MySQL.
                        </p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:border-[#D4F933]/50 transition">
                        <i class='bx bx-check-shield text-2xl text-[#D4F933] mb-3'></i>
                        <h4 class="text-white font-semibold mb-2">
                            Validasi Strict
                        </h4>
                        <p class="text-sm text-gray-500">
                            Sistem mencegah kesalahan pengisian jumlah stok dan deskripsi barang.
                        </p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:border-[#D4F933]/50 transition">
                        <i class='bx bx-search-alt text-2xl text-[#D4F933] mb-3'></i>
                        <h4 class="text-white font-semibold mb-2">
                            Pencarian Cepat
                        </h4>
                        <p class="text-sm text-gray-500">
                            Temukan lokasi dan status perangkat hanya dalam hitungan detik.
                        </p>
                    </div>

                    {{-- Card 4 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:border-[#D4F933]/50 transition">
                        <i class='bx bx-mobile-alt text-2xl text-[#D4F933] mb-3'></i>
                        <h4 class="text-white font-semibold mb-2">
                            Akses Multi-Device
                        </h4>
                        <p class="text-sm text-gray-500">
                            Tampilan responsif di PC lab, tablet, maupun smartphone petugas.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 5. Feature Section --}}
    <section id="statistik" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                    <i class='bx bx-cube text-[#D4F933]'></i>
                    Apa Saja Fitur yang diberikan Myainventory?
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Sistem Inventaris Lab <br>
                    <span class="font-serif-italic text-5xl md:text-6xl text-gray-300">
                        yang Cerdas & Presisi
                    </span>
                </h2>
                <p class="text-gray-400 text-lg">
                    Nikmati kemudahan pengelolaan data peralatan lab melalui fitur
                    terintegrasi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Card 1 Lime Green Solid --}}
                <div
                    class="bg-[#D4F933] rounded-[2rem] p-8 flex flex-col justify-between text-black transition-transform hover:-translate-y-2">
                    <div>
                        <div class="bg-black/10 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                            <i class='bx bx-archive-in text-3xl'></i>
                        </div>
                        <h3 class="font-serif-italic text-3xl font-semibold mb-4">
                            Manajemen CRUD Efisien
                        </h3>
                    </div>
                    <p class="font-medium text-black/80">
                        Ubah, tambah, dan hapus data perangkat lab komputer dengan validasi instan.
                    </p>
                </div>

                <!-- Card 2 (Dark Glass Card) -->
                <div
                    class="bg-white/5 border border-white/10 backdrop-blur-lg rounded-[2rem] p-8 flex flex-col justify-between text-white transition-transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4F933]/10 rounded-full blur-3xl"></div>
                    <div class="relative z-10">
                        <div class="bg-white/10 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                            <i class='bx bx-slider-alt text-3xl text-[#D4F933]'></i>
                        </div>
                        <h3 class="font-serif-italic text-3xl font-semibold mb-4">
                            Spesifikasi & Detail Akurat
                        </h3>
                    </div>
                    <p class="text-gray-400 relative z-10">Catat tipe, resolusi, konektivitas, dan detail teknis unit secara
                        rinci.

                    </p>
                </div>

                <!-- Card 3 (Dark Minimalist) -->
                <div
                    class="bg-white/5 border border-white/5 rounded-[2rem] p-8 flex flex-col justify-between text-white transition-transform hover:-translate-y-2">
                    <div>
                        <div class="bg-white/10 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                            <i class='bx bx-devices text-3xl text-white'></i>
                        </div>
                        <h3 class="font-serif-italic text-3xl font-semibold mb-4">
                            Monitoring Stok Real-Time
                        </h3>
                    </div>
                    <p class="text-gray-400">
                        Pantau ketersediaan jumlah barang lab secara transparan tanpa khawatir selisih data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. Cara Kerja Section --}}
    <section id="how-it-works" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-16">
                3 Langkah <span class="font-serif-italic text-[#D4F933]">Mudah Mengelola</span> Inventaris Lab
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                {{-- Connecting Line (For Desktop) --}}
                <div
                    class="hidden md:block absolute top-12 left-1/6 right-1/6 h-0.5 bg-gradient-to-r from-transparent via-[#D4F933]/30 to-transparent -z-10">
                </div>

                {{-- Steps --}}
                <div class="flex flex-col items-center">
                    <div
                        class="w-24 h-24 rounded-full bg-white/5 border border-[#D4F933]/30 flex items-center justify-center mb-6 shadow-[0_0_30px_rgba(212,249,51,0.1)]">
                        <i class='bx bx-plus-circle text-4xl text-[#D4F933]'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">
                        1. Input Data Barang
                    </h3>
                    <p class="text-gray-400 text-sm max-w-xs">
                        Masukkan nama barang, spesifikasi teknis, dan jumlah unit ke dalam form.</p>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-24 h-24 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-6">
                        <i class='bx bx-edit-alt text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">
                        2. Perbarui Stok & Detail
                    </h3>
                    <p class="text-gray-400 text-sm max-w-xs">Lakukan update jumlah atau spesifikasi sesuai kondisi fisik
                        dilab.</p>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-24 h-24 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-6">
                        <i class='bx bx-search-alt text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">
                        3. Pantau & Cari Barang
                    </h3>
                    <p class="text-gray-400 text-sm max-w-xs">Cari data barang berdasarkan nama dengan cepat untuk kebutuhan
                        audit.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. Testimonial Section --}}
    <section class="py-24 bg-white/[0.02] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                <i class='bx bx-cube text-[#D4F933]'></i> Lihat Tanggapan mereka tentang Myainventory
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Apa Kata <span class="`font-serif-italic text-[#D4F933]">Mereka</span> Tentang Myainventory
            </h2>
            <p class="text-gray-400 text-lg mb-16">
                Dipercaya oleh pengelola lab komputer untuk kerapian administrasi aset.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                {{-- Testimonial 1 --}}
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl backdrop-blur-sm">
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">"Proses input spesifikasi PC sangat cepat. Fitur
                        edit dan hapusnya bekerja secara seamless."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-white font-bold">
                            A
                        </div>
                        <div>
                            <h5 class="text-white font-medium">Agastya Tanjung</h5>
                            <span class="text-xs text-gray-500">UI Designer</span>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="bg-[#D4F933] p-8 rounded-3xl text-black">
                    <p class="text-black/80 font-medium text-lg mb-6 leading-relaxed">"Pencatatan monitor dan keyboard lab
                        jadi jauh lebih rapi. Tidak ada lagi stok yang hilang tanpa terdata."</p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-[#D4F933] font-bold">
                            M
                        </div>
                        <div>
                            <h5 class="text-black font-bold">Myaarum</h5>
                            <span class="text-xs text-black/70">Digital Ilustrator</span>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl backdrop-blur-sm">
                    <p class="text-indigo-200 text-lg mb-6 leading-relaxed">
                        "Validasi formulirnya membantu mencegah error
                        saat menginput jumlah barang baru ke dalam sistem."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-white font-bold">
                            G
                        </div>
                        <div>
                            <h5 class="text-white font-medium">
                                Gung Indi
                            </h5>
                            <span class="text-xs text-indigo-300">
                                Duta SMA Provinsi Bali
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 8. FAQ Section --}}
    <section id="faq" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-25">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <div class="lg:col-span-4">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                        <i class='bx bx-message text-[#D4F933]'></i> Pertanyaan yang Sering Ditanyakan
                    </div>
                    <h2 class="text-4xl font-bold text-white mb-6">Temukan<br><span
                            class="font-serif-italic text-gray-400">Jawaban Kamu disini</span></h2>
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 mt-8">
                        <h4 class="text-white font-semibold mb-2">
                            Ada Pertanyaan Seputar Lab?
                        </h4>
                        <p class="text-sm text-gray-400 mb-6">
                            Tim teknis dan admin inventaris kami siap membantu penyusunan database lab.
                        </p>
                        <a href="mailto:admin@inventaris.sch.id"
                            class="inline-flex items-center gap-2 text-[#D4F933] border border-[#D4F933] hover:bg-[#D4F933] hover:text-black transition px-4 py-2 rounded-full text-sm font-medium">
                            <i class='bx bx-envelope'></i> Hubungi Kami Disini
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-4">
                    {{-- FAQ 1 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <h4 class="text-white font-semibold text-lg mb-2">
                            Apakah Myainventory gratis digunakan untuk lab sekolah?</h4>
                        <p class="text-gray-400">
                            Ya, sistem ini dirancang khusus untuk manajemen internal lab komputer sekolah tanpa biaya
                            tambahan.
                        </p>
                    </div>

                    {{-- FAQ 2 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <h4 class="text-white font-semibold text-lg mb-2">
                            Bagaimana cara mengubah atau menghapus data barang?</h4>
                        <p class="text-gray-400">
                            Petugas dapat menggunakan tombol aksi Edit atau Delete pada tabel daftar barang, lengkap dengan
                            konfirmasi keamanan.
                        </p>
                    </div>

                    {{-- FAQ 3 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <h4 class="text-white font-semibold text-lg mb-2">
                            Apakah spesifikasi barang bisa mencantumkan detail teknis lengkap?
                        </h4>
                        <p class="text-gray-400">
                            Sangat bisa. Kolom spesifikasi (string/text) memungkinkan penulisan detail merek, seri,
                            resolusi, hingga kapasitas sesuai entitas Product.
                        </p>
                    </div>

                    {{-- FAQ 4 --}}
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <h4 class="text-white font-semibold text-lg mb-2">
                            Apakah sistem ini mendukung pencarian barang?
                        </h4>
                        <p class="text-gray-400">
                            Ya, tersedia fitur pencarian cepat berdasarkan nama barang untuk mempermudah pengecekan stok
                            saat audit bulanan.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 9. CTA Section --}}
    <section class="pb-24 pt-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-25">
            <div
                class="relative bg-white/5 border border-white/10 rounded-[3rem] p-12 md:p-20 text-center overflow-hidden">

                {{-- Glow effect behind text --}}
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-[#D4F933]/20 rounded-full blur-[80px]">
                </div>

                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm text-gray-300 mb-8">
                        <i class='bx bx-cube text-[#D4F933]'></i> Kelola Inventaris Kamu Sekarang
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Siap Merapikan Data <br> <span class="font-serif-italic text-[#D4F933]">Inventaris Lab</span>
                        Sekolahmu?
                    </h2>
                    <p class="text-gray-400 text-lg mb-10 max-w-xl mx-auto">
                        Mulai masukkan data barang lab hari ini dan rasakan kemudahan mengelola aset sekolah dalam satu
                        dashboard terpadu.
                    </p>
                    <a href="{{ route('products.index') }}"
                        class="inline-flex items-center gap-2 bg-[#D4F933] text-black px-8 py-4 rounded-full font-bold text-sm hover:bg-white hover:scale-105 transition-all">
                        Buka Daftar Barang <i class='bx bx-right-arrow-alt text-xl'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
