<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    @if(Auth::user()->role === 'admin')
                        <x-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                            {{ __('Manajemen User') }}
                        </x-nav-link>
                    @endif

                    @if(Auth::user()->role === 'owner')
                        <x-nav-link :href="route('owner.produk')" :active="request()->routeIs('owner.produk')">
                            {{ __('Produk Saya') }}
                        </x-nav-link>
                        <x-nav-link :href="route('owner.pesanan')" :active="request()->routeIs('owner.pesanan')">
                            {{ __('Pesanan Masuk') }}
                        </x-nav-link>
                    @endif

                    @if(Auth::user()->role === 'buyer')
                        <x-nav-link :href="route('toko.index')" :active="request()->routeIs('toko.index')">
                            {{ __('Cari Toko') }}
                        </x-nav-link>
                        <x-nav-link :href="route('pesanan.index')" :active="request()->routeIs('pesanan.index')">
                            {{ __('Pesanan Saya') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex items-center">
                                {{ Auth::user()->name }}
                                <span class="ms-2 px-2 py-0.5 text-[10px] font-bold uppercase bg-gray-100 text-gray-600 rounded">
                                    {{ Auth::user()->role }}
                                </span>
                            </div>
                            </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="..."> </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            @if(Auth::user()->role === 'admin')
                <x-responsive-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                    {{ __('Manajemen User') }}
                </x-responsive-nav-link>
            @endif

            @if(Auth::user()->role === 'owner')
                <x-responsive-nav-link :href="route('owner.produk')" :active="request()->routeIs('owner.produk')">
                    {{ __('Produk Saya') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('owner.pesanan')" :active="request()->routeIs('owner.pesanan')">
                    {{ __('Pesanan Masuk') }}
                </x-responsive-nav-link>
            @endif

            @if(Auth::user()->role === 'buyer')
                <x-responsive-nav-link :href="route('toko.index')" :active="request()->routeIs('toko.index')">
                    {{ __('Cari Toko') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('pesanan.index')" :active="request()->routeIs('pesanan.index')">
                    {{ __('Pesanan Saya') }}
                </x-responsive-nav-link>
            @endif
        </div>
        </div>
</nav>