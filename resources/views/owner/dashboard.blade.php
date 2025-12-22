<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Owner - Moe-Moe Cosplay') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Pendapatan (Bulan Ini)</p>
                    <h4 class="text-2xl font-black text-gray-900">Rp 4.250.000</h4>
                    <div class="mt-4 flex items-center gap-2 text-green-600 text-xs font-bold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        12% Meningkat
                    </div>
                </div>

                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500 mb-1">Kostum Sedang Disewa</p>
                    <h4 class="text-2xl font-black text-gray-900">18 <span class="text-sm text-gray-400 font-normal">/
                            25 Unit</span></h4>
                    <div class="mt-5 w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 72%"></div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500 mb-1">Menunggu Konfirmasi</p>
                    <h4 class="text-2xl font-black text-orange-500">5 <span
                            class="text-sm text-gray-400 font-normal">Pesanan</span></h4>
                    <div class="mt-4">
                        <a href="#" class="text-xs font-bold text-indigo-600 hover:underline">Lihat Semua
                            &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                <h3 class="font-bold text-gray-900 mb-6">Grafik Penyewaan (7 Hari Terakhir)</h3>
                <div class="flex items-end justify-between h-40 gap-2">
                    @foreach ([40, 70, 55, 90, 65, 80, 100] as $height)
                        <div class="flex-1 flex flex-col items-center gap-2">
                            <div class="w-full bg-indigo-100 rounded-t-lg hover:bg-indigo-500 transition-all duration-300"
                                style="height: {{ $height }}%"></div>
                            <span class="text-[10px] font-bold text-gray-400">H-{{ 7 - $loop->index }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div
                class="bg-indigo-100 p-8 rounded-2xl shadow-sm border border-indigo-200 text-black mb-8 flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-extrabold text-black">Siap menambah koleksi baru?</h3>
                    <p class="text-gray-700">Update katalog kamu agar penyewa semakin tertarik.</p>
                </div>
                <a href="{{ route('owner.produk') }}"
                    class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-md">
                    Kelola Produk
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
