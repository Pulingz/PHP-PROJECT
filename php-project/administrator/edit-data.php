

<h4>Edit Data</h4>

<?php
include "koneksi.php";

//Tangkap paramter yang ada diurl dengan
// variable global $_GET
$ide =$_GET["edit_aku"];

// Tampilan data yang akan berubah
// berdasarkan id biodatanya
$sql = "SELECT * FROM tbl_biodata WHERE id_biodata=$ide";
$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));

//tampil data dengan menarik data dari database
// menggunakan perintah mysqli_fetch
$data =mysqli_fetch_array($query);

?>

<form action="update-data.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="idku" value="<?php echo $data["id_biodata"];?>">

<div class="form-group">
        <label>Nama</label>
        <input  class="form-control col-md-6" type="text" name="namaku" required value="<?php
             echo $data["Nama"]; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control col-md-6" type="email" name="mailku" required value="<?php echo $data["Email"]; ?>">
    </div>

    <div class="form">
        <label>Jenis Kelamin</label>
        <div class="radio">
        <input type="radio" name="faiz" value="Laki-laki"<?php if($data["jenis_kelamin"] == "Laki-laki") echo "checked"; ?>>
        Laki-laki    
    </div>
    <div class="radio">
      <input type="radio" name="faiz" value="Perempuan"<?php if($data["jenis_kelamin"] == "Perempuan") echo "checked"; ?>> 
         Perempuan
    </div>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
        <select name="Jurusan" class="form-control col-md-6">
            <option>PILIH</option>
            <option value="1"<?php if($data["jurusan"] == "1") echo "selected"; ?>> Sistem Informasi</option>
            <option value="2"<?php if($data["jurusan"] == "2") echo "selected"; ?>> Ekonomi</option>
            <option value="3"<?php if($data["jurusan"] == "3") echo "selected"; ?>> Sastra inggris</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input class="form-control col-md-6" type="date" name="tanggal" value="<?php echo $data["tanggal"];?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control col-md-6" name="alamat" cols="30" rows="3"><?php echo $data["alamat"];?>

        </textarea>
    </div>
    <!-- Tampilan gambar yang akan di rubah-->
    <img src="hasil-upload/<?php echo $data["dokument"];?>" height="100" width="100">

    <div class="form-group">
        <label>Unggah dokument</label>
        <input class="form-control-file" type="file" name="fileku">
    </div>

    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Rubah" name="save">
    </div>

</form>
