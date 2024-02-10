<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alterra Shop</title>
  <link rel="stylesheet" href="../css/home.css" />

  <!-- icon -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

  <!-- database -->

  <?php
  include("../koneksi.php");

  $result = mysqli_query($koneksi, "SELECT * FROM product ORDER BY id DESC");
  ?>
  <!-- database end -->


  <!-- navbar -->

  <nav class="navbar">

    <div class="alterra">
      <h1><span>Alterra</span> Shop</h1>
    </div>

    <div class="isi-nav">
      <a href="#">Home</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="../index.php">Log out</a>
    </div>

    <div class="search-form">
      <form action="#produk" method="post">
        <input type="search" name="search" id="search-box" placeholder="Cari disini..">
        <label for="search-box">
          <button type="submit" name="submit"><i data-feather="search"></i></button>
        </label>
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

    <div class="tombol">
      <a href="#" id="search-icon">
        <i data-feather="search"></i>
      </a>
      <a href="#" id="hamburger-menu">
        <i data-feather="menu"></i>
      </a>
    </div>
    
  </nav>
  <!-- navbar end -->

  <!-- banner -->

  <section class="banner" id="home">
    <main class="teks">
      <p class="quote">Hal <span class="big">Besar</span> dimulai dari sesuatu yang <span class="kcl">Kecil</span></p>
      <p class="name">~Master Oogway</p>
      <p class="p">
        Mari kita Luaskan Pengetahuan dan wawasan dengan membaca buku.
      </p>
      <a href="#produk">Lihat Produk</a>
    </main>
  </section>

  <!-- banner end -->

  <!-- product -->

  <div class="product" id="produk">

    <div class="judul">
      <h2><span>Produk</span> Tersedia</h2>
      <p>-Disini tersedia berbagai macam jenis buku kualitas terbaik yang bisa anda beli-</p>
    </div>

    <div class="list-product">
      <?php while ($user_data = mysqli_fetch_array($result)) : ?>
        <div class="item">
          <img src="../img-product/<?= $user_data['img']; ?>">
          <h5><?= $user_data['judul']; ?></h5>
          <p><?= "Rp. " . $user_data['harga']; ?></p>
          <a href="checkout.php?id=<?= $user_data['id']; ?>">Beli Sekarang</a>
        </div>
      <?php endwhile; ?>
    </div>



    <!-- product end -->

    <footer class=" footer">

      <div class="sosmed">
        <a href="https://facebook.com">
          <i data-feather="facebook"></i>
        </a>
        <a href="https://instagram.com">
          <i data-feather="instagram"></i>
        </a>
        <a href="https://youtu.be/gG5-ohzSDu8?si=Mtp0vRqfKrtXNCSx">
          <i data-feather="youtube"></i>
        </a>
        <a href="https://twitter.com">
          <i data-feather="twitter"></i>
        </a>
      </div>

      <div class="direction">
        <a href="#">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="#produk">produk</a>
      </div>

      <div class="copyright">
        Created By | <span class="c">&copy;</span> <span class="n">M.Adrian Kurniawan</span>
      </div>

    </footer>

    <script>
      feather.replace();
    </script>

    <script src="../script.js"></script>
</body>

</html>