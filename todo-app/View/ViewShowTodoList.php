<?php
/**
 * View : Menampilkan Todo List
 */
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodolist.php";

function viewShowTodoList()
{
    while(true){
        showTodoList();
 
        echo "Menu" . PHP_EOL;
        echo "1. Tambah" . PHP_EOL;
        echo "2. Hapus" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
       
        $pilihan = input("Pilih");
       
        if($pilihan=="1"){
           viewAddTodoList();
        }elseif($pilihan=="2"){
           viewRemoveTodoList();
        }elseif($pilihan=="x"){
           break;
        }else{
           echo "Maaf, pilihan tidak dimengerti!" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa" . PHP_EOL;
}