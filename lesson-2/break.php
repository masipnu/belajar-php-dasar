<?php
$counter = 1;
while(true){
    echo "Halo break : $counter\n";
    $counter++;

    if($counter > 7){
        break;
    }
}
