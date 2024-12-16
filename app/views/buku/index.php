<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
<?php $navController->nav(); ?>
<div class="container mt-4">
        <h2 class="text-center mb-4">Daftar Buku</h2>
        <a href="/buku/create" class="btn btn-primary mb-3">Tambah Daftar Buku</a>
        <div class="row">
            <div class="card">
                <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($BukuController as $Buku): ?>
                    <tr>
                        <td>B-<?= htmlspecialchars($Buku['id_buku']) ?></td>
                        <td><?= htmlspecialchars($Buku['judul_buku']) ?></td>
                        <td><?= htmlspecialchars($Buku['pengarang']) ?></td>
                        <td><?= htmlspecialchars($Buku['tahun']) ?></td>
                        <td>
                            <a href="/buku/edit/<?php echo $Buku['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/buku/delete/<?php echo $Buku['id_buku']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin Menghapus Data Buku ini?')">Hapus</a>
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
