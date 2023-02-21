<?php
$profileArray = [
    [
        "nama" => "Ginanti Nuraeni", //string
        "kelas" => "TI06", //string
        "NIM" => "0110222056", //integer
        "ipk" => "4", //integer
        "sudah_lulus" => false //boolean
    ], [
        "nama" => "Ginanti Nuraeni", //string
        "kelas" => "TI06", //string
        "NIM" => "0110222056", //integer
        "ipk" => "4", //integer
        "sudah_lulus" => false //boolean
    ]
];

foreach ($profileArray as $profile ){
    echo $profile ['nama'];
}