@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white tracking-tight">Daftar Barang Inventaris</h1>
                <p class="text-gray-400 text-sm mt-1">Kelola dan pantau seluruh unit perangkat lab komputer sekolah.</p>
            </div>
            <a href="{{ route('products.create') }}"
                class="inline-flex items-center justify-center gap-2 bg-[#D4F933] text-black hover:bg-[#B8E600] px-5 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-lg shadow-[#D4F933]/10">
                <i class='bx bx-plus text-lg'></i> Tambah Barang Baru
            </a>
        </div>

        <!-- Flash Message Success -->
        @if (session('success'))
            <div
                class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center gap-3 text-sm">
                <i class='bx bx-check-circle text-xl'></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Table Card -->
        <div class="bg-[#121618] border border-white/10 rounded-2xl overflow-hidden shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white/10 text-gray-400 text-xs uppercase tracking-wider bg-white/[0.02]">
                            <th class="py-4 px-6 font-semibold">No</th>
                            <th class="py-4 px-6 font-semibold">Nama Barang</th>
                            <th class="py-4 px-6 font-semibold">Spesifikasi</th>
                            <th class="py-4 px-6 font-semibold text-center">Jumlah Unit</th>
                            <th class="py-4 px-6 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5 text-sm">
                        @forelse($products as $index => $product)
                            <tr class="hover:bg-white/[0.02] transition-colors">
                                <td class="py-4 px-6 text-gray-500">{{ $index + 1 }}</td>
                                <td class="py-4 px-6 font-medium text-white">{{ $product->nama }}</td>
                                <td class="py-4 px-6 text-gray-400">{{ $product->spesifikasi }}</td>
                                <td class="py-4 px-6 text-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-white/5 text-[#D4F933] border border-white/10">
                                        {{ $product->jumlah }} Unit
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="p-2 rounded-lg bg-white/5 text-gray-300 hover:text-white hover:bg-white/10 transition"
                                            title="Edit">
                                            <i class='bx bx-edit text-base'></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data barang ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20 transition"
                                                title="Hapus">
                                                <i class='bx bx-trash text-base'></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-gray-500">
                                    <i class='bx bx-folder-open text-4xl mb-2 block'><span>Belum ada data barang
                                            inventaris.</span></i>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
