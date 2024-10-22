<?php
/**
 * View : Menambah Todo List
 */
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo List" . PHP_EOL;
    $todo = input("Todo (x untuk batal)");

    if($todo == "x"){
        echo "Batal menambah todo";
    }else{
        addTodoList($todo);
    }
}