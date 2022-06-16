<?php


namespace App\Database;

class Connection {
    public static function mysqli() {
        $mysqli = new \mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
        if ($mysqli->connect_errno) {
            echo "Error al conectar a MySQL: " . $mysqli->connect_error;
        }
        return $mysqli;
    }
}
