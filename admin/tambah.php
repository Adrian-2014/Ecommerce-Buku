<html>

<head>
    <title>Tambah jumlah buku</title>
</head>
<link rel="stylesheet" href="css-admin/tambah.css">

<body>

    <form name="tambah-data" method="post" action="tambah.php" enctype="multipart/form-data">

        <h1>Tambah Produk Buku</h1>
        <h3>Judul</h3>
        <input type="text" name="judul">

        <h3>Kategori</h3>
        <input type="text" name="kategori">

        <h3>Harga</h3>
        <input type="text" name="harga">

        <h3>Stok</h3>
        <input type="text" name="stok">

        <h3 class="imek">Image Book</h3>
        <input type="file" name="img" class="input-gambar"> 

        <input type="submit" name="submit" value="Tambah">

        <a href="data.php">kembali ke home</a>
    </form>

    <?php

    // Check If form submitted, insert form data info users table.
    if (isset($_POST['submit'])) {

        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        // Upload img
        $img = $_FILES['img']['name'];
        $img_temp = $_FILES["img"]["tmp_name"];
        $img_name = uniqid() . '_' . $img;
        $img_folder = "../img-product/" . $img;

        if (move_uploaded_file($img_temp, $img_folder)) {
            // Menghubungkan ke Database
            include_once("../koneksi.php");

            // Menyimpan data ke Database
            $result = mysqli_query($koneksi, "INSERT INTO product (judul, kategori, harga, stok, img) VALUES ('$judul', '$kategori', '$harga', '$stok', '$img')");

            if ($result) {
                echo '<script>alert("Data berhasil disimpan.");</script>';
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    }

    ?>
</body>

</html>