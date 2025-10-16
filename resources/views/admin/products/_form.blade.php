@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <strong class="font-bold">Oops!</strong> Ada masalah dengan input Anda.<br><br>
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="nama_produk" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk', $product->nama_produk ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
</div>

<div class="mb-4">
    <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
    <textarea name="deskripsi" id="deskripsi" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">{{ old('deskripsi', $product->deskripsi ?? '') }}</textarea>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
    <div>
        <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div>
        <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok:</label>
        <input type="number" name="stok" id="stok" value="{{ old('stok', $product->stok ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div>
        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
        <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            <option value="">Pilih Kategori</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<div class="mb-4">
    <label for="gambar_produk" class="block text-gray-700 text-sm font-bold mb-2">Gambar Produk:</label>
    <input type="file" name="gambar_produk" id="gambar_produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
    @if (isset($product) && $product->gambar_produk)
        <div class="mt-2">
            <img src="{{ asset('storage/products/' . $product->gambar_produk) }}" alt="{{ $product->nama_produk }}" class="h-24 w-24 object-cover rounded">
            <small class="text-gray-500">Gambar saat ini</small>
        </div>
    @endif
</div>

<div class="flex items-center justify-between">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        {{ $tombol ?? 'Simpan' }}
    </button>
    <a href="{{ route('admin.products.index') }}" class="inline-block font-bold text-sm text-blue-500 hover:text-blue-800">
        Batal
    </a>
</div>