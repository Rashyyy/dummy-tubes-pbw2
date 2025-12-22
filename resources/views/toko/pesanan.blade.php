<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesanan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            
            <div class="space-y-6">
                @foreach(range(1, 3) as $order)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row justify-between border-b border-gray-50 pb-4 mb-4">
                            <div class="flex items-center gap-3">
                                <div class="bg-indigo-100 p-2 rounded-lg text-indigo-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase">No. Pesanan</p>
                                    <p class="text-sm font-bold text-gray-900">ORD-2023102{{ $order }}</p>
                                </div>
                            </div>
                            <div class="mt-2 md:mt-0 text-right">
                                <span class="px-4 py-1.5 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold uppercase tracking-wider">
                                    Sedang Disewa
                                </span>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="w-24 h-24 bg-gray-100 rounded-xl flex-shrink-0 flex items-center justify-center">
                                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>

                            <div class="flex-grow">
                                <h4 class="text-lg font-bold text-gray-900">Furina Set Fullset - Size M</h4>
                                <p class="text-sm text-gray-500">Toko: Moe-Moe Cosplay</p>
                                
                                <div class="mt-4 flex flex-wrap gap-6">
                                    <div>
                                        <p class="text-[10px] text-gray-400 font-bold uppercase">Tanggal Sewa</p>
                                        <p class="text-sm font-semibold text-gray-700">20 Okt 2023</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-400 font-bold uppercase">Durasi</p>
                                        <p class="text-sm font-semibold text-gray-700">3 Hari</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-400 font-bold uppercase">Total Bayar</p>
                                        <p class="text-sm font-bold text-indigo-600">Rp 450.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end gap-3 border-t border-gray-50 pt-4">
                            <button class="text-sm font-bold text-gray-500 hover:text-gray-700">Butuh Bantuan?</button>
                            <button class="bg-gray-900 text-white px-5 py-2 rounded-xl text-xs font-bold hover:bg-indigo-600 transition shadow-md">
                                Hubungi Owner
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>