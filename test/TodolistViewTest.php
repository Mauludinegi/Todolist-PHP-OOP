<?php

require_once __DIR__.("/../entity/Todolist.php");
require_once __DIR__.("/../repository/TodolistRepository.php");
require_once __DIR__.("/../service/TodolistService.php");
require_once __DIR__.("/../view/TodolistView.php");
require_once __DIR__.("/../helper/InputHelper.php");

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist():void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}
function testViewAddTodolist():void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}

function testViewRemoveTodolist():void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
}
testViewRemoveTodolist();