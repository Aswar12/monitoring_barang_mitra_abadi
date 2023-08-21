@extends('layouts.app')

@section('content')
    <h1>Daftar Barang</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->unit_price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
