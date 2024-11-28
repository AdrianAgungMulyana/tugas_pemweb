<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Tambah Produk</h3>
            </div>
            <div class="card-body">
                <a href="show.php" class="btn btn-secondary mb-3">Lihat Data Produk</a>
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Input nama produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk:</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Input harga produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk:</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
