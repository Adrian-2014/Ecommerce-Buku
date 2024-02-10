<?php

$server="localhost";
$username="root";
$password="";
$database="database_buku";

$koneksi = mysqli_connect($server,$username,$password,$database);

if(mysqli_connect_errno()){
    echo "Koneksi Gagal" . mysqli_connect_error();
}else{
    echo "";
}

?>