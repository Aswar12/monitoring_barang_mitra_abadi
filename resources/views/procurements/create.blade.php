@extends('layouts.app')
@section('content')
<div class="py-12 ">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">
            <h5>                                                                           Tambah Pengadaan</h5>
            <form action="{{ route('procurements.store') }}" method="POST" class="p-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4">
                        <label for="name">Masukan ID</label>
                        <input type="text" name="id" id="id" class="w-full p-2 border rounded shadow" placeholder="Masukkan ID">
                    </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4">
                        <label for="name">Masukan ID Barang</label>
                        <input type="text" name="item_id" id="item_id" class="w-full p-2 border rounded shadow" placeholder="Masukkan nama barang">
                    </div>
                    <div class="p-4">
                        <label for="description">Kuantitas Order</label>
                        <textarea type="text" name="order_quantity" id="order_quantiy" class="w-full p-2 border rounded shadow" placeholder="Masukkan Jumlah Kuantitas Order"> </textarea>
                    </div>
                    <div class="p-4">
                        <label for="unit_price">Total Biaya</label>
                        <input type="number" name="total_cost" id="total_cost" class="w-full p-2 border rounded shadow" placeholder="Masukkan Total Biaya">
                    </div>
                    <div class="p-4">
                        <label for="demand_rate">Tanggal Pengadaan</label>
                        <input type="date" name="procurement_date" id="procurement_date" class="w-full p-2 border rounded shadow" placeholder="Masukkan Tanggal Pengadaan Barang">
                    </div>
                    <div class="p-4">
                        <button type="submit" class="px-4 py-2 text-white bg-black rounded">Simpan Pengadaan</button>
                    </div>
                </div>
@endsection
