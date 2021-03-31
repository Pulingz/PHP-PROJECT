<?php
include "koneksi.php";

//tangkap parameter yang berada di url dengan
// variable global $_GET
$idh =$_GET["hapus_aku"];

// perintah query sql untuk melakukan hapus data 
$sql ="DELETE FROM tbl_biodata WHERE id_biodata='$idh'";
$query =mysqli_query($konek, $sql) or die (mysqli_error($konek));

if($query){

    echo "<script type='text/javascript'>alert('sukses Hapus Data Dari database!')</script>
         <meta http-equiv='refresh' content='2; url=tampil-data.php'>";
} else {
    
    echo "gagal insert ke database!";
}