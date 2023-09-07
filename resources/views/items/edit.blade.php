@extends('layouts.app')
@section('content')
    <h1>Edit Item</h1>
    <form action="/items/{{ $item->id }}" method="POST">
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
                <div>
                <button type="submit" class="text-white bg-black ">Update Item</button>
                </div>
                <p></p>
            @endsection
