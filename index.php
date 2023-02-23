<?php
require_once __DIR__.("/entity/Todolist.php");
require_once __DIR__.("/repository/TodolistRepository.php");
require_once __DIR__.("/helper/InputHelper.php");
require_once __DIR__.("/service/TodolistService.php");
require_once __DIR__.("/view/TodolistView.php");

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi Todolist" . PHP_EOL;
$todolistRepository = new TodolistRepositoryImpl;
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();