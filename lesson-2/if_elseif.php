<?php
$nilai = 70;
$absen = 90;

if($nilai >= 80 && $absen >= 80){
    echo "Nilai anda A";
} elseif($nilai >=70 && $absen>=70){
    echo "Nilai anda B";
} elseif($nilai >=60 && $absen>=60){
    echo "Nilai anda C";
} elseif($nilai>=50 && $absen>=50){
    echo "Nilai anda D";
} else {
    echo "Nilai anda E";
}
echo PHP_EOL;

$jk = "L";
if($jk=="L"):
    echo "Halo Om..";
    elseif($jk=="P"):
        echo "Halo Tante";
    else:
        echo "Maaf tidak diketahui";
endif;