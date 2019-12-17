<?php 
    include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH DATA</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="add_nama" />
        <input type="text" name="add_jenis" />
        <input type="text" name="add_alamat" />
        <input type="text" name="add_telp" />
        <input type="submit" name="add" value="Tambahkan" />
    </form>
</body>
</html>
<?php
  
    $koneksi = mysqli_connect("localhost","kevin","123","itc");
    include_once("koneksi.php");
   if(isset($_POST['add'])) {
      $add_nama = $_POST['add_nama'];
      $add_jenis = $_POST['add_jenis'];
      $add_alamat = $_POST['add_alamat'];
      $add_telp = $_POST['add_telp'];

      mysqli_query($koneksi,"INSERT INTO customer (nm_customer,jenis,alamat,telp) VALUES('$add_nama','$add_jenis',' $add_alamat','$add_telp')");

      header("location:index.php");
     
   }
?> 

