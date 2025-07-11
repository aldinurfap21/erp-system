@extends('layout.app')

@section('title', 'Daftar Produk')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">Daftar Produk</h1>
        <div class="space-x-2">
            <a href="{{ url('/') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
                ← Kembali
            </a>
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Tambah Produk
            </a>
        </div>
    </div>


    <table class="w-full border border-gray-300 bg-white">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">SKU</th>
                <th class="p-2 border">Stok</th>
                <th class="p-2 border">Harga</th>
                <th class="p-2 border">Kategori</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="p-2 border">{{ $product->name }}</td>
                    <td class="p-2 border">{{ $product->sku }}</td>
                    <td class="p-2 border">{{ $product->stock }}</td>
                    <td class="p-2 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="p-2 border">{{ $product->category->name ?? '-' }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center p-4 text-gray-500">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
