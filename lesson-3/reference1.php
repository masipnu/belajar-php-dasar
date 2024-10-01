<?php
// Assign by Reference
$name = "masipnu";
$username = &$name;

// masipnu
echo $username . PHP_EOL;

$username = "masjoko";

// jadi masjoko
echo $name;