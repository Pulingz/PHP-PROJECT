<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

<h4>Edit Data</h4>

<?php
include "koneksi.php";

//Tangkap paramter yang ada diurl dengan
// variable global $_GET
$ide =$_GET["edit_aku"];

// Tampilan data yang akan berubah
// berdasarkan id biodatanya
$sql = "SELECT * FROM tbl_biodata WHERE id_biodata=$ide";
$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));

//tampil data dengan menarik data dari database
// menggunakan perintah mysqli_fetch
$data =mysqli_fetch_array($query);

?>

<form action="update-data.php" method="post" enctype="multipart/form-data>

<input type="hidden" name="idku" value="<?php echo $data["id_biodata"];?>">

    <label>Nama</label>
    <input type="text" name="namaku" value="<?php echo $data["Nama"]; ?>">
    <br>
    <label>Email</label>
    <input type="email" name="mailku" value="<?php echo $data["Email"]; ?>">
    <br>
    <label>Jenis Kelamin</label>
    <input type="radio" name="faiz" value="Laki-laki"<?php if($data["jenis_kelamin"] == "Laki-laki") echo "checked"; ?>>
    Laki-laki
    <input type="radio" name="faiz" value="Perempuan"<?php if($data["jenis_kelamin"] == "Perempuan") echo "checked"; ?>> 
    Perempuan
    <br>
    <label>Jurusan</label>
    <select name="Jurusan">
    <option>PILIH</option>
    <option value="1"<?php if($data["jurusan"] == "1") echo "selected"; ?>> Sistem Informasi</option>
    <option value="2"<?php if($data["jurusan"] == "2") echo "selected"; ?>> Ekonomi</option>
    <option value="3"<?php if($data["jurusan"] == "3") echo "selected"; ?>> Sastra inggris</option>
    </select>
    <br>
    <label>Tanggal</label>
    <input type="date" name="tanggal" value="<?php echo $data["tanggal"];?>">
    <br>
    <label>Alamat</label>
    <textarea name="alamat" cols="30" rows="5"><?php echo $data["alamat"];?></textarea>
    <br>
    <img src="hasil-upload/<?php echo $data["dokument"];?>" height="100" width="100">
    <br>
    <label>Unggah dokument</label>
    <input type="file" name="fileku">
    <br>
    <input type="submit" value="Change" name="save">
</form>

<a href="tampil-data.php">Lihat Data > </a>
    
</body>
</html>