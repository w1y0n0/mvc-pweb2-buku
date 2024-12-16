<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php $navController->nav(); ?>

    <!-- Form Edit -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Pengguna</h2>

        <form action="/user/update/<?php echo htmlspecialchars($user['id_user']); ?>" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo htmlspecialchars($user['nama']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" value="<?php echo htmlspecialchars($user['password']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="no_anggota" class="form-label">No Anggota</label>
                <input type="number" id="no_anggota" name="no_anggota" class="form-control" value="<?php echo htmlspecialchars($user['no_anggota']); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/user/index" class="btn btn-secondary">Kembali ke Daftar</a>
        </form>
    </div>
    <br>
    <?php $navController->footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
