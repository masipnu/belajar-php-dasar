<?php
// Variable-length argument list
function jumlah(...$angka){
    $total = 0;
    foreach($angka as $a){
        $total += $a;
    }
    echo "Total " . implode(" + ",$angka) . " = $total" . PHP_EOL;
}

jumlah(3,4,5,6);