<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black dark:text-white  overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h1 class="text-center text-lg font-bold mb-4">Daftar Barang</h1>

                <div class="overflow-x-auto">
                    <table class=" min-w-full border-2 dark:border-black rounded-xxl ">
                        <thead>
                            <tr>
                                <th class="border-2 px-6 py-3">#</th>
                                <th class="border-2 px-6 py-3">Nama</th>
                                <th class="border-2 px-6 py-3">Deskripsi</th>
                                <th class="border-2 px-6 py-3">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $index => $item)
                            <tr>
                                <td class="border-2 px-6 py-3">{{ $index + 1 }}</td>
                                <td class="border-2 px-6 py-3">{{ $item->name }}</td>
                                <td class="border-2 px-6 py-3">{{ $item->description }}</td>
                                <td class="border-2 px-6 py-3">{{ $item->unit_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





</x-app-layout>