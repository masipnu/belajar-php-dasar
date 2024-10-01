<?php
// Array Functions
$data = [1,2,3,4,5,6,7,8,9];

// Mengubah data array dengan callback
var_dump(array_map(fn($data) => $data*2, $data));

// Membalik urutan array
rsort($data);
var_dump($data);

// Mendapatkan key array
var_dump(array_keys($data));

// Mendapatkan value array
var_dump(array_values($data));