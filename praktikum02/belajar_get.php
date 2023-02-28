<?php
$nama = $_GET['nama'];
$jk = $_GET['jenis_kelamin'];
$umur = $_GET['umur'];
$tanggal_lahir = $_GET['tanggal_lahir'];
$hobi = $_GET['hobi'];
$prodi = $_GET['prodi'];


echo "Hasil Formulir Pendaftaran : <br>";
echo "Nama : ". $nama. "<br>";
echo "Jenis Kelamin : ". $jk. "<br>";
echo "Umur : ". $umur. "<br>";
echo "Tanggal Lahir : ". $tanggal_lahir. "<br>";
echo "Hobi : ". $hobi. "<br>";
// foreach($hobi as $h){
//     echo $h . ", <br>";
//     }
echo "Prodi : ". $prodi. "<br>";