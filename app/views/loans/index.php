<?php require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<?php $navController->nav(); ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Peminjaman Buku</h2>
        <a href="/loans/create" class="btn btn-primary mb-3">Tambah Data Peminjaman Buku++ </a>
        <div class="row">
            <div class="card">
                <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Peminjaman</th>
                    <th>ID Buku</th>
                    <th>ID User</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">

    <?php foreach ($TabelLoansController as $loans): ?>
        <tr>
            <td>L-<?= htmlspecialchars($loans['id_loans']) ?></td>
            <!-- Link ke halaman detail buku -->
            <td>
                <a href="/buku/detail/<?= htmlspecialchars($loans['id_buku']) ?>" class="text-decoration-none">
                    B-<?= htmlspecialchars($loans['id_buku']) ?>
                </a>
            </td>
            <!-- Link ke halaman detail user -->
            <td>
                <a href="/user/detail/<?= htmlspecialchars($loans['id_user']) ?>" class="text-decoration-none">
                    P-<?= htmlspecialchars($loans['id_user']) ?>
                </a>
            </td>
            <td><?= htmlspecialchars($loans['tgl_pinjam']) ?></td>
            <td><?= htmlspecialchars($loans['tgl_kembali']) ?></td>
            <td>
                <a href="/loans/edit/<?= htmlspecialchars($loans['id_loans']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/loans/delete/<?php echo $loans['id_loans']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin Menghapus Data Peminjaman ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>

        </table>
                </div>
            </div>
        </div>
    </div>
<br>
<?php $navController->footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </script>
</body>
</html>
