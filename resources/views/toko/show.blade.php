<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Katalog: Moe-Moe Cosplay') }}
            </h2>
            <a href="{{ route('toko.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                &larr; Kembali ke Daftar Toko
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col md:flex-row gap-6">

            <div class="w-full md:w-1/4">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 sticky top-6">
                    <h3 class="font-bold text-gray-900 mb-4">Kategori</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="hover:text-indigo-600 cursor-pointer font-bold text-indigo-600">Semua Kostum</li>
                        <li class="hover:text-indigo-600 cursor-pointer">Genshin Impact</li>
                        <li class="hover:text-indigo-600 cursor-pointer">Anime Summer 2024</li>
                        <li class="hover:text-indigo-600 cursor-pointer">Aksesoris/Prop</li>
                    </ul>
                </div>
            </div>

            <div class="w-full md:w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Loop untuk memperbanyak card produk (Simulasi 12 Produk) --}}
                    @foreach (range(1, 12) as $item)
                        <div
                            class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition">

                            <div
                                class="w-full h-56 bg-gray-100 flex items-center justify-center border-b border-gray-100">
                                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>

                            <div class="p-4">
                                <h4 class="font-bold text-lg text-gray-900">Kostum Koleksi #{{ $item }}</h4>
                                <p class="text-sm text-gray-500">Size: M | Brand: Uwowo</p>
                                <div class="mt-4 flex items-center justify-between">
                                    <span class="text-indigo-600 font-bold text-sm">Rp 180.000/hari</span>
                                    <a href="{{ route('produk.detail', $item) }}"
                                        class="bg-gray-900 text-white px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-indigo-600 transition">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
