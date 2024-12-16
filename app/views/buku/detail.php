<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <?php $navController->nav(); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Detail Buku</h2>
        
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID Buku</th>
                            <td>B-<?= htmlspecialchars($data['buku']['id_buku']); ?></td>
                        </tr>
                        <tr>
                            <th>Judul Buku</th>
                            <td><?= htmlspecialchars($data['buku']['judul_buku']); ?></td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td><?= htmlspecialchars($data['buku']['pengarang']); ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td><?= htmlspecialchars($data['buku']['tahun']); ?></td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-center">
                    <a href="/loans/index" class="btn btn-primary">Kembali ke Daftar Peminjam</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php $navController->footer(); ?>

    <!-- JS and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
