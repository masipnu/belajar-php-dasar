<?php

// echo date("N");

$h = date("N");
// $h = "6";
// $h = 9;
switch($h){
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    case 4:
        echo "Kamis";
        break;
    case 5:
        echo "Jum'at";
        break;
    case 6:
        echo "Sabtu";
        break;
    case 7:
        echo "Ahad";
        break;
    default:
    echo "Hari tidak diketahui!";
}

echo PHP_EOL;

// Syntax Alternative
$status = "tamu";
switch ($status):
    case "tamu":
        echo "Silahkan masuk";
        break;
    default:
        echo "Maaf, anda tidak boleh masuk";
endswitch;