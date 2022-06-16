<?php

namespace App\Controllers;

use App\Services\AuthService;
use App\Utils\Session;

class LoginController {
    private static $sess = null;

    public function __construct() {
        self::$sess = new Session();
    }

    function index() {
        return view('login');
    }

    function login() {
        $authService = new AuthService();

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $authService->handleLogin($email, $password);

        header('Location:' . root() . '/dashboard');
    }

    function logout() {
        self::$sess->deleteSession();
        header('Location:' . root() . '/');
    }
}
