<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Produk</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary text-center">
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar Produk</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require './config/db.php';

                        $products = mysqli_query($db_connect, "SELECT * FROM products");
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($products)) {
                    ?>
                    <tr>
                        <td class="text-center"><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td>Rp <?=number_format($row['price'], 0, ',', '.');?></td>
                        <!-- Thumbnail gambar jika diinginkan -->
                        <!-- <td class="text-center"><img src="<?=$row['image'];?>" alt="Gambar Produk" style="width: 100px; height: auto;"></td> -->
                        <td class="text-center"><a href="<?=$row['image'];?>" target="_blank" class="btn btn-link">Unduh</a></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
