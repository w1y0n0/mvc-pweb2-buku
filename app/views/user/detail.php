
<!-- app/views/user/detail.php -->
<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController();
?>

<!-- app/views/user/detail.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php $navController->nav(); ?>
    
    <!-- Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Detail Pengguna</h2>

        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">Informasi Pengguna</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID Pengguna</th>
                            <td>P-<?= htmlspecialchars($user['id_user']); ?></td>
                        </tr>
                        <tr>
                            <th>Nama Pengguna</th>
                            <td><?= htmlspecialchars($user['nama']); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= htmlspecialchars($user['email']); ?></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><?= htmlspecialchars($user['password']); ?></td>
                        </tr>
                        <tr>
                            <th>No anggota</th>
                            <td><?= htmlspecialchars($user['no_anggota']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">
            <a href="/loans/index" class="btn btn-success">Kembali ke Daftar Peminjaman</a>
        </div>
    </div>
    <br>
    <?php $navController->footer(); ?>

</body>

</html>