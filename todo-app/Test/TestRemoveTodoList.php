<?php
/**
 * Test file : BussinessLogic/RemoveTodoList.php
 */
require_once "../Model/TodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/RemoveTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");

showTodoList();

removeTodoList(1);

showTodoList();