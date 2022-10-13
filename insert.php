<?php

require('config.php');

$kode_matkul = $_REQUEST['kode_matkul'];
$nama_matkul = $_REQUEST['nama_matkul'];
$jam_matkul = $_REQUEST['jam_matkul'];
$ruang_kelas = $_REQUEST['ruang_kelas'];

$sql = "INSERT INTO mata_kuliah VALUES (
    '$kode_matkul',
    '$nama_matkul',
    '$jam_matkul',
    '$ruang_kelas'
    )";

if(mysqli_query($conn, $sql)){
    echo "<h3> Data stored in Database Successfully."
        ."Please browse your localhost php my admin to view the updated data </h3>";

    header('Location: index.php');
}
else{
    echo"ERROR $sql."
    . mysqli_error($conn);
}

//close connection
mysqli_close($conn);

