<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-500">
            <div class="bg-white dark:bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg rounded-lg p-4">
                <h1 class="text-center text-lg font-bold mb-2 py-2">Daftar Barang</h1>

                <div class="overflow-x-auto dark:bg-gray-600">
                    <table class="min-w-full border dark:border-gray-300 rounded-lg ">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-100 rounded-lg ">
                                <th class="border px-6 py-3 dark:border-black">#</th>
                                <th class="border px-6 py-3 dark:border-black">Nama</th>
                                <th class="border px-6 py-3 dark:border-black">Deskripsi</th>
                                <th class="border px-6 py-3 dark:border-black">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $index => $item)
                            <tr class="bg-white dark:bg-gray-600">
                                <td class="border px-6 py-3 dark:border-white">{{ $index + 1 }}</td>
                                <td class="border px-6 py-3 dark:border-white">{{ $item->name }}</td>
                                <td class="border px-6 py-3 dark:border-white">{{ $item->description }}</td>
                                <td class="border px-6 py-3 dark:border-white">{{ $item->unit_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>








</x-app-layout>