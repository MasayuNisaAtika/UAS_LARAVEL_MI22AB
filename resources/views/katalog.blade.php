<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .button-container {
            margin: 20px;
        }
        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            color: white;
            background-color: #6f4f37;
            border-radius: 5px;
        }
        .produk-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Nama Toko</h1>

    <div class="button-container">
        <a href="{{ route('katalog') }}">Home</a>
        <a href="{{ route('produk') }}">Produk</a>
        <a href="{{ route('tentang') }}">Tentang</a>
        <a href="{{ route('login') }}">Login</a>
    </div>

    <div class="produk-container">
        <h2>Daftar Produk</h2>
        @foreach($produk as $item)
            <div>
                <h3>{{ $item->nama_produk }}</h3>
                <p>{{ $item->deskripsi }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
