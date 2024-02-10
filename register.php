<html>

<head>
    <title>Register</title>
</head>

<link rel="stylesheet" href="css/register.css">

<body>
    <div class="reg-form">

        <form action="register.php" method="post">
        <h2>REGISTER</h2>

            <h5>USERNAME</h5>
            <input type="text" name="username" placeholder="username.." required="required">

            <h5>PASSWORD</h5>
            <input type="password" name="password" placeholder="password.." required="required">

            <h5>EMAIL</h5>
            <input type="email" name="email" placeholder="email.." required="required">

            <button type="submit" name="submit">
                REGISTER
            </button>

            <a href="index.php">kembali ke halaman login</a>
        </form>

    </div>

    <?php

    if (isset($_POST['submit'])) {

        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $email = $_POST['email'];
        $status = "user";

        // include database connection file
        include_once("koneksi.php");


        // Insert user data into table

        $result = mysqli_query($koneksi, "INSERT INTO login_form (username, password, email, status)
         VALUES ('$Username', '$Password', '$email', '$status')");

        if ($result) {
            echo "<script>
              window.alert('anda telah login sebagai user')
              </script>";
        } else {
            echo "password atau username tidak valid / telah di gunakan";
        }
    }
    ?>

</body>

</html>