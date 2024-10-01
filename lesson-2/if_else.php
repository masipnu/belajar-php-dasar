<?php
$nilai = 70;
$absen = 90;

if($nilai >= 75 && $absen >= 75){
    echo "Selamat.., Anda lulus" . PHP_EOL;
} else{
    echo "Maaf, Anda belum lulus\n";
    echo "Tingkatkan belajar anda..!";
}