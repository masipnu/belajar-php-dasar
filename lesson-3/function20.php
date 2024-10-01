<?php
// Factorial Recursive
function faktorial(int $angka): int
{
    if($angka==1){
        return 1;
    }else{
        return $angka * faktorial($angka-1);
    }
}

var_dump(faktorial(6));