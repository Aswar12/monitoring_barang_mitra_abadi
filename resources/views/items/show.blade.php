<!DOCTYPE html>
<html>
<head>
    <title>Detail Item</title>
</head>
<body>
    <h1>Detail Item</h1>
    <p>Nama: {{ $item->name }}</p>
    <p>Deskripsi: {{ $item->description }}</p>
    <p>Harga: {{ $item->unit_price }}</p>
    <a href="/items">Kembali ke Daftar Item</a>
</body>
</html>
