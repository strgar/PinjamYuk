<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - PinjamYuk</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: #fff;
            color: #333;
        }

        /* ==== NAVBAR ==== */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: relative;
        }

        .navbar-logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff5100;
        }

        .navbar-menu {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .navbar-menu li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar-menu li a:hover {
            color: #ff5100;
        }

        .navbar-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .navbar-toggle span {
            width: 25px;
            height: 3px;
            background-color: #333;
            display: block;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                right: 40px;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            }

            .navbar-menu.active {
                display: flex;
            }

            .navbar-toggle {
                display: flex;
            }
        }

        /* ==== ABOUT SECTION ==== */
        .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 60px 40px;
            gap: 40px;
        }

        .images {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .images img {
            width: 300px;
            border-radius: 12px;
            object-fit: cover;
        }

        .text-content {
            max-width: 450px;
        }

        .subtitle {
            color: #ff5100;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .title {
            font-size: 36px;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #666;
        }

        .btn {
            padding: 14px 24px;
            background-color: #ff5100;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(255, 81, 0, 0.3);
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            background-color: #e24900;
            box-shadow: 0 5px 10px rgba(255, 81, 0, 0.2);
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<!-- === NAVBAR === -->
<nav class="navbar">
    <div class="navbar-logo">PinjamYuk</div>
    <div class="navbar-toggle" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="navbar-menu" id="navbarMenu">
        <li><a href="<?= base_url('index.php') ?>">Home</a></li>
        <li><a href="<?= base_url('index.php/about') ?>">About</a></li>
        <li><a href="#">Barang</a></li>
        <li><a href="#">Kontak</a></li>
    </ul>
</nav>

<!-- === ABOUT SECTION === -->
<div class="about-section">
    <div class="images">
        <img src="<?= base_url('asset/image/gambarsatu.jpg') ?>" alt="Product 1">
        <img src="<?= base_url('asset/image/gambardua.jpg') ?>" alt="Product 2">
    </div>

    <div class="text-content">
        <div class="subtitle">Tentang Kami</div>
        <div class="title">ABOUT US</div>
        <div class="description">
            From they fine john he give of rich he. They age and draw mrs like. Improving end distruts may instantly
            was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly
            occasional assistance sufficient not.
        </div>
        <a href="#" class="btn">EXPLORE MORE</a>
    </div>
</div>

<!-- === JAVASCRIPT === -->
<script>
    function toggleMenu() {
        document.getElementById("navbarMenu").classList.toggle("active");
    }
</script>

</body>
</html>
