<?php
// Function return
function getPeringkat(int $nilai){
    if($nilai>=80){
        return "A";
    }elseif($nilai>=70){
        return "B";
    }elseif($nilai>=60){
        return "C";
    }else{
        return "D";
    }
}

echo getPeringkat(85);