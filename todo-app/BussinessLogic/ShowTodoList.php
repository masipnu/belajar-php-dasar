<?php
/**
 * Menampilkan Todo List
 */
function showTodoList(){
    global $todoList;

    echo "Todo List\n";

    foreach($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}