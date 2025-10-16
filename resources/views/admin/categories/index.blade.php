<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            + Tambah Kategori
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
                                    <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-4/12 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Kategori</th>
                                    <th class="w-5/12 text-left py-3 px-4 uppercase font-semibold text-sm">Deskripsi</th>
                                    <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @forelse ($categories as $category)
                                    <tr class="border-b">
                                        <td class="text-left py-3 px-4">{{ $category->id }}</td>
                                        <td class="text-left py-3 px-4">{{ $category->nama_kategori }}</td>
                                        <td class="text-left py-3 px-4">{{ Str::limit($category->deskripsi, 50) }}</td>
                                        <td class="text-left py-3 px-4">
                                            <a href="{{ route('admin.categories.edit', $category) }}" class="text-yellow-500 hover:text-yellow-700 font-bold">Edit</a>
                                            <span class="mx-2">|</span>
                                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4">
                                            Tidak ada data kategori.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $categories->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>