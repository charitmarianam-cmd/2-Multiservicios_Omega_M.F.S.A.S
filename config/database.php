<?php

class Database {
    private static $host = 'localhost';
    private static $db_name = 'multiservicios_omega_db'; // Cambia por el nombre exacto de tu BD
    private static $username = 'root';                // Usuario por defecto en XAMPP
    private static $password = '';                    // Contraseña por defecto (vacía)
    private static $conexion = null;

    public static function conectar() {
        if (self::$conexion === null) {
            try {
                self::$conexion = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$db_name . ";charset=utf8",
                    self::$username,
                    self::$password
                );
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}