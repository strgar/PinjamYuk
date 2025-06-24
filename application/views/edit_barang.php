<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang - PinjamYuk</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            transition: all 0.3s;
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }
        
        .btn-primary {
            background-color: var(--secondary);
            border-color: var(--secondary);
        }
        
        .btn-outline-secondary {
            border-color: #95a5a6;
            color: #7f8c8d;
        }
        
        .btn-outline-secondary:hover {
            background-color: #ecf0f1;
        }
        
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #2c3e50;
        }
        
        .form-control, .form-select, .form-control:focus {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            box-shadow: none;
        }
        
        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
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
        }
        
        @media (min-width: 993px) {
            .sidebar-toggle {
                display: none;
            }
        }
        
        .container-main {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s;
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
                <a class="nav-link active" href="<?= site_url('barang') ?>">
                    <i class="fas fa-box-open"></i> Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('about') ?>">
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
                <h1 class="h2"><i class="fas fa-edit me-2"></i>Edit Barang</h1>
                <a href="<?= site_url('barang') ?>" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Form Edit Barang</h5>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('barang/update/'.$barang->id) ?>" method="post">
                        <input type="hidden" name="id" value="<?= $barang->id ?>">
                        
                        <div class="mb-4">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" 
                                   value="<?= set_value('nama_barang', $barang->nama_barang) ?>" 
                                   placeholder="Contoh: Laptop" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" 
                                   value="<?= set_value('jumlah', $barang->jumlah) ?>" 
                                   placeholder="Contoh: 5" min="1" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" 
                                      placeholder="Contoh: Barang IT" rows="4" required><?= set_value('keterangan', $barang->keterangan) ?></textarea>
                        </div>
                        
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
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