@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">

        <div class="mb-8">
            <a href="{{ route('products.index') }}"
                class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-white transition mb-4">
                <i class='bx bx-arrow-back'><span>Kembali ke Daftar</span></i>
            </a>
            <h1 class="text-3xl font-bold text-white tracking-tight">Edit Data Barang</h1>
            <p class="text-gray-400 text-sm mt-1">Perbarui informasi spesifikasi atau jumlah unit barang.</p>
        </div>

        <div class="bg-[#121618] border border-white/10 rounded-2xl p-6 sm:p-8 shadow-xl">
            <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Nama Barang --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nama Barang</label>
                    <input type="text" name="nama" value="{{ old('nama', $product->nama) }}"
                        class="w-full bg-[#0A0D0E] border {{ $errors->has('nama') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-[#D4F933] transition">
                    @error('nama')
                        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Spesifikasi --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Spesifikasi / Deskripsi</label>
                    <input type="text" name="spesifikasi" value="{{ old('spesifikasi', $product->spesifikasi) }}"
                        class="w-full bg-[#0A0D0E] border {{ $errors->has('spesifikasi') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-[#D4F933] transition">
                    @error('spesifikasi')
                        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Jumlah --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Jumlah Unit</label>
                    <input type="number" name="jumlah" value="{{ old('jumlah', $product->jumlah) }}" min="0"
                        class="w-full bg-[#0A0D0E] border {{ $errors->has('jumlah') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-[#D4F933] transition">
                    @error('jumlah')
                        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end gap-4 pt-4 border-t border-white/10">
                    <a href="{{ route('products.index') }}"
                        class="px-5 py-2.5 rounded-xl text-sm font-medium text-gray-400 hover:text-white transition">Batal</a>
                    <button type="submit"
                        class="bg-[#D4F933] text-black hover:bg-[#B8E600] px-6 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-lg shadow-[#D4F933]/10">
                        Perbarui Data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
