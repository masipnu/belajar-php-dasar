<?php
// Anonymous Function
function siyu(string $nama,$format){
    $namaAkhir = $format($nama);
    echo "See You $namaAkhir".PHP_EOL;
}

siyu("Putri Amelia", function(string $n){
    return strtoupper($n);
});