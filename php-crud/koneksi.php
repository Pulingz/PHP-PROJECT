<?php

$server="localhost";// nama server yang digunakan
$user="root";//user yang digunakan 
$pass="";// password yang dipakai
$db="db_faiz";

//buat perintah untuk melakukan koneksi ke database
$konek= mysqli_connect($server, $user, $pass, $db);

// cek apakah koneksi ke database berhasil
if($konek){
    //jika koneksi gagal
    echo"Koneksi sukses!";
} else {
    //jika koneksi gagal
    echo"Gagal melakukan koneksi!";
}
