<?php
namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView
    {
        private TodolistService $todolistService;
        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }
        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();
                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapust Todo" . PHP_EOL;
                echo "X. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");
                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    //keluar
                    break;
                } else {
                    echo "pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi" . PHP_EOL;
        }
        function addTodolist(): void
        {
            echo "Menambah Todo" . PHP_EOL;
            $todo = InputHelper::input("todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah Todo" . PHP_EOL;
                //batal
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }
        function removeTodolist(): void
        {
            echo "Menghapus Todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus Todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}