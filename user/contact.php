<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>


<body>

    <nav class="navbar">
        <nav class="navbar">
            <h1>Alterra Shop</h1>
            <div class="isi-nav">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="#">Contact</a>
                <a href="../index.php">Log out</a>
            </div>

            <div class="ham">
                <a href="#" id="hamburger-menu">
                    <i data-feather="menu"></i>
                </a>
            </div>
        </nav>
    </nav>

    <div class="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.47368431167!2d112.76395407332774!3d-7
            .3005576717648575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa5385e1323d%3A0xd34919933df0314!2sSekolah%20Me
            nengah%20Kejuruan%2017%20Agustus%201945%20Surabaya!5e0!3m2!1sid!2sid!4v1697430483527!5m2!1sid!2sid" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="form">
            <h4>USERNAME</h4>
            <input type="text" class="name" name="username" placeholder="username.." required="required">

            <h4>E-MAIL</h4>
            <input type="email" class="email" placeholder="email.." required="required">

            <h4>PESAN</h4>
            <textarea class="text" placeholder="ketikan pesan anda disini.."></textarea>

            <div class="submit">
                <a href="">kirim</a>
            </div>

        </div>
    </div>


    <!-- footer -->

    <footer class="footer">

        <div class="sosmed">
            <a href="https://facebook.com">
                <i data-feather="facebook"></i>
            </a>
            <a href="https://instagram.com">
                <i data-feather="instagram"></i>
            </a>
            <a href="https://youtube.com">
                <i data-feather="youtube"></i>
            </a>
            <a href="https://twitter.com">
                <i data-feather="twitter"></i>
            </a>
        </div>

        <div class="direction">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="#">Contact</a>
            <a href="home.php#produk">produk</a>
        </div>

        <div class="copyright">
            Created By | <span class="c">&copy;</span> <span class="n">M.Adrian Kurniawan</span>
        </div>

        <!-- footer end -->

    </footer>

    <script>
        feather.replace();
    </script>

    <script src="../script.js"></script>
</body>

</html>