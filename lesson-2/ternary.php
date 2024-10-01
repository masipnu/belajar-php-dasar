<?php

// Bukan ternary
// $gender = "L";
// $sapa = null;
// if ($gender=="L"){
//     $sapa = "Hai bro..!";
// } else {
//     $sapa = "Hai sis..!";
// }
// echo $sapa;

// Dengan Ternary
$gender = "L";
$sapa = $gender == "L" ? "Hai bro...!" : "Hai sis...!";
echo $sapa;