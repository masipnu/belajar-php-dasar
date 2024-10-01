<?php
// Akses variable di luar closure
$namaDepan = "Anisa";
$namaBelakang = "Auralita";

$hai = function() use($namaDepan,$namaBelakang)
{
    echo "Hai $namaDepan $namaBelakang".PHP_EOL;
};

$hai();