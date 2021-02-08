<?php

include "../bootcamp_app/classes/Cars.php";
include "../bootcamp_app/classes/Todo.php";


$cars = new Cars('cars');
//$cars->setData();
$cars->get();

$todo = new Todo('todo-tasks');
//$todo->setData();
$todo->get();
