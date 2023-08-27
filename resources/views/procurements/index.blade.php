@extends('layouts.app')
@section('content')

<h6>Daftar Pengadaan</h6>

<div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="bg-white dark:bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg rounded-lg ">
            <h1 class="text-center text-lg font-bold mb-2 py-2">Daftar Barang</h1>

            <div class="overflow-x-auto dark:bg-gray-600 justify-between">
                <table class="w-full border-2 dark:border-gray-300 rounded-lg ">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-100 rounded-lg ">
                            <th class="border px-6 py-3 dark:border-black">No</th>
                            <th class="border px-6 py-3 dark:border-black">ID</th>
                            <th class="border px-6 py-3 dark:border-black">Item</th>
                            <th class="border px-6 py-3 dark:border-black">Kuantitas</th>
                            <th class="border px-6 py-3 dark:border-black">Total Biaya</th>
                            <th class="border px-6 py-3 dark:border-black">Tanggal Pengadaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($procurements as $index => $procurement)
                        <tr class="bg-white dark:bg-gray-600">
                            <td class="border px-6 py-3 dark:border-white">{{ $index + 1 }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->id }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->item->name }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->order_quantity }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->total_cost }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->procurement_date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection()