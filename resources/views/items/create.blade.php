@extends('layouts.app')
@section('content')
<div class="py-12 ">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">
            <h1>Tambah Item</h1>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/items" method="POST">
                @csrf
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" required>
                <br>
                <label for="description">Deskripsi:</label>
                <input type="text" name="description" id="description" required>
                <br>
                <label for="unit_price">Harga:</label>
                <input type="number" name="unit_price" id="unit_price" required>
                <br>
                <button type="submit">Simpan</button>
            </form>
            <a href="/items">Kembali ke Daftar Item</a>
        </div>
    </div>
</div>
@endsection