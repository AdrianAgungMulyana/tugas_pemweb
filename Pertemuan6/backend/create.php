<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Buat nama file unik
    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    // Path untuk upload
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $uploadPath = $uploadDir . $randomFilename;

    // Periksa apakah folder 'upload' ada
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Buat folder jika belum ada
    }

    // Upload file
    if (move_uploaded_file($tempImage, $uploadPath)) {
        // Simpan data ke database
        $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '/upload/$randomFilename')";
        if (mysqli_query($db_connect, $query)) {
            echo "Berhasil upload dan simpan data!";
        } else {
            echo "Gagal menyimpan data ke database.";
        }
    } else {
        echo "Gagal upload file.";
    }
}
?>
