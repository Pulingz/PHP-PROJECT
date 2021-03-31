<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data</title>
</head>
<body>
<h4>Tampil Data Mahasiswa</h4>

<!-- Fitur Pencarian-->
<form action="cari-data.php" method="get">
    <input type="text" name="cari" placeholder="Kata Kunci">
    <input type="submit" name="find" value="Search">


<table border="1">
<thead>
<tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jenis Kelamin</th>
    <th>Jurusan</th>
    <th>Tanggal</th>
    <th>Alamat</th>
    <th>foto</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <!-- Menampilkan data dari Database -->
<?php
include "koneksi.php";

//perintah query sql untuk menampilkan data 
$sql ="SELECT * FROM tbl_biodata 
        JOIN tbl_jurusan
        ON tbl_biodata.jurusan = tbl_jurusan.id_jurusan
        ORDER BY id_biodata 
        DESC";
$query =mysqli_query($konek, $sql) or die (mysqli_error($konek));

$no =1;// Nomor Urut

//Lakukan perulangan data dengan while
// tarik data database dengan mysqli_fetch_array
while($data = mysqli_fetch_array($query)){

    //deklarasikan
    $nma = $data["Nama"]; //Di ambil dari Nama kolom
    $emi = $data["Email"];
    $idb = $data["id_biodata"];
    $jkl =$data["jenis_kelamin"];
    $jr  =$data["jurusan"];
    $tgl =$data["tanggal"];
    $al  =$data["alamat"];
    $fl =$data["dokument"];
    $kt =$data["keterangan"];
    echo "<tr>
            <td>$no</td>
            <td>$idb</td>
            <td>$nma</td>
            <td>$emi</td>
            <td>$jkl</td>
            <td>$kt</td>
            <td>$tgl</td>
            <td>$al</td>
            <td><img src='hasil-upload/$fl' height='100' width='100'></td>
            <td>
                <a href='edit-data.php?edit_aku=$idb'>Edit</a> 
                | 
               <a href='hapus-data.php?hapus_aku=$idb' onClick=\"return confirm('Yakin hapus data?')\";>Hapus</a> 
            </td>
            </tr>";
            $no++;
}
?>
    
    </tbody>
    </table>

    <li><a href="filter-data.php?kode_jurusan=1">Sistem Informasi</a></li>
    <li><a href="filter-data.php?kode_jurusan=2">Ekonomi</a></li>
    <li><a href="filter-data.php?kode_jurusan=3">Sastra Inggris</a></li>
    <a href="input-data.php">Tambah Data +</a>
</body>
</html>