<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 leading-tight">
            {{ __('Explore Cosplay Universe') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#f8fafc] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="relative text-center mb-16">
                <div class="absolute inset-0 -top-10 flex justify-center opacity-10 blur-3xl -z-10">
                    <div class="w-64 h-64 bg-purple-400 rounded-full"></div>
                    <div class="w-64 h-64 bg-indigo-400 rounded-full ml-10"></div>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-4 tracking-tight">
                    Temukan <span class="text-indigo-600 italic">Persona</span> Terbaikmu
                </h1>
                <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
                    Koleksi kostum pilihan dari berbagai crafter & rental profesional untuk event impianmu.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach(range(1, 6) as $toko)
                <div class="group relative bg-white rounded-[2rem] p-4 border border-gray-100 shadow-[0_20px_50px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(79,70,229,0.15)] transition-all duration-500 hover:-translate-y-2">
                    
                    <div class="relative h-48 w-full overflow-hidden rounded-[1.5rem] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-700 group-hover:scale-110 transition-transform duration-700"></div>
                        
                        <div class="absolute top-4 right-4 backdrop-blur-md bg-white/20 border border-white/30 px-3 py-1 rounded-full">
                            <span class="text-xs font-semibold text-white tracking-wider uppercase">Verified Store</span>
                        </div>

                        <div class="absolute -bottom-4 left-6">
                            <div class="w-16 h-16 bg-white rounded-2xl p-1 shadow-lg group-hover:rotate-6 transition-transform">
                                <div class="w-full h-full bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 font-black text-xl">
                                    M{{ $toko }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-3 pb-4 pt-2">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-black text-gray-800 tracking-tight">Moe-Moe Cosplay</h3>
                            <div class="flex items-center bg-yellow-50 px-2 py-1 rounded-lg">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="ml-1 text-xs font-bold text-yellow-700">4.9</span>
                            </div>
                        </div>
                        
                        <p class="text-gray-400 text-sm mb-6 leading-snug">
                            "Menyediakan kostum premium dari Genshin hingga Valorant. Lokasi: Bandung."
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-white"></div>
                                <div class="pl-4 text-[10px] font-medium text-gray-400 self-center">+50 Kostum</div>
                            </div>
                            
                            <a href="{{ route('toko.show', $toko) }}" 
                               class="inline-flex items-center justify-center px-6 py-2.5 bg-indigo-600 text-white text-sm font-bold rounded-xl hover:bg-gray-900 shadow-[0_10px_20px_rgba(79,70,229,0.2)] transition-all active:scale-95">
                                Visit Store
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>