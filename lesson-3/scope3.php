<?php
// global scope
$nama = "Joko";

function halo(){
    global $nama;
    echo "Halo $nama\n";
}

halo();