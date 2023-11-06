<?php

class Database
{
    public static $pdo;

    public static function getpdo(): PDO
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=keepnote", "root", "");
        } catch (PDOException $e) {

            die("Erreur de connexion : " . $e->getMessage());
        }

        return self::$pdo;
    }
}