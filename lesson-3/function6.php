<?php
// Type declaration
function tambah(int $a, int $b){
    echo "$a + $b = " . $a+$b . PHP_EOL;
}

tambah(3,4);
tambah("5","5");
tambah(true,false);
tambah([],[]);