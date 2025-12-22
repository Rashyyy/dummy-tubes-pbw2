<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pesanan Masuk') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex gap-4 mb-6">
                <button class="px-4 py-2 bg-indigo-600 text-white rounded-full text-xs font-bold">Semua</button>
                <button class="px-4 py-2 bg-white text-gray-600 rounded-full text-xs font-bold shadow-sm border border-gray-100">Perlu Dikirim</button>
                <button class="px-4 py-2 bg-white text-gray-600 rounded-full text-xs font-bold shadow-sm border border-gray-100">Selesai</button>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl border border-gray-100">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Penyewa</th>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Kostum</th>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase text-center">Durasi</th>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Total</th>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Status</th>
                            <th class="p-4 text-xs font-bold text-gray-400 uppercase text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach ([
                            ['user' => 'Budi Santoso', 'item' => 'Furina Set', 'days' => '3 Hari', 'total' => 'Rp 180.000', 'status' => 'Dibayar'],
                            ['user' => 'Siti Aminah', 'item' => 'Raiden Shogun', 'days' => '2 Hari', 'total' => 'Rp 200.000', 'status' => 'Perlu Dikirim'],
                            ['user' => 'Rizky Amalia', 'item' => 'Kafuka HSR', 'days' => '3 Hari', 'total' => 'Rp 175.000', 'status' => 'Selesai'],
                        ] as $order)
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="p-4">
                                <div class="font-bold text-gray-900 text-sm">{{ $order['user'] }}</div>
                                <div class="text-[10px] text-gray-400 font-mono tracking-tight uppercase">ORD-2025-{{ rand(1000, 9999) }}</div>
                            </td>
                            <td class="p-4 text-sm text-gray-600 font-medium">{{ $order['item'] }}</td>
                            <td class="p-4 text-sm text-gray-600 text-center">{{ $order['days'] }}</td>
                            <td class="p-4 text-sm font-bold text-indigo-600">{{ $order['total'] }}</td>
                            <td class="p-4">
                                @if($order['status'] == 'Dibayar')
                                    <span class="px-2 py-1 bg-blue-100 text-blue-700 text-[10px] font-black rounded-lg uppercase">Paid</span>
                                @elseif($order['status'] == 'Perlu Dikirim')
                                    <span class="px-2 py-1 bg-orange-100 text-orange-700 text-[10px] font-black rounded-lg uppercase italic">Shipping</span>
                                @else
                                    <span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-black rounded-lg uppercase">Done</span>
                                @endif
                            </td>
                            <td class="p-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <button class="bg-gray-900 text-white px-3 py-1.5 rounded-lg text-[10px] font-bold hover:bg-indigo-600 transition">Konfirmasi</button>
                                    <button class="border border-gray-200 text-gray-400 px-3 py-1.5 rounded-lg text-[10px] font-bold hover:bg-gray-50 transition">Detail</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <p class="mt-6 text-center text-xs text-gray-400 italic font-medium">
                *Pesanan yang masuk otomatis terintegrasi dengan Midtrans Sandbox
            </p>
        </div>
    </div>
</x-app-layout>