<?php
// Callback Function
function halo(string $nama, callable $format){
    $namaAkhir = call_user_func($format,$nama);
    echo "Halo $namaAkhir" . PHP_EOL;
}

halo("Joko",function($nama){return strtoupper($nama);});
halo("Koko",fn($nama)=>strtoupper($nama));
halo("Jono","strtoupper");
halo("Lolo","strtolower");