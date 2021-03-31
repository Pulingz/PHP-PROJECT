<?php
    include "koneksi.php";

    $us =$_POST ["user"];
    $ps =$_POST ["pass"];

    $sql ="INSERT INTO tbl_user (username, password) VALUES('$us', '$ps')";
    $query = mysqli_query($konek, $sql) or die (mysqli_error($konek));

    if($query){
        echo "<script type='text/javascript'>alert('Berhasil Melakukan Pendaftaran!')</script>
        <meta http-equiv='refresh' content='1; url=daftar.php?sukses'>";
    }