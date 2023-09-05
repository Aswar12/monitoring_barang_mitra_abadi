@extends('layouts.app')
@section('content')
<div class="py-12 ">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">
            <h5>                                                                           Tambah Item</h5>
            {{-- <form action="{{ route('items.store') }}" method="POST"> --}}
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4">
                        <label for="name">Nama barang</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border rounded shadow" placeholder="Masukkan nama barang">
                    </div>
                    <div class="p-4">
                        <label for="price">Harga Barang</label>
                        <input type="number" name="price" id="price" class="w-full p-2 border rounded shadow" placeholder="Masukkan harga barang">
                    </div>
                    <div class="p-4">
                        <label for="stock">Stok Barang</label>
                        <input type="number" name="stock" id="stock" class="w-full p-2 border rounded shadow" placeholder="Masukkan stock barang">
                    </div>
                    <div class="p-4">
                        <button type="submit" class="px-4 py-2 text-white bg-black rounded">Tambah Barang</button>
                    </div>
                </div>
@endsection
