@extends('layout')

@section('content')
<h1>Edit Produk</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <label>Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" required>

    <label>Deskripsi</label>
    <textarea name="description">{{ $product->description }}</textarea>

    <label>Harga</label>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>

    <label>Stok</label>
    <input type="number" name="stock" value="{{ $product->stock }}" required>

    <button class="submit-btn">Update</button>
</form>
@endsection
