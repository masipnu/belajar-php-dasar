<?php
$a = [
    "nama_depan" => "Joko",
    "nama_belakang" => "Santoso"
];
$b = [
    "nama_belakang" => "Santoso",
    "nama_depan" => "Joko"
];

var_dump($a == $b);
var_dump($a === $b);