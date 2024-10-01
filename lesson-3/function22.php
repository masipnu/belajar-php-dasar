<?php
// String Function
$nama = ['Dita ','Leni ','Ravia'];
var_dump(join($nama));

$buah = "apel jeruk nanas";
var_dump(explode(" ",$buah));

$status = 'member';
var_dump(strtoupper($status));

$quotes = 'HIDUP ADALAH PERJUANGAN';
var_dump(strtolower($quotes));

$teks = 'lorem ipsum dolor sit amet';
var_dump(substr($teks,0,5));

$random = ' hemat pangkal kaya';
var_dump(trim($random));