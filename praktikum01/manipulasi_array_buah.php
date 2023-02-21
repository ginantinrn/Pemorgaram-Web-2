<?php
$arrayBuah = ["Semangka", "Strawberry", "Lemon", "Mangga"];

sort($arrayBuah); //Mengurutkan huruf depan sesuai abjad atau mengurutkan aray

array_pop($arrayBuah); //menghapus nilai array yang terakhir (setelah diurutkan)

unset($arrayBuah[2]); //menghapus spesifik value array tertentu

array_push($arrayBuah, "Anggur"); //menambahkan value array dibelakang

array_shift($arrayBuah); //untuk menghapus array yang paling depan

array_unshift($arrayBuah, "Apel"); //menambahkan value aray didepan

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}