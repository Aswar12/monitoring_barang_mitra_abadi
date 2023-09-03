<!DOCTYPE html>
<html>
<head>
    <title>Tambah Item</title>
</head>
<body>
    <h1>Tambah Item</h1>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/items" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="deskription">Deskripsi:</label>
        <input type="text" deskription="deskription" id="deskription" required>
        <br>
        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/items">Kembali ke Daftar Item</a>
</body>
</html>
