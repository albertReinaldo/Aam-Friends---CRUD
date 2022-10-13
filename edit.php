<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $kode_matkul =  $_REQUEST['kode_matkul'];
    $nama_matkul = $_REQUEST['nama_matkul'];
    $jam_matkul =  $_REQUEST['jam_matkul'];
    $ruang_kelas = $_REQUEST['ruang_kelas'];

    $result = mysqli_query($conn, "UPDATE mata_kuliah SET nama_matkul='$nama_matkul',jam_matkul='$jam_matkul',ruang_kelas='$ruang_kelas' WHERE kode_matkul='$kode_matkul'");

    header("Location: select.php");
}
?>
<?php
$kode_matkul = $_GET['kode_matkul'];

$result = mysqli_query($conn, "SELECT * FROM mata_kuliah WHERE kode_matkul='$kode_matkul'");

while ($row = mysqli_fetch_array($result)) {
    $nama_matkul = $row['nama_matkul'];
    $kode_matkul = $row['kode_matkul'];
    $jam_matkul = $row['jam_matkul'];
    $ruang_kelas = $row['ruang_kelas'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <center>
        <a href="index.php">Home</a>
        <br /><br />

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Nama Matkul</td>
                    <td><input type="text" name="nama_matkul" value=<?php echo $nama_matkul; ?>></td>
                </tr>
                <tr>
                    <td>Kode Matkul</td>
                    <td><input type="text" name="jam_matkul" value=<?php echo $jam_matkul; ?>></td>
                </tr>
                <tr>
                    <td>Jam Matkul</td>
                    <td><input type="text" name="ruang_kelas" value=<?php echo $ruang_kelas; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="kode_matkul" value=<?php echo $_GET['kode_matkul']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>