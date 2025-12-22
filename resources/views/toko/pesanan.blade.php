<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-900 leading-tight">
                {{ __('Riwayat Sewa Kostum') }}
            </h2>
            <span class="bg-indigo-50 text-indigo-700 text-xs font-bold px-3 py-1 rounded-lg border border-indigo-100">
                3 Pesanan Aktif
            </span>
        </div>
    </x-slot>

    <div class="py-12 bg-[#F9FBFF] min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            
            <div class="space-y-8">
                @foreach(range(1, 3) as $order)
                <div class="bg-white rounded-[2.5rem] shadow-[0_15px_40px_rgba(0,0,0,0.03)] border border-gray-100 overflow-hidden hover:shadow-[0_20px_50px_rgba(79,70,229,0.08)] transition-all duration-500">
                    
                    <div class="px-8 py-5 bg-gray-50/50 border-b border-gray-100 flex flex-wrap justify-between items-center gap-4">
                        <div class="flex items-center gap-4">
                            <div class="h-10 w-10 bg-white rounded-xl shadow-sm flex items-center justify-center border border-gray-100">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Transaction ID</p>
                                <p class="text-sm font-black text-gray-800 tracking-tight">COS-{{ 2023000 + $order }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-1.5 rounded-2xl border border-emerald-100">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span class="text-xs font-black uppercase tracking-tighter">Dalam Masa Sewa</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex flex-col md:flex-row gap-8">
                            <div class="relative group">
                                <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-[2rem] overflow-hidden shadow-inner flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="absolute -top-2 -right-2 bg-indigo-600 text-white text-[10px] font-bold w-8 h-8 flex items-center justify-center rounded-full border-4 border-white">
                                    1x
                                </div>
                            </div>

                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="text-xl font-black text-gray-900 mb-1">Furina Set Fullset <span class="text-indigo-600">- Size M</span></h4>
                                        <p class="text-sm font-medium text-gray-500">Store: <span class="text-gray-800">Moe-Moe Cosplay Official</span></p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-[10px] text-gray-400 font-bold uppercase">Total Payment</p>
                                        <p class="text-xl font-black text-indigo-600">Rp 450.000</p>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <div class="flex justify-between text-[10px] font-bold uppercase text-gray-400 mb-2">
                                        <span>20 Okt (Mulai)</span>
                                        <span class="text-indigo-600 italic">Sisa 2 Hari Lagi</span>
                                        <span>23 Okt (Kembali)</span>
                                    </div>
                                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                                        <div class="bg-gradient-to-r from-indigo-500 to-purple-500 h-full w-1/3 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-dashed border-gray-200">
                            <div class="flex items-center gap-2 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs font-medium">Update terakhir: 5 menit yang lalu</span>
                            </div>
                            
                            <div class="flex gap-4">
                                <button class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-indigo-600 transition-colors">
                                    Detail Pesanan
                                </button>
                                <button class="bg-gray-900 text-white px-8 py-3 rounded-2xl text-sm font-bold hover:bg-indigo-600 hover:shadow-[0_10px_20px_rgba(79,70,229,0.3)] transition-all active:scale-95">
                                    Hubungi Owner
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>