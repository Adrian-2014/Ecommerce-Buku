<html>

<head>
    <title>Login</title>
</head>

<link rel="stylesheet" href="css/style.css">



<body>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script>
                    window.alert('Username dan Password tidak sesuai')
                </script>";
        }
    }
    ?>


    <div class="login-form">

        <form action="cek_log.php" method="post">

            <h1>LOGIN</h1>

            <h3>USERNAME</h3>
            <input type="text" name="username" placeholder="masukkan username.." required="required">

            <h3>PASSWORD</h3>
            <input type="password" name="password" placeholder="masukkan password.." required="required">

            <button type="submit">
                LOGIN
            </button>

            <a href="register.php">belum punya akun?</a>
        </form>
    </div>

</body>

</html>