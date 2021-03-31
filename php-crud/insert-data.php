<?php
// gunakan fungsi include php untuk menyertakan skrip kode
// berada pada lokasi yang berbeda
include "koneksi.php";

$nm=$_POST["namaku"];
$em=$_POST["mailku"];
$jk=$_POST["faiz"];
$jr=$_POST["Jurusan"];
$tg=$_POST["tanggal"];
$al=$_POST["alamat"];

echo "Nama saya: $nm dan email saya $em"; 

//proses upload file
$nm_file = $_FILES["fileku"]["name"];// nama file yang akan di upload
$temp_file = $_FILES["fileku"]["tmp_name"];// file sementara berada di XAMPP/tamp/
$uk_file = $_FILES["fileku"]["size"];// Ukuran File yang di upload
$jn_file = $_FILES["fileku"]["type"];// Jenis File yang akan di upload

// buatkan lokasi file untuk disimpan
$dir = "hasil-upload/$nm_file";

// pindahkan file dari lokasi sementara ke lokasi tujuan 
move_uploaded_file($temp_file,$dir);

// deskripsi
echo "Nama file: $nm_file<br>";
echo "Lokasi file sementara ada di: $temp_file <br>";
echo "Ukuran file sebesar: $uk_file <br>";
echo "File bertipe: $jn_file";

// perintah query sql untuk memasukkan data ke dalam database
$sql="INSERT INTO tbl_biodata (Nama, Email, jenis_kelamin, jurusan, tanggal, alamat, dokument) VALUES('$nm', '$em', '$jk', '$jr', '$tg', '$al', '$nm_file')";

//eksekusi perintah sql tersebut dengan mysqli_query
$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));

// arahkan halaman dengan perintah redirect page
if($query){
    //jika berhasil insert data
    // arahkan halaman ke tampil-data.php
    //versi php
    /*header("location: tampil-data.php");*/

    // versi html dengan javascript
    echo "<script type='text/javascript'>alert('sukses insert ke database!')</script>
         <meta http-equiv='refresh' content='2; url=tampil-data.php'>";
} else {
    // jika gagal insert data
    echo "gagal insert ke database!";
}


?>