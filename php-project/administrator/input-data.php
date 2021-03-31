

<h4>Form Pendaftaran</h4>

<form action="insert-data.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control col-md-6" type="text" name="namaku" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control col-md-6" type="email" name="mailku" required>
    </div>

    <div class="form">
        <label>Jenis Kelamin</label>
        <div class="radio">
        <input type="radio" name="faiz" value="Laki-laki">Laki-laki
    </div>
    <div class="radio">
        <input type="radio" name="faiz" value="Perempuan">Perempuan
    </div>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
        <select name="Jurusan" class="form-control col-md-6">
        <option>PILIH</option>
        <option value="1">Sistem Informasi</option>
        <option value="2">Ekonomi</option>
        <option value="3">Sastra inggris</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input class="form-control col-md-2" type="date" name="tanggal">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control col-md-6" name="alamat" cols="30" rows="3">

        </textarea>
    </div>
    <div class="form-group">
        <label>Unggah dokument</label>
        <input class="form-control-file" type="file" name="fileku">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="SIMPAN" name="save">
        <input class="btn btn-danger" type="Reset" value="BATAL" name="cancel">
    </div>
   
</form>
