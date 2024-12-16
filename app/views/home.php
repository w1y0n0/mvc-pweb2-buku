<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            color: blue;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-text {
            text-align: center;
        }

        .hero-text h1 {
            font-size: 3.5rem;
        }

        .hero-text p {
            font-size: 1.25rem;
        }

        footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
<?php $navController->nav(); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-text">
            <h1>Selamat Datang di Sistem Peminjaman Buku Digital</h1>
            <p>Kelola buku, pinjaman, dan pengguna dengan mudah dalam satu sistem terintegrasi.</p>
            <a href="/buku/index" class="btn btn-primary btn-lg mt-3">Lihat Koleksi Buku</a>
        </div>
    </section>

    <!-- Content Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Fitur Utama</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Buku</h5>
                        <p class="card-text">Tambah, edit, dan kelola koleksi buku Anda dengan mudah.</p>
                        <a href="/buku/index" class="btn btn-info">Kelola Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Peminjaman</h5>
                        <p class="card-text">Catat dan kelola proses peminjaman buku dengan cepat.</p>
                        <a href="/loans/index" class="btn btn-info">Kelola Peminjaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Pengguna</h5>
                        <p class="card-text">Kelola data pengguna sistem dengan mudah.</p>
                        <a href="/user/index" class="btn btn-info">Kelola Pengguna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $navController->footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
