<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Kostum
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <div class="flex flex-col md:flex-row gap-8">

                    <div class="w-full md:w-1/2">
                        <img src="https://via.placeholder.com/500x700" alt="Kostum"
                            class="w-full rounded-lg shadow-md object-cover">
                    </div>

                    <div class="w-full md:w-1/2">
                        <span class="text-indigo-600 font-bold uppercase text-sm">Genshin Impact</span>
                        <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Furina - Fontaine Edition</h1>
                        <p class="text-2xl font-bold text-gray-800 mb-6">Rp 180.000 <span
                                class="text-sm text-gray-500 font-normal">/ 3 Hari (Standard)</span></p>

                        <div class="border-t border-b py-4 mb-6">
                            <h3 class="font-bold mb-2">Kelengkapan:</h3>
                            <ul class="list-disc list-inside text-gray-600 text-sm">
                                <li>Kostum Utama (Dress/Coat)</li>
                                <li>Wig (Styled)</li>
                                <li>Aksesoris Tangan & Kaki</li>
                                <li>Hat / Topi</li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h3 class="font-bold mb-2">Detail Ukuran:</h3>
                            <span class="px-4 py-2 bg-gray-100 rounded-md border text-sm">Size M (LD: 88-92cm)</span>
                        </div>

                        <div class="flex gap-4">
                            <a href="{{ route('pesanan.index') }}"
                                class="flex-1 bg-indigo-600 text-white text-center py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg">
                                Sewa via Midtrans
                            </a>
                            <button class="px-4 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                                💬 Chat Owner
                            </button>
                        </div>

                        <p class="mt-4 text-xs text-gray-400 italic">*Penyewaan memerlukan jaminan identitas (KTP/Kartu
                            Pelajar)</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
