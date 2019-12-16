<?php
    include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body > 
<div class="s01">
      <form action="" method="post"> 
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" name="query" type="text" placeholder="What are you looking for?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" name="btn-1" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
 
<table class="table">
  <thead class="thead-primary" style="background-color: purple; color: white;">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Alamat</th>
      <th scope="col">Contact</th>
      
    </tr>
  </thead>
  <tbody>
  
  <?php
  if(isset($_POST['btn-1'])){
    $query = $_POST['query'];
    $sql = "SELECT * FROM customer WHERE nm_customer LIKE '%$query%' OR jenis LIKE '%$query%' OR alamat LIKE '%$query%' OR telp LIKE '%$query%'";
    $result = mysqli_query($koneksi,$sql);
    $resultCheck = mysqli_num_rows($result);
 
    if($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){
        $nama_customer = $row['nm_customer'];
        $jenis = $row['jenis'];
        $alamat = $row['alamat'];
        $telp = $row['telp'];
        echo "<tr>";
        echo "<td>$nama_customer</td>";
        echo "<td>$jenis</td>";
        echo "<td>$alamat</td>";
        echo "<td>$telp</td>";
        echo "</tr>";
      }
    }
  }
   
   ?>
  </tr>
   
  </tbody>
</table>

</body>
</html>