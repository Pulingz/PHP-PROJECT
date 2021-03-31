<?php
session_start();//memulai sebuah sesi

include "koneksi.php";
//cek apakah tombol telah di set atau di klik
// jika sudah maka jalankan perintah kode di bawah ini
if(isset($_POST["masuk"])){
    // diambil dari nama form login
        $us =$_POST["userku"];// nama form userku
        $ps =$_POST["passku"];// nama form passku
        echo "username saya: $us dan sandi saya $ps";

        // cocokan hasil inputan dengan tabel user
        // yang ada didatabase
    $sql ="SELECT * FROM tbl_user WHERE username='$us' AND password='$ps'";
    $query=mysqli_query($konek, $sql) or die (mysqli_error($konek));

        // TARIK DATA DARI DATABASE utk username dan pasword
        $data=mysqli_fetch_array($query);

        //lakukan pencocokan, dengan menarik baris terlebih dahulu
        // dengan fungsi mysqli_num_rows()
        if(mysqli_num_rows($query) > 0){
        // jika username dan pasword cocok
        //echo "cocok nihhhh";

        // maka buatkan sesi untuk login
        $_SESSION["tiket_user"]=$data["username"];
        $_SESSION["tiket_pass"]=$data["password"];

        // kemudian arahkan ke halaman index.php
        header("location: index.php");

        } else {
            // jika username dan pasword tidak cocok
            echo " gagal nihhhhhh";
        }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <h4>Login Dulu ya,.....</h4>

    <fieldset>
    <legend>Form Login</legend>
    <form action="" method="post">
        <label>Username</label>
        <input type="text" name="userku">
        <br>
        <label>Password</label>
        <input type="password" name="passku">
        <br>
        <input type="submit" name="masuk" value="LOGIN">
        <input type="reset" name="batal"  value="CANCEL">
        </form>
    </fieldset>

    <a href="daftar.php">Belum Punya akun Daftar di sini</a>
</body>
</html>