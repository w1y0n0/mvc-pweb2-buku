<!-- app/views/loans/edit.php -->
<?php require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peminjaman Buku</title>
    <!-- Menambahkan link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php $navController->nav(); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Data Peminjaman Buku</h2>
        
        <!-- Form Edit -->
        <form action="/loans/update/<?php echo htmlspecialchars($loans['id_loans']); ?>" method="POST">
            <div class="mb-3">
                <label for="id_loans" class="form-label">ID Loans :</label>
                <input type="text" id="id_loans" name="id_loans" class="form-control" value="<?php echo htmlspecialchars($loans['id_loans']); ?>" readonly>
            </div>
            
            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku :</label>
                <input type="number" id="id_buku" name="id_buku" class="form-control" value="<?php echo htmlspecialchars($loans['id_buku']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="id_user" class="form-label">ID User :</label>
                <input type="number" id="id_user" name="id_user" class="form-control" value="<?php echo htmlspecialchars($loans['id_user']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman :</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" value="<?php echo htmlspecialchars($loans['tgl_pinjam']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Pengembalian :</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" value="<?php echo htmlspecialchars($loans['tgl_kembali']); ?>" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/loans/index" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
    <br>
    <?php $navController->footer(); ?>

    <!-- Menambahkan link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
