<?php

include("../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($koneksi, "DELETE FROM product WHERE id=$id");

header("Location:data.php");

?>
