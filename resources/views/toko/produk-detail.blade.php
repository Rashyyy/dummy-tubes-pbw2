<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition">Katalog</a>
            <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
            <h2 class="font-bold text-gray-800 leading-tight">Detail Produk</h2>
        </div>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">

                <div class="w-full lg:w-1/2 space-y-4">
                    <div class="relative group overflow-hidden rounded-[2.5rem] bg-gray-100 aspect-[3/4] shadow-2xl">
                        <img src="https://via.placeholder.com/600x800" alt="Kostum"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        
                        <div class="absolute top-6 left-6">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-2 rounded-2xl shadow-sm text-xs font-black text-indigo-600 uppercase tracking-widest">
                                Available Now
                            </span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-4 gap-4">
                        @foreach(range(1,4) as $thumb)
                        <div class="aspect-square rounded-2xl bg-gray-100 border-2 {{ $loop->first ? 'border-indigo-600' : 'border-transparent' }} overflow-hidden cursor-pointer">
                            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover opacity-60 hover:opacity-100">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col justify-center">
                    <div class="mb-6">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border border-indigo-100">
                                Genshin Impact
                            </span>
                            <div class="flex items-center text-yellow-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-gray-900 text-sm font-bold ml-1">4.9</span>
                                <span class="text-gray-400 text-xs font-medium ml-1">(42 Reviews)</span>
                            </div>
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-2 tracking-tighter">
                            Furina <span class="text-indigo-600 italic">Fontaine</span>
                        </h1>
                        <p class="text-gray-500 font-medium">By Moe-Moe Cosplay Store</p>
                    </div>

                    <div class="bg-gray-50 rounded-[2rem] p-6 mb-8 border border-gray-100">
                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-[0.2em] mb-1">Price Start From</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-black text-gray-900 tracking-tight">Rp 180.000</span>
                            <span class="text-gray-500 font-bold">/ 3 Hari</span>
                        </div>
                    </div>

                    <div class="space-y-6 mb-10">
                        <div>
                            <h3 class="text-sm font-black text-gray-900 uppercase tracking-widest mb-3 flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-indigo-600 rounded-full"></span>
                                Kelengkapan Fullset
                            </h3>
                            <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                                @foreach(['Kostum Utama', 'Wig Styled', 'Aksesoris Kaki', 'Topi Signature', 'Vision Prop', 'Sepatu (Opsional)'] as $item)
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    {{ $item }}
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-black text-gray-900 uppercase tracking-widest mb-3 flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-indigo-600 rounded-full"></span>
                                Size Info
                            </h3>
                            <div class="inline-flex items-center gap-4 bg-white border-2 border-indigo-600 px-5 py-3 rounded-2xl">
                                <span class="text-xl font-black text-indigo-600">M</span>
                                <div class="w-[1px] h-8 bg-gray-200"></div>
                                <div class="text-[10px] font-bold text-gray-400 uppercase leading-tight">
                                    Lingkar Dada<br><span class="text-sm text-gray-800">88 - 92 cm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('pesanan.index') }}"
                           class="flex-[2] bg-gray-900 text-white text-center py-5 rounded-[1.5rem] font-black text-lg hover:bg-indigo-600 transition-all shadow-xl shadow-gray-200 hover:shadow-indigo-200 active:scale-95">
                           Sewa Sekarang
                        </a>
                        <button class="flex-1 px-6 py-5 border-2 border-gray-100 rounded-[1.5rem] font-bold text-gray-700 hover:bg-gray-50 transition flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            Chat
                        </button>
                    </div>

                    <p class="mt-6 text-[10px] text-center text-gray-400 font-bold uppercase tracking-widest">
                        🛡️ Jaminan Keamanan Transaksi via Midtrans
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>