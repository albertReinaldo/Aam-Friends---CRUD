<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <center>
    <h3>Masukkan Data Kuliah</h3>
    <form action="insert.php" method="post">
      <div class="mb-3">
        <label for="firstName" class="form-label">Kode Mata Kuliah</label>
        <input type="text" name="kode_matkul" id="kode_matkul">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_matkul" id="nama_matkul">
      </div>
      <div class="mb-3">
        <label for="Gender" class="form-label">Jam Mata Kuliah</label>
        <input type="text" name="jam_matkul" id="nama_matkul">
      </div>
      <div class="mb-3">
        <label for="Address" class="form-label">Ruang Kelas</label>
        <input type="text" name="ruang_kelas" id="ruang_kelas">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </center>
</body>
</html>