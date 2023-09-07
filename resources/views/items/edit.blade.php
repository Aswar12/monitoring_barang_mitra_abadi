@extends('layouts.app')
@section('content')
    <div class="py-12 ">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">

                <h5>Edit Item</h5>
                {{-- <form action="{{ route('items.update', $item->id) }}" method="POST"> --}}
    @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-2">
            <div class="p-2">
                    <label for="name">Item Name</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="name" value="{{ $item->name }}">
                </div>
                <div class="p-2">
                    <label for="description">Item Description</label>
                    <textarea class="w-full p-2 border rounded shadow" name="description">{{ $item->description }}</textarea>
                </div>
                <div class="p-2">
                    <label for="price">Item Price</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="price" value="{{ $item->price }}">
                </div>
                <div class="p-2">
                    <label for="quantity">Item Quantity</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="quantity" value="{{ $item->quantity }}">
                </div>
                <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                    <a href="#" class="px-4 py-2 font-bold text-white bg-black rounded">Tambah Data</a>
                </div>
                <p></p>
            @endsection
