@extends('layout')

@section('content')
<h1>Daftar Produk</h1>

<a href="{{ route('products.create') }}" class="button">+ Tambah Produk</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
        <td>{{ $product->stock }}</td>
        <td class="action-buttons">
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" 
                  method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="delete" onclick="return confirm('Hapus produk?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection
