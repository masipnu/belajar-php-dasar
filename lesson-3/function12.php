<?php
// Variable function
function halo(string $nama,$format){
    $namaAkhir = $format($nama);
    echo "Halo $namaAkhir" . PHP_EOL;
}

halo("joko","strtoupper");