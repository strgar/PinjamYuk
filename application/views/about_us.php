<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - PinjamYuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .sidebar {
            background-color: var(--primary);
            color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            z-index: 100;
            overflow-y: auto;
            transition: all 0.3s;
            box-shadow: 3px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar-brand {
            padding: 20px 15px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        
        .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255,255,255,0.1);
        }
        
        .nav-link.active {
            background-color: var(--secondary);
        }
        
        .main-content {
            padding: 20px;
            margin-left: 220px;
            width: calc(100% - 220px);
            transition: all 0.3s;
        }
        
        .page-header {
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            margin-bottom: 25px;
        }
        
        .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 30px 0;
            gap: 40px;
        }
        
        /* Bagian identitas tim */
        .team-section {
            flex: 1;
            min-width: 300px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 25px;
        }
        
        .team-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }
        
        .team-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--secondary);
        }
        
        .team-member {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 15px;
            background-color: rgba(52, 152, 219, 0.05);
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .team-member:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: rgba(52, 152, 219, 0.1);
        }
        
        .member-icon {
            width: 50px;
            height: 50px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.2rem;
        }
        
        .member-info {
            flex: 1;
        }
        
        .member-name {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 3px;
        }
        
        .member-nim {
            color: #666;
            font-size: 0.9rem;
        }
        
        .text-content {
            flex: 1;
            min-width: 300px;
        }
        
        .subtitle {
            color: var(--secondary);
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .description {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 30px;
            color: #555;
        }
        
        .btn-explore {
            padding: 14px 24px;
            background-color: var(--secondary);
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(52, 152, 219, 0.3);
            transition: all 0.2s ease-in-out;
            display: inline-block;
            border: none;
        }
        
        .btn-explore:hover {
            background-color: #2980b9;
            color: white;
            box-shadow: 0 5px 10px rgba(52, 152, 219, 0.2);
            transform: translateY(-2px);
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .sidebar {
                width: 220px;
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                width: 100%;
                margin-left: 0;
                padding: 20px 15px;
            }
            
            .sidebar-toggle {
                display: block;
                position: fixed;
                top: 15px;
                left: 15px;
                z-index: 1000;
                background: var(--secondary);
                color: white;
                border: none;
                border-radius: 5px;
                padding: 8px 12px;
            }
            
            .about-section {
                padding: 20px 0;
                gap: 30px;
            }
            
            .team-section, .text-content {
                min-width: 100%;
            }
        }
        
        @media (min-width: 993px) {
            .sidebar-toggle {
                display: none;
            }
        }
        
        .container-main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .text-content p {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Mobile Toggle Button -->
    <button class="sidebar-toggle d-lg-none">
        <i class="fas fa-bars"></i>
    </button>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fas fa-handshake me-2"></i>PinjamYuk</h2>
        </div>
        <ul class="nav flex-column mt-4">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('dashboard') ?>">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('barang') ?>">
                    <i class="fas fa-box-open"></i> Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= site_url('about') ?>">
                    <i class="fas fa-info-circle"></i> About Us
                </a>
            </li>
            <li class="nav-item mt-4">
                <a class="nav-link" href="<?= site_url('logout') ?>">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container-main">
            <div class="page-header">
                <h1 class="h2"><i class="fas fa-info-circle me-2"></i>About Us</h1>
            </div>
            
            <div class="about-section">
                <!-- Bagian Tim Pengembang -->
                <div class="team-section">
                    <h3 class="team-title">Tim Pengembang</h3>
                    
                    <div class="team-member">
                        <div class="member-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <div class="member-name">Tegar Putu Satria</div>
                            <div class="member-nim">2250081075</div>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <div class="member-name">Pandu Setia Anugrah</div>
                            <div class="member-nim">2250081076</div>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <div class="member-name">Rachmawati Ade Ningsih</div>
                            <div class="member-nim">2250081086</div>
                        </div>
                    </div>
                </div>
                
                <!-- Bagian Deskripsi Aplikasi -->
                <div class="text-content">
                    <div class="subtitle">Tentang Kami</div>
                    <div class="title">ABOUT US</div>
                    <div class="description">
                        <p>PinjamYuk adalah platform peminjaman barang yang memudahkan Anda untuk meminjam berbagai peralatan yang Anda butuhkan. Dengan koleksi barang yang beragam dan proses peminjaman yang sederhana, kami hadir untuk memenuhi kebutuhan peralatan sehari-hari Anda.</p>
                        <p>Kami percaya bahwa berbagi sumber daya adalah cara terbaik untuk menciptakan komunitas yang lebih berkelanjutan dan saling mendukung. Dengan PinjamYuk, Anda tidak perlu membeli barang yang hanya digunakan sesekali - cukup pinjam dari anggota komunitas kami.</p>
                    </div>
                    <a href="<?= site_url('barang') ?>" class="btn-explore">
                        <i class="fas fa-box-open me-1"></i> EXPLORE BARANG
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.querySelector('.sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            
            // Untuk menutup sidebar saat mengklik di luar area
            if (document.querySelector('.sidebar').classList.contains('active')) {
                document.addEventListener('click', closeSidebar);
            } else {
                document.removeEventListener('click', closeSidebar);
            }
        });
        
        function closeSidebar(event) {
            const sidebar = document.querySelector('.sidebar');
            const toggleBtn = document.querySelector('.sidebar-toggle');
            
            // Jika mengklik di luar sidebar dan bukan tombol toggle
            if (!sidebar.contains(event.target) && event.target !== toggleBtn && !toggleBtn.contains(event.target)) {
                sidebar.classList.remove('active');
                document.removeEventListener('click', closeSidebar);
            }
        }
        
        // Menutup sidebar saat memilih menu di mobile
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    document.querySelector('.sidebar').classList.remove('active');
                    document.removeEventListener('click', closeSidebar);
                }
            });
        });
    </script>
</body>
</html>