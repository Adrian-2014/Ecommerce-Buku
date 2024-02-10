<?php
include("../koneksi.php");

$result = mysqli_query($koneksi, "SELECT * FROM product ORDER BY id DESC");
?>

<html>

<link rel="stylesheet" href="css-admin/data.css">
<script src="https://unpkg.com/feather-icons"></script>

<head>
    <title>Homepage</title>
</head>

<body>

    <div class="judul">
        <p> Data Produk Alterra Shop</p>

    </div>

    <div class="panduan">
        <div class="a">
            <a href="tambah.php">TAMBAH DATA</a>
        </div>
        <div class="search-form">
            <form action="#produk" method="post">
                <input type="search" name="search" id="search-box" placeholder="Cari disini..">
                <button type="submit" name="submit"><i data-feather="search"></i></button>
            </form>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $search = mysqli_real_escape_string($koneksi, $_POST["search"]);
            $query = "SELECT * FROM product WHERE LOWER(judul) LIKE LOWER('%$search%') OR  LOWER(kategori) LIKE LOWER('%$search%') ORDER BY id DESC";
            $result = mysqli_query($koneksi, $query);
        } else {
            // If the form is not submitted, fetch all products
            $result = mysqli_query($koneksi, "SELECT * FROM product ORDER BY id DESC");
        }
        ?>
        <div class="pindah">
            <a href="../user/home.php" class="dua">ke page user</a>
            <a href="../admin/riwayat.php">Lihat Riwayat</a>
        </div>

    </div>

    <table>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Update</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result)) :
        ?>
            <tr>
                <td><?= $user_data['judul']; ?></td>
                <td><?= $user_data['kategori']; ?></td>
                <td><?= "Rp " . $user_data['harga']; ?></td>
                <td><?= $user_data['stok']; ?></td>
                <td><img src="../img-product/<?= $user_data['img']; ?>"></td>
                <td><?= "<a href='edit.php?id=$user_data[id]'><i data-feather='edit'></i></a>
                <a href='hapus.php?id=$user_data[id]'><i data-feather='trash-2'></i></a>" ?></td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>

    <script>
        feather.replace();
    </script>
</body>

</html>