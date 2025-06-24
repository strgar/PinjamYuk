<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #0288D1;
            color: white;
            padding: 20px;
            height: 100vh;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 10px 0;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        .main {
            flex-grow: 1;
            padding: 40px;
        }

        h2 {
            color: #0288D1;
        }

        form {
            max-width: 500px;
        }

        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0288D1;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0277BD;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>PinjamYuk</h2>
    <a href="#">Dashboard</a>
    <a href="#">Tambah Barang</a>
    <a href="#">About Us</a>
    <a href="#">Login</a>
</div>

<div class="main">
    <h2>Form Tambah Barang</h2>
    <form action="#" method="post">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" placeholder="Contoh: Laptop">

        <label for="jumlah">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah" placeholder="Contoh: 5">

        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan" placeholder="Contoh: Barang IT" rows="4"></textarea>

        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html>
