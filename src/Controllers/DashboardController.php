<?php

namespace App\Controllers;

use App\Services\ModulesService;
use App\Services\TasksService;
use App\Services\AuthService;

class DashboardController {
    function index() {
        return view('dashboard');
    }

    function modules() {
        $authService = new AuthService();
        $students = $authService->getStudents();
        $modulesService = new ModulesService();
        $modules = $modulesService->getModules();
        $enrolledModules = $modulesService->getEnrolledModules($_SESSION['id']);
        return view('modules', ['students' => $students, 'modules' => $modules, 'enrolledModules' => $enrolledModules]);
    }

    function tasks() {
        $modulesService = new ModulesService();
        $modules = $modulesService->getModules();
        $tasksService = new TasksService();
        $tasks = $tasksService->getMyTasks((int)$_SESSION['id']);
        $submittedTasks = $tasksService->getSubmittedTasks((int)$_SESSION['id']);
        return view('tasks', ['modules' => $modules, 'tasks' => $tasks, 'submittedTasks' => $submittedTasks]);
    }
}
