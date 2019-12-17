<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_customer   = $_GET['id_customer'];
// query SQL untuk insert data
$query="DELETE from customer where id_customer='$id_customer'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>