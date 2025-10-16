@php
    $navigation = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'pattern' => 'dashboard'],
        ['label' => 'Manajemen Kategori', 'route' => 'admin.categories.index', 'pattern' => 'admin.categories.*'],
        ['label' => 'Manajemen Produk', 'route' => 'admin.products.index', 'pattern' => 'admin.products.*'],
    ];
@endphp

<aside class="w-full md:w-64 md:flex-shrink-0 bg-white dark:bg-gray-800 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 flex flex-col">
    <div class="px-4 py-6 border-b border-gray-200 dark:border-gray-700">
        <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-900 dark:text-gray-100">Kasir App</a>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Panel Administrasi</p>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1">
        @foreach ($navigation as $item)
            @php
                $isActive = request()->routeIs($item['pattern']);
            @endphp
            <a href="{{ route($item['route']) }}"
               class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors {{ $isActive ? 'bg-blue-500 text-white shadow-sm' : 'text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white' }}">
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>

    <div class="px-4 pb-6 space-y-3">
        @auth
            <div class="rounded-md bg-gray-100 dark:bg-gray-700 px-3 py-3 text-sm">
                <div class="font-semibold text-gray-900 dark:text-gray-100">{{ Auth::user()->name }}</div>
                <div class="text-gray-500 dark:text-gray-300">{{ Auth::user()->email }}</div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full px-3 py-2 text-sm font-semibold text-white bg-red-500 rounded-md hover:bg-red-600">
                    {{ __('Log Out') }}
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block w-full px-3 py-2 text-center text-sm font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600">
                {{ __('Log in') }}
            </a>
            <a href="{{ route('register') }}" class="block w-full px-3 py-2 text-center text-sm font-semibold text-blue-600 bg-white border border-blue-500 rounded-md hover:bg-blue-50">
                {{ __('Register') }}
            </a>
        @endauth
    </div>
</aside>
