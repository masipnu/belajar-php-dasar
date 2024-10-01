<?php
// Konversi integer ke string
$angka1 = 100;
$angka2 = (string)$angka1;
var_dump($angka2);
var_dump((string)500);

// Konversi string ke integer
$angka3 = (int)"50";
var_dump($angka3);
var_dump((int)"45");

// Konversi string ke float
$float = (float)"2.5";
var_dump($float);