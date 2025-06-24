<?php
// Ambil parameter URL
$request = isset($_GET['url']) ? $_GET['url'] : 'dashboard';
$request = rtrim($request, '/');
$segments = explode('/', $request);

// Tentukan controller dan method
$controllerName = ucfirst($segments[0]) . 'Controller';
$method = isset($segments[1]) ? $segments[1] : 'index';

// Path ke file controller
$controllerPath = 'controller/' . $controllerName . '.php';

// Cek apakah file controller ada
if (file_exists($controllerPath)) {
    require_once $controllerPath;

    if (class_exists($controllerName)) {
        $obj = new $controllerName();

        if (method_exists($obj, $method)) {
            $obj->$method();
        } else {
            echo "⚠️ Halaman tidak ditemukan (method '$method' tidak ada).";
        }
    } else {
        echo "⚠️ Class '$controllerName' tidak ditemukan.";
    }
} else {
    // Kalau bukan dashboard, tampilkan pesan halaman tidak tersedia
    if ($controllerName !== 'DashboardController') {
        echo "<h2 style='font-family: Arial; color: red;'>⚠️ Halaman '$request' tidak tersedia.</h2>";
    } else {
        echo "⚠️ Controller '$controllerName' tidak ditemukan.";
    }
}
?>
