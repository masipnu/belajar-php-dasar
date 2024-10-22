<?php
/**
 * Test file : ViewAddTodoList.php
 */
require_once "../View/ViewAddTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");

viewAddTodoList();

showTodoList();