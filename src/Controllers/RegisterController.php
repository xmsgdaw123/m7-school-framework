<?php

namespace App\Controllers;

use App\Services\AuthService;

class RegisterController {
    function index() {
        return view('register');
    }

    function register() {
        $authService = new AuthService();

        $email = filter_input(INPUT_POST, 'email');
        $name = filter_input(INPUT_POST, 'name');
        $surname = filter_input(INPUT_POST, 'surname');
        $isTeacher = filter_input(INPUT_POST, 'isTeacher');
        $password = filter_input(INPUT_POST, 'password');

        $authService->handleRegister($email, $name, $surname, $isTeacher === 'true' ? true : false, $password);

        header('Location:' . root() . '/');
    }
}