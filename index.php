<?php
require('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS University Class</title>
    <!-- CSS only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1> Daftar Kelas</h1>  
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">kode_matkul</th>
      <th scope="col">nama_matkul</th>
      <th scope="col">jam_matkul</th>
      <th scope="col">ruang_kelas</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM mata_kuliah";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
      //var_dump(mysqli_num_rows($result) > 0);
      while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<th scope='col'>{$row['kode_matkul']}</th>";
        echo "<th scope='col'>{$row['nama_matkul']}</th>";
        echo "<th scope='col'>{$row['jam_matkul']}</th>";
        echo "<th scope='col'>{$row['ruang_kelas']}</th>";
        echo "<th scope='col'><a href='edit.php?kode_matkul=$row[kode_matkul]'>Edit</a> | <a href='delete.php?kode_matkul=$row[kode_matkul]'>Delete</a></th>";
        echo "</tr>";
      }
    } else{
      echo"<tr>";
      echo "<td colspan='5'>No Matkul data inputted, Please Click <a href='./index.php'>Here</a> to Input Matkul Data</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
<button type="button" class="btn btn-secondary btn-lg"><a href="select.php">Add Data</a></button>
<h3>Aam & Friends</h3>
<ul>
  <li>2401960744 - Abraham Putra Lukas</li>
  <li>2440004262 - Aldo Matthew Wirawan</li>
  <li>2401960826 = Albert Reinaldo</li>
  <li>2440008802 - Ryan Christian</li>
  <li>2401962642 - Carel Surya Adeputra</li>
</ul>
</body>
</html>