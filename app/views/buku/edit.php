<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <?php $navController->nav(); ?>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Edit Buku</h2>
        <form action="/buku/update/<?php echo $BukuController['id_buku']; ?>" method="POST" class="p-4 border rounded bg-light">
            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku:</label>
                <input type="number" id="id_buku" name="id_buku" class="form-control" value="<?php echo $BukuController['id_buku']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku:</label>
                <input type="text" id="judul_buku" name="judul_buku" class="form-control" value="<?php echo $BukuController['judul_buku']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang:</label>
                <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?php echo $BukuController['pengarang']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun:</label>
                <input type="number" id="tahun" name="tahun" class="form-control" value="<?php echo $BukuController['tahun']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/buku/index" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <br>
    <?php $navController->footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
