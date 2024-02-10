<?php
//mengaktifkan session pada php
session_start();
//menghubungkan php dengan koneksi database
include 'koneksi.php';
//menangkap data yang dikirim dari form login
$Username = $_POST['username'];
$Password = $_POST['password'];
//menyeleksi data user dengan username dan password yang
$login = mysqli_query($koneksi, "select * from login_form where 
username= '$Username' and password= '$Password'");
//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada data!
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    // cek jika login sebagai admin
    if ($data['status'] == "admin") {
        // buat session login dan username
        $_SESSION['username'] = $Username;
        $_SESSION['status'] = "admin";
        // alihkan ke halaman dasboard admin
        header("location:admin/data.php");

        // cek jika user login sebagai pegawai
    } else if ($data['status'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $Username;
        $_SESSION['status'] = "user";
        // alihkan ke halaman dasboard admin
        header("location:user/home.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
