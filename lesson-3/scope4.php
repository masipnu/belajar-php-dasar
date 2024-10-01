<?php
// $GLOBALS variable
$nama = "Eko";
$role = "Member";

function welcome(){
    echo "Selamat Datang {$GLOBALS['nama']}" . PHP_EOL;
    echo "Anda login sebagai {$GLOBALS['role']}";
}

welcome();