<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Jelajahi Toko Cosplay') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="text-center mb-12">
                <h1 class="text-3xl font-extrabold text-gray-900 mb-4">Pilih Rental Terpercaya Kamu</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan koleksi kostum terbaik dari berbagai rental lokal di daerahmu dengan harga bersahabat.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(range(1, 6) as $toko)
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="h-32 bg-gradient-to-r from-indigo-500 to-purple-600 relative">
                        <div class="absolute -bottom-6 left-6">
                            <div class="w-16 h-16 bg-white rounded-2xl shadow-md p-1">
                                <div class="w-full h-full bg-gray-200 rounded-xl flex items-center justify-center text-gray-400 font-bold">
                                    T{{ $toko }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-10">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition">Moe-Moe Cosplay #{{ $toko }}</h3>
                            <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded-full uppercase">Verified</span>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                            Spesialis kostum Genshin Impact & Anime Seasonal. Kualitas Premium, harga pelajar!
                        </p>

                        <div class="flex items-center gap-4 mb-6 text-sm text-gray-400">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-gray-700 font-bold">4.8</span>
                            </div>
                            <span>•</span>
                            <span>120+ Produk</span>
                        </div>

                        <a href="{{ route('toko.show', $toko) }}" 
                           class="block w-full text-center bg-gray-900 text-white py-3 rounded-xl font-bold hover:bg-indigo-600 transition shadow-lg shadow-gray-200 hover:shadow-indigo-200">
                            Kunjungi Toko
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>