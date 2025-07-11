@extends('layout.app')

@section('title', 'Tambah Produk')

@section('content')

<div class="max-w-md mx-auto">
    <h1 class="text-xl font-bold mb-4">Tambah Produk Baru</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Produk</label>
            <input type="text" name="name" class="w-full border px-3 py-2" value="{{ old('name') }}" required>
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">SKU</label>
            <input type="text" name="sku" class="w-full border px-3 py-2" value="{{ old('sku') }}" required>
            @error('sku') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Stok</label>
            <input type="number" name="stock" class="w-full border px-3 py-2" value="{{ old('stock', 0) }}" min="0" required>
            @error('stock') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Harga</label>
            <input type="number" name="price" step="0.01" class="w-full border px-3 py-2" value="{{ old('price') }}" required>
            @error('price') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection

