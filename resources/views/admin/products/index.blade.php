<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            + Tambah Produk
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Gambar</th>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Nama Produk</th>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Kategori</th>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Harga</th>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Stok</th>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @forelse ($products as $product)
                                    <tr class="border-b">
                                        <td class="py-3 px-4">
                                            @if ($product->gambar_produk)
                                                <img src="{{ asset('storage/products/' . $product->gambar_produk) }}" alt="{{ $product->nama_produk }}" class="h-16 w-16 object-cover rounded">
                                            @else
                                                <span class="text-xs text-gray-500">No Image</span>
                                            @endif
                                        </td>
                                        <td class="py-3 px-4">{{ $product->nama_produk }}</td>
                                        <td class="py-3 px-4">{{ $product->category->nama_kategori }}</td>
                                        <td class="py-3 px-4">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                                        <td class="py-3 px-4">{{ $product->stok }}</td>
                                        <td class="py-3 px-4">
                                            <a href="{{ route('admin.products.edit', $product) }}" class="text-yellow-500 hover:text-yellow-700 font-bold">Edit</a>
                                            <span class="mx-2">|</span>
                                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">Tidak ada data produk.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>