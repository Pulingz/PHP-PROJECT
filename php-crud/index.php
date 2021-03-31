<?php
	session_start();

	// cek apakah sesi ada atau sesi dikenali
	// jika sesi tidak dikenali atau kosong
	// maka arahkan ke halaman login.php
	if(empty($_SESSION["tiket_user"])){
		// jika sesi tidak dikenali
		header("location: login.php"); 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS | Dashboard Panel</title>
</head>
<body>

	<h3>Selamat Datang di halaman Administrator</h3>

	<h4>Saat ini kamu login dengan username: <span style="color: green;">Admin</span></h4>
	<h4>Status user level kamu sebagai: <span style="color: red;">Member</span></h4>

	<h4>Pilih Menu</h4>
	<ol>
		<li><a href="input-data.php">Tambah Data</a></li>
		<li><a href="tampil-data.php">Lihat Data</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ol>

</body>
</html>