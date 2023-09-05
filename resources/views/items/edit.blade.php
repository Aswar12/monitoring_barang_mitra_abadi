@extends('layouts.app')
@section('content')
    <h1>Edit Item</h1>
    <form action="/items/{{ $item->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $item->name }}" required>
        <br>
        <label for="deskription">Deskripsi:</label>
        <input type="text" name="deskription" id="deskription" value="{{ $item->description }}" required>
        <br>
        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" value="{{ $item->price }}" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="/items">Kembali ke Daftar Item</a>
@endsection
