<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Pengguna (Admin)') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Daftar Semua Akun</h3>
                    <p class="text-sm text-gray-500">Kelola role dan status akses pengguna aplikasi.</p>
                </div>
                <div class="flex gap-2">
                    <button class="bg-white border border-gray-200 px-4 py-2 rounded-xl text-xs font-bold shadow-sm hover:bg-gray-50">Export PDF</button>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-xl text-xs font-bold shadow-sm hover:bg-indigo-700">+ Tambah Admin</button>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="p-4 text-[10px] font-black text-gray-400 uppercase tracking-widest">Informasi User</th>
                            <th class="p-4 text-[10px] font-black text-gray-400 uppercase tracking-widest">Role</th>
                            <th class="p-4 text-[10px] font-black text-gray-400 uppercase tracking-widest">Status</th>
                            <th class="p-4 text-[10px] font-black text-gray-400 uppercase tracking-widest">Bergabung</th>
                            <th class="p-4 text-[10px] font-black text-gray-400 uppercase text-center tracking-widest">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach ([
                            ['name' => 'Admin Utama', 'email' => 'admin@rentcos.com', 'role' => 'admin', 'status' => 'Aktif'],
                            ['name' => 'Moe Owner', 'email' => 'owner@gmail.com', 'role' => 'owner', 'status' => 'Aktif'],
                            ['name' => 'Budi Santoso', 'email' => 'budi@user.com', 'role' => 'buyer', 'status' => 'Aktif'],
                            ['name' => 'Siska Nakal', 'email' => 'siska@scam.com', 'role' => 'buyer', 'status' => 'Banned'],
                        ] as $user)
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 bg-indigo-100 text-indigo-700 rounded-full flex items-center justify-center font-bold text-xs">
                                        {{ substr($user['name'], 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-gray-900">{{ $user['name'] }}</div>
                                        <div class="text-[11px] text-gray-500">{{ $user['email'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                @if($user['role'] == 'admin')
                                    <span class="px-2.5 py-1 bg-red-100 text-red-700 text-[10px] font-black uppercase rounded-lg">Admin</span>
                                @elseif($user['role'] == 'owner')
                                    <span class="px-2.5 py-1 bg-purple-100 text-purple-700 text-[10px] font-black uppercase rounded-lg">Owner</span>
                                @else
                                    <span class="px-2.5 py-1 bg-blue-100 text-blue-700 text-[10px] font-black uppercase rounded-lg">Buyer</span>
                                @endif
                            </td>
                            <td class="p-4 text-sm">
                                @if($user['status'] == 'Aktif')
                                    <span class="flex items-center gap-1.5 text-green-600 font-bold text-[11px]">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Aktif
                                    </span>
                                @else
                                    <span class="flex items-center gap-1.5 text-red-600 font-bold text-[11px]">
                                        <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span> Terblokir
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 text-xs text-gray-400 font-medium">
                                24 Des 2025
                            </td>
                            <td class="p-4">
                                <div class="flex justify-center gap-3">
                                    <button class="text-indigo-600 hover:text-indigo-900 text-xs font-bold">Edit</button>
                                    @if($user['status'] == 'Aktif')
                                        <button class="text-red-600 hover:text-red-900 text-xs font-bold">Banned</button>
                                    @else
                                        <button class="text-green-600 hover:text-green-900 text-xs font-bold">Pulihkan</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-between items-center px-2">
                <p class="text-xs text-gray-500">Menampilkan 4 dari 1,205 pengguna</p>
                <div class="flex gap-1">
                    <button class="p-2 border rounded-lg bg-white text-gray-400 hover:bg-gray-50"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg></button>
                    <button class="p-2 border rounded-lg bg-white text-gray-400 hover:bg-gray-50"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>