<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Kostum Saya') }}
            </h2>
            <a href="{{ route('owner.produk.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-indigo-700">
                + Tambah Kostum
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="p-4 font-bold text-sm text-gray-600">Kostum</th>
                            <th class="p-4 font-bold text-sm text-gray-600">Kategori</th>
                            <th class="p-4 font-bold text-sm text-gray-600">Harga/Hari</th>
                            <th class="p-4 font-bold text-sm text-gray-600">Status</th>
                            <th class="p-4 font-bold text-sm text-gray-600 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 5) as $i)
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="p-4 flex items-center">
                                    <div class="w-10 h-10 bg-gray-200 rounded mr-3"></div>
                                    <span class="font-medium text-gray-900">Furina Set #{{ $i }}</span>
                                </td>
                                <td class="p-4 text-sm text-gray-600">Genshin Impact</td>
                                <td class="p-4 text-sm text-gray-900 font-bold">Rp 180.000</td>
                                <td class="p-4">
                                    <span
                                        class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full font-bold">Tersedia</span>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="text-indigo-600 hover:text-indigo-900 font-bold text-xs mr-3">Edit</button>
                                    <button class="text-red-600 hover:text-red-900 font-bold text-xs">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
