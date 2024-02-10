<?php
include("../koneksi.php");

$result = mysqli_query($koneksi, "SELECT * FROM checkout ORDER BY id DESC");
?>

<html>

<link rel="stylesheet" href="css-admin/riwayat.css">
<script src="https://unpkg.com/feather-icons"></script>

<head>
    <title>Homepage</title>
</head>

<body>

    <div class="judul">
        <p> Riwayat Pembelian Alterra Shop</p>

    </div>

    <div class="panduan">
        <div class="a">
            <a href="data.php">Kembali</a>
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
            $query = "SELECT * FROM checkout WHERE LOWER(nama) LIKE LOWER('%$search%') OR  LOWER(alamat) LIKE LOWER('%$search%') ORDER BY id DESC";
            $result = mysqli_query($koneksi, $query);
        } else {
            // If the form is not submitted, fetch all products
            $result = mysqli_query($koneksi, "SELECT * FROM checkout ORDER BY id DESC");
        }
        ?>
    </div>

    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nomor Dana</th>
            <th>Judul buku yang dibeli</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result)) :
        ?>
            <tr>
                <td><?= $user_data['nama']; ?></td>
                <td><?= $user_data['email']; ?></td>
                <td><?= $user_data['alamat']; ?></td>
                <td><?= $user_data['nomor']; ?></td>
                <td><?= $user_data['judul']; ?></td>
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