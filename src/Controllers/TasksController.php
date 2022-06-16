<?php

namespace App\Controllers;

use App\Services\TasksService;

class TasksController {
    function index() {
        return view('dashboard');
    }

    function submit() {
        $tasksService = new TasksService();

        $taskId = (int)filter_input(INPUT_POST, 'taskId');
        $content = filter_input(INPUT_POST, 'content');

        $tasksService->submitTask($taskId, (int)$_SESSION['id'], $content);

        header('Location:' . root() . '/dashboard/tasks');
    }

    function add() {
        $tasksService = new TasksService();

        $moduleId = (int)filter_input(INPUT_POST, 'moduleId');
        $name = filter_input(INPUT_POST, 'name');
        $description = filter_input(INPUT_POST, 'description');

        $tasksService->createTask($moduleId, $name, $description);

        header('Location:' . root() . '/dashboard/tasks');
    }
}
