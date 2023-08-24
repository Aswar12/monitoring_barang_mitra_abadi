<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Procurements') }}
        </h2>
    </x-slot>
    <h1>Daftar Pengadaan</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Kuantitas</th>
                <th>Total Biaya</th>
                <th>Tanggal Pengadaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($procurements as $procurement)
                <tr>
                    <td>{{ $procurement->id }}</td>
                    <td>{{ $procurement->item->name }}</td>
                    <td>{{ $procurement->order_quantity }}</td>
                    <td>{{ $procurement->total_cost }}</td>
                    <td>{{ $procurement->procurement_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
