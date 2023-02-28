<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 02 - Form Handling</title>
</head>
<style>
    body{
        background:plum;
    }
</style>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
        
        <!-- tipe radio  -->
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki_laki"> <label>Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> <label>Perempuan</label><br><br>

        <!-- tipe checkbox  -->
        <label for="hobi">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Music"> <label>Music</label><br>
        <input type="checkbox" name="hobi[]" value="Drakor"> <label>Drakor</label><br>
        <input type="checkbox" name="hobi[]" value="Tidur"> <label>Tidur</label><br><br>

        <!-- tipe number  -->
        <label for="umur">Umur</label><br>
        <input type="number" name="umur"><br><br>

        <!-- tipe date  -->
        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir"><br><br>

        <!-- dropdown select  -->
        <label for="prodi">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        <!-- button  -->
        <button type="submit">SIMPAN</button>
        <button type="reset">RESET</button>
    </form>
</body>
</html>