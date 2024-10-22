<?php
/**
 * Helper : Menangani Input User
 */
function input(string $info):string
{
    echo "$info : ";
    $result = trim(fgets(STDIN));
    return $result;
}