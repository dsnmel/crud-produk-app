@extends('layout')

@section('content')
<h1>Tambah Produk</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <label>Nama Produk</label>
    <input type="text" name="name" required>

    <label>Deskripsi</label>
    <textarea name="description"></textarea>

    <label>Harga</label>
    <input type="number" step="0.01" name="price" required>

    <label>Stok</label>
    <input type="number" name="stock" value="0" required>

    <button class="submit-btn">Simpan</button>
</form>
@endsection
