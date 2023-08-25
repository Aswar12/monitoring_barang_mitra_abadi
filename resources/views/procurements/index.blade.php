@extends('layouts.app')
@section('content')

<h6>Daftar Pengadaan</h6>

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

@endsection()