
<h4>Filter Data Mahasiswa berdasarkan Jurusan</h4>


<div class="table-responsive">
    <table class="table table-bordered">
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
    <th>Edit</th>
    <th>Hapus</th>
    </tr>
    </thead>
    <tbody>
    <!-- Menampilkan data dari Database -->
<?php
include "koneksi.php";

$kdj =$_GET["kode_jurusan"];

//perintah query sql untuk menampilkan data 
$sql ="SELECT * FROM tbl_biodata 
        JOIN tbl_jurusan
        ON tbl_biodata.jurusan = tbl_jurusan.id_jurusan
        WHERE id_jurusan=$kdj
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
            <a <button type='button' class='btn btn-success'
            href='index.php?edit_aku=$idb'>Edit</a> 
       </td>
       <td> <a <button type='button' class='btn btn-danger'
            href='hapus-data.php?hapus_aku=$idb' onClick=\"return confirm('Yakin hapus data?')\";>Hapus</a> 
       </td>
       </tr>";
            $no++;
}
?>
    
    </tbody>
    </table>

