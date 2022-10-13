<?php

require('config.php');

$kode_matkul = $_GET['kode_matkul'];

$sql = "DELETE FROM mata_kuliah WHERE kode_matkul='$kode_matkul'";
// $sql = "DELETE FROM mata_kuliah WHERE kode_matkul='D6657'";

// if($)
if (mysqli_query($conn, $sql)) {
    echo "<h3>Data is Sucessfully Deleted</h3>";

    header('Location: index.php');
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


?>