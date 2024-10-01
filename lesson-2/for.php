<?php
// // Perulangan dengan Post Statement
// for($counter=1;$counter<=5;$counter++){
//     echo "Perulangan ke : $counter \n";
// }
// Perulangan dengan Init Statement
// for($counter=1; $counter<=10;){
//     echo "Perulangan ke : $counter \n";
//     $counter++;
// }

// Perulangan dengan kondisi
// $counter = 1;
// for(;$counter<=10;){
//     echo "Hello : $counter \n";
//     $counter++;
// }

// Perulangan tanpa henti
// for(;;){
//     echo "Hallo".PHP_EOL;
// }

// for($i=1;;$i++){
//     echo "$i\n";
// }

// for($counter=1;$counter<=10;$counter++){
//     echo "$counter + 1 = ". $counter+1 . "\n";
// }

// Alternative Syntax
for($counter=1;$counter<=10;$counter++):
    echo "$counter + 1 = ". $counter+1 . "\n";
endfor;