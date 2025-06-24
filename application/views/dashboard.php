<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Modern</title>
    <link rel="stylesheet" href="<?php echo base_url('assets_dashboard/style_dashboard.css'); ?>">
</head>
<body>
    <div class="title-bar">
        <div class="title-content">
            <span class="icon">🗄️</span>
            <span class="title-text">PinjamYuk</span>
        </div>
    </div>

    <div class="container">
        <div class="main-content">
            <h1>Selamat Datang di Dashboard</h1>
            <p>Ini adalah halaman dashboard dengan tampilan modern.</p>
        </div>
        
        <div class="sidebar">
            <h2>Menu</h2>
            <a href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
            <a href="#">Tambah Barang</a>
            <a href="<?php echo site_url('dashboard/about'); ?>">About Us</a>
            <a href="#">Login</a>
        </div>
    </div>
</body>
</html>
