<?php
// Simple Expression
$a = 5;
$b = 7;

// Complex Expression
function getValue(){
    return 100;
}
$value = getValue();

// Statement
$nama = "Joko Santoso";
echo $nama;
$tgl = new DateTime();

// Block
function runApp($name){
    echo "Starting Program..." . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "Closing Program..." . PHP_EOL;
}

runApp("Joko");