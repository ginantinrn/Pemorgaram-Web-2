<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="nilai_mahasiswa.php" method="POST">
  <div class="form-group">
    <label for="nama_mahasiswa">Nama Mahasiswa</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-user"></i>
        </div>
      </div> 
      <input id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukan Nama Mahasiswa" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="mata_kuliah">Mata Kuliah</label> 
    <div>
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uts">Nilai UTS</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-calculator"></i>
        </div>
      </div> 
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Mahasiswa" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uas">Nilai UAS</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-calculator"></i>
        </div>
      </div> 
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Mahasiswa" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="textnilai_tugas">Nilai Tugas</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-calculator"></i>
        </div>
      </div> 
      <input id="textnilai_tugas" name="textnilai_tugas" placeholder="Masukan Nilai Tugas Mahasiswa" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>