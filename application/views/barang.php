<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Barang - PinjamYuk</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #0288d1;
            color: white;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
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

        .main {
            flex-grow: 1;
        }

        .header {
            background-color: #0288d1;
            color: white;
            padding: 15px 20px;
            font-weight: bold;
            font-size: 18px;
        }

        .content {
            padding: 30px;
        }

        .btn-tambah {
            display: inline-block;
            padding: 10px 15px;
            background-color: #0288d1;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .table-barang {
            width: 100%;
            border-collapse: collapse;
        }

        .table-barang th, .table-barang td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .btn-edit, .btn-hapus {
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 4px;
            color: white;
        }

        .btn-edit {
            background-color: #ff9800;
        }

        .btn-hapus {
            background-color: #f44336;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Menu</h2>
        <a href="#">Dashboard</a>
        <a href="#">Tambah Barang</a>
        <a href="#">About Us</a>
        <a href="#">Login</a>
    </div>

    <div class="main">
        <div class="header">PinjamYuk</div>
        <div class="content">
            <h2>Data Barang</h2>
            <a href="#" class="btn-tambah">+ Tambah Barang</a>
            <table class="table-barang">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laptop</td>
                        <td>5</td>
                        <td>Barang IT</td>
                        <td>
                            <a href="#" class="btn-edit">Edit</a>
                            <a href="#" class="btn-hapus">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Proyektor</td>
                        <td>2</td>
                        <td>Alat Presentasi</td>
                        <td>
                            <a href="#" class="btn-edit">Edit</a>
                            <a href="#" class="btn-hapus">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
