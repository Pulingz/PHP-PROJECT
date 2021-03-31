<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
</head>
<body>
<h4>Form Daftar</h4>
<?php
if(isset($_GET["sukses"])){
    echo "<p style='color: green;'>Terima Kasih, Silahkan Melakukan Login.</p>";

}

?>
 <form action="insert-daftar.php" method="post">
    <label>Username</label>
    <input type="text" name="user" required>
    <br>
    <label>Password</label>
    <input type="password" name="pass" required>
    <br>
    <input type="submit" name="simpan" value="DAFTAR">
    <input type="reset" name="batal" value="BATAL">
    </form>

    <a href="login.php">Sudah Punya akun Login di Sini</a>

    
</body>
</html>