<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>Form Pendaftaran</h4>

<form action="insert-data.php" method="post" enctype="multipart/form-data">
    <label>Nama</label>
    <input type="text" name="namaku">
    <br>
    <label>Email</label>
    <input type="email" name="mailku" placeholder="Email Anda">
    <br>
    <label>Jenis Kelamin</label>
    <input type="radio" name="faiz" value="Laki-laki">
    Laki-laki
    <input type="radio" name="faiz" value="Perempuan">
    Perempuan
    <br>
    <label>Jurusan</label>
    <select name="Jurusan">
    <option>PILIH</option>
    <option value="1">Sistem Informasi</option>
    <option value="2">Ekonomi</option>
    <option value="3">Sastra inggris</option>
    </select>
    <br>
    <label>Tanggal</label>
    <input type="date" name="tanggal">
    <br>
    <label>Alamat</label>
    <textarea name="alamat" cols="30" rows="5"></textarea>
    <br>
    <label>Unggah dokument</label>
    <input type="file" name="fileku">
    <br>
    <input type="submit" value="SIMPAN" name="save">
    <input type="Reset" value="BATAL" name="cancel">
</form>

<a href="tampil-data.php">Lihat Data > </a>
    
</body>
</html>