<?php
include("../koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // File upload handling
    $img = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];
    $uploadDirectory = "../img-product/";

    // Periksa apakah gambar baru diunggah
    if (!empty($img)) {
        // Jika gambar baru diunggah, pindahkan ke direktori
        $targetFile = $uploadDirectory . $img;
        move_uploaded_file($img_temp, $targetFile);
    } else {
        // Jika tidak ada gambar baru diunggah, gunakan gambar yang ada
        $result = mysqli_query($koneksi, "SELECT img FROM product WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        $img = $row['img'];
        $targetFile = $uploadDirectory . $img;
    }

    // Update database dengan data baru
    $result = mysqli_query($koneksi, "UPDATE product SET judul='$judul', kategori='$kategori', harga='$harga', stok='$stok', img='$img' WHERE id=$id");

    if ($result) {
        // Database update successful
        header("Location: data.php");
    } else {
        // Database update failed
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM product WHERE id=$id");
while ($user_data = mysqli_fetch_array($result)) {
    $judul = $user_data['judul'];
    $kategori = $user_data['kategori'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
    $img = $user_data['img']; // Gambar yang sudah ada di database
}
?>

<html>

<head>
    <title>Edit Data buku</title>
</head>

<link rel="stylesheet" href="css-admin/edit.css">

<body>

    <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">

        <h1>Edit Data Buku</h1>
        <h3>Judul</h3>
        <input type="text" name="judul" value="<?= $judul; ?>">

        <h3>Kategori</h3>
        <input type="text" name="kategori" value="<?= $kategori; ?>">

        <h3>Harga</h3>
        <input type="text" name="harga" value="<?= $harga; ?>">

        <h3>Stok</h3>
        <input type="text" name="stok" value="<?= $stok; ?>">

        <h3 class="imek">Image Book</h3>
        <input type="file" name="img" class="input-gambar"> <!-- Gunakan ini untuk mengunggah gambar baru -->


        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>