<?php
// array berisi angka
$angka = array(1,2,3,4,5);
// var_dump($angka);

// array berisi string
$nama = [
    "Joko",
    "Santoso"
];
// var_dump($nama);

// array berisi campuran
$campur = [
    100,
    5.6,
    "Apel",
    true,
    null
];
// var_dump($campur);

// Array Asosiatif
$alamat = [
    "jalan" => "Margayasa No. 33",
    "kelurahan" => "Mojorejo",
    "kecamatan" => "Taman",
    "kota" => "Madiun"
];
// var_dump($alamat);

// Menampilkan data array
// echo $angka[1];
// echo $nama[0];
// echo $alamat["kota"]."\n";
// $alamat["kota"] = "Ngawi";
// echo $alamat["kota"];

// Menambah data array
// $nama[] = "Selalu";
// var_dump($nama);

// Menambah key dan data baru
// $alamat["provinsi"] = "Jawa Timur";
// var_dump($alamat);

// Menghapus data di dalam array
// unset($alamat["jalan"]);
// var_dump($alamat);

// Menghitung jumlah data array
// echo count($alamat);


// Membuat array multi-dimensi
$pegawai = [
    "id" => "K01",
    "nama" => [
        "nama_depan" => "Jacob",
        "nama_belakang" => "Thronton"
    ],
    "umur" => 25
];
$pegawai["alamat"]=[
    "jalan" => [
        "nama"  => "Margoyoso",
        "no"    => 33
    ],
    "kelurahan" => "Mojorejo",
    "kecamatan" => "Taman"
];
print_r($pegawai);
echo $pegawai["nama"]["nama_depan"];
echo $pegawai["alamat"]["jalan"]["nama"]."\n";
$pegawai["alamat"]["jalan"]["nama"] = "Merdeka";
echo $pegawai["alamat"]["jalan"]["nama"];