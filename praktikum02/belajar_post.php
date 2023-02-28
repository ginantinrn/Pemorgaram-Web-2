<?php
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$hobi = $_POST['hobi'];
$prodi = $_POST['prodi'];

echo "Hasil Formulir Pendaftaran : <br>";
echo "Nama : ". $nama. "<br>";
echo "Jenis Kelamin : ". $jk. "<br>";
echo "Umur : ". $umur. "<br>";
echo "Tanggal Lahir : ". $tanggal_lahir. "<br>";
echo "Hobi : ";
foreach($hobi as $h){
    echo $h . ", <br>";
    }
echo "Prodi : ". $prodi. "<br>";