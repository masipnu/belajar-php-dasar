<?php
/**
 * Test file : ViewRemoveToodlist.php
 */
require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinessLogic/RemoveTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar PHP");

showTodoList();
viewRemoveTodoList();
showTodoList();