<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Control Panel') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-3xl shadow-sm border-l-4 border-indigo-600">
                    <p class="text-xs font-bold text-gray-400 uppercase">Total Transaksi (All)</p>
                    <h4 class="text-2xl font-black text-gray-900">Rp 128.500.000</h4>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border-l-4 border-green-500">
                    <p class="text-xs font-bold text-gray-400 uppercase">Toko Aktif</p>
                    <h4 class="text-2xl font-black text-gray-900">42 <span class="text-sm font-normal text-gray-400">Vendor</span></h4>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border-l-4 border-orange-500">
                    <p class="text-xs font-bold text-gray-400 uppercase">Total User</p>
                    <h4 class="text-2xl font-black text-gray-900">1.205 <span class="text-sm font-normal text-gray-400">Akun</span></h4>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border-l-4 border-red-500">
                    <p class="text-xs font-bold text-gray-400 uppercase">Laporan Kendala</p>
                    <h4 class="text-2xl font-black text-red-600">3 <span class="text-sm font-normal text-gray-400">Tiket</span></h4>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                        <h3 class="font-black text-gray-900 italic uppercase text-sm tracking-widest">Verifikasi Toko Baru</h3>
                        <span class="bg-orange-100 text-orange-600 text-[10px] px-2 py-1 rounded-full font-bold">2 Menunggu</span>
                    </div>
                    <div class="p-0">
                        <table class="w-full text-left">
                            <tbody class="divide-y divide-gray-50">
                                @foreach(['Toko Wibu Jaya', 'Cosplay Rental Indo'] as $toko)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="p-4 flex items-center gap-3">
                                        <div class="w-10 h-10 bg-indigo-100 rounded-xl flex items-center justify-center font-bold text-indigo-600">{{ substr($toko, 0, 1) }}</div>
                                        <span class="text-sm font-bold text-gray-800">{{ $toko }}</span>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex gap-2">
                                            <button class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-[10px] font-bold">Approve</button>
                                            <button class="bg-gray-100 text-gray-400 px-3 py-1.5 rounded-lg text-[10px] font-bold">Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="p-6 border-b border-gray-50">
                        <h3 class="font-black text-gray-900 italic uppercase text-sm tracking-widest">Aktivitas Midtrans</h3>
                    </div>
                    <div class="p-4 space-y-4">
                        @foreach([1, 2, 3] as $log)
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-2xl">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-xs font-bold text-gray-700">ORD-{{ rand(100,999) }} Berhasil Dibayar</span>
                            </div>
                            <span class="text-[10px] text-gray-400 italic">2 Menit yang lalu</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>