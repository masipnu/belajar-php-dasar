<?php

// Tanpa Null Coalescing
// $data=[];
// if(isset($data['action'])){
//     $action = $data['action'];
// }else{
//     $action = 'nothing';
// }
// echo $action;

// Dengan Null Coalescing
$data=[];
$action = $data['action'] ?? 'nothing';
echo $action;