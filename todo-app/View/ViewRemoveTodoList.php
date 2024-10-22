<?php
/**
 * View : Menghapus Todo list
 */
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";
 
function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batal)");

    if($pilihan =="x"){
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if($success){
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}