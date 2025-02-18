<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 5000px;
            display: flex;
            align-items: center;
            gap: 20px; /* Jarak antara gambar dan teks */
        }
        .profile img {
            width: 125px;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }
        .text {
            flex: 1;
        }
        .text p {
            margin: 5px 0;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color:rgb(85, 85, 85);
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
        }
    </style>
</head>
<body>
    <div class ="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Tentang Kami</h1>
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <h4> NIM : 2257401051 </h4>
                <h4> Nama : Asyifa Rindu Hartini</h4>
                <h4> Kelas : MI22B</h4>
                <h4> Github : asyifarinduhartini</h4>
                <h4> Kontribusi yang saya lakukan adalah pembuatan halaman tentang dan style nya</h4>
            </div>
            </div>
        </div>
    </div>
    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/Masayu.jpeg') }}" alt="Gambar Masayu" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <h4> NIM : 2257401073 </h4>
                <h4> Nama : Masayu Nisa Atika</h4>
                <h4> Kelas : MI22A</h4>
                <h4>Github : MasayuNisaAtika</h4>
                <h4>Kontribusi yang saya lakukan adalah membuat strukture yang dibutuhkan dalam pembuatan web, membuat
                    halaman katalog, login, register, admin, layout/sidebar, membuat controllers.
                </h4>
            </div>
            </div>
        </div>
    </div>

    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/') }}" alt="Gambar Muparikoh" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <h4> NIM : 22574010.. </h4>
                <h4> Nama : Muparikoh</h4>
                <h4> Kelas : MI22A</h4>
                <h4> Github : </h4>
                <h4> Kontribusi yang saya lakukan adalah</h4>
            </div>
            </div>
        </div>
    </div>


    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/') }}" alt="Gambar Nouval" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <h4> NIM : 22574010..</h4>
                <h4> Nama : Nouval Fadillah</h4>
                <h4> Kelas : MI22A</h4>
                <h4> Github : </h4>
                <h4> Kontribusi yang saya lakukan adalah</h4>
            </div>
            </div>
        </div>
    </div>
    <a href="{{ route('katalog') }}" class="btn">Kembali ke Home</a>
</body>
</html>

