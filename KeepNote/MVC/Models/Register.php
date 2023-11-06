<?php

require_once 'autoload.php';
require_once "Database.php";

class Register {
    
    public static function create($username, $password)
    {
        $pdo = Database::getPdo();
        $sql = "INSERT INTO register (username, password) VALUES (:username, :password)";

        $stm = $pdo->prepare($sql);
        $stm->execute(
            [
                "username"=>$username,
                "password"=>$password,
            ]
        );
    }

    public static function check_user($username, $password)
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM register WHERE username=:username AND password=:password";

        $stm = $pdo->prepare($sql);
        $stm->execute(
            [
                "username"=>$username,
                "password"=>$password,
            ]
        );
        $user = $stm->fetch();
        
        return $user; 
    } 
}