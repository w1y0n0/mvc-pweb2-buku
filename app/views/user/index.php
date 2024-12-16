<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php $navController->nav(); ?>
    <!-- Container -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Daftar Pengguna</h2>
        <a href="/user/create" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
        <div class="row">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>P-<?= htmlspecialchars($user['id_user']) ?></td>
                        <td><?= htmlspecialchars($user['nama']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['password']) ?></td>
                        <td><?= htmlspecialchars($user['no_anggota']) ?></td>
                        <td>
                            <a href="/user/edit/<?= $user['id_user']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/user/delete/<?php echo $user['id_user']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin Menghapus Data Pengguna ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</body>
<br>
<?php $navController->footer(); ?>

</html>