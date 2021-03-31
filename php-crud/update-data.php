<?php
include "koneksi.php";

$nm=$_POST["namaku"];
$em=$_POST["mailku"];
$idu=$_POST["idku"];
$jk=$_POST["faiz"];
$jr=$_POST["Jurusan"];
$tg=$_POST["tanggal"];
$al=$_POST["alamat"];

//proses upload file
$nm_file = $_FILES["fileku"]["name"];// nama file yang akan di upload
$temp_file = $_FILES["fileku"]["tmp_name"];// file sementara berada di XAMPP/tamp/
$uk_file = $_FILES["fileku"]["size"];// Ukuran File yang di upload
$jn_file = $_FILES["fileku"]["type"];// Jenis File yang akan di upload

// buatkan lokasi file untuk disimpan
$dir = "hasil-upload/$nm_file";

move_uploaded_file($temp_file,$dir);


//lakukan update query
$sql ="UPDATE tbl_biodata 
SET nama='$nm', 
    email='$em',
    jenis_kelamin='$jk',
    jurusan='$jr',
    tanggal='$tg',
    alamat='$al',
    dokument='$nm_file'
 WHERE id_biodata='$idu'";
$query =mysqli_query($konek, $sql) or die (mysqli_error($konek));

if($query){

    echo "<script type='text/javascript'>alert('sukses Rubah ke database!')</script>
         <meta http-equiv='refresh' content='2; url=tampil-data.php'>";
} else {
    
    echo "gagal insert ke database!";
}
