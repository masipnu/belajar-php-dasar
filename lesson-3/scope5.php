<?php
// Static Scope

function antrian(){
    static $i = 1;
    echo "Antrian ke $i\n";
    $i++;
}

antrian();
antrian();
antrian();