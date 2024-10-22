<?php
/**
 * Main App
 */

 require_once __DIR__ . "/BussinessLogic/ShowTodoList.php";
 require_once __DIR__ . "/BussinessLogic/AddTodoList.php";
 require_once __DIR__ . "/BussinessLogic/RemoveTodoList.php";
 require_once __DIR__ . "/View/ViewShowTodoList.php";
 require_once __DIR__ . "/View/ViewAddTodoList.php";
 require_once __DIR__ . "/View/ViewRemoveTodoList.php";
 require_once __DIR__ . "/Model/TodoList.php";
 require_once __DIR__ . "/Helper/Input.php";

 viewShowTodoList();