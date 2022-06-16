<?php

namespace App\Controllers;

use App\Services\ModulesService;

class ModulesController {
    function index() {
        return view('dashboard');
    }

    function add() {
        $modulesService = new ModulesService();

        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $description = filter_input(INPUT_POST, 'description');

        $modulesService->createModule($code, $name, $description);

        header('Location:' . root() . '/dashboard/modules');
    }

    function enroll() {
        $modulesService = new ModulesService();

        $moduleId = (int)filter_input(INPUT_POST, 'moduleId');
        $userId = (int)filter_input(INPUT_POST, 'userId');

        $modulesService->enrollUser($moduleId, $userId);

        header('Location:' . root() . '/dashboard/modules');
    }
}
