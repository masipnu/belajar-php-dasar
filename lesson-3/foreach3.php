<?php
// Foreach dengan key
$alamat=[
    "desa" => "kenangan",
    "kecamatan" => "suka damai",
    "kabupaten" => "madiun"
];

foreach($alamat as $indeksi => $nila){
    echo "$indeks : $nilai" . PHP_EOL;
}