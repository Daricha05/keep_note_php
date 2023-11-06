<?php

require_once 'autoload.php';
require_once "Database.php";

class Archive {
    
    public static function createNote($titre, $contenu, $username)
    {
        $pdo = Database::getPdo();
        $sql = "INSERT INTO notes (titre, contenu, username) VALUES (:titre, :contenu, :username)";

        $stm = $pdo->prepare($sql);
        $stm->execute(
            [
                "titre"=>$titre,
                "contenu"=>$contenu,
                "username"=>$username,
            ]
        );
    }

    public static function readAll()
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM notes ORDER BY id DESC limit 3";
        
        $stm = $pdo->query($sql);
        $res = $stm->fetchAll();
        
        return $res; 
    }

    public static function readAllNotes()
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM notes ORDER BY id DESC";
        // $sql = "SELECT * FROM notes ORDER BY id DESC WHERE username = 'test'";
        
        $stm = $pdo->query($sql);
        $res = $stm->fetchAll();
        
        return $res; 
    }
    
    public static function update($titre, $contenu, $id)
    {
        $pdo = Database::getPdo();
        $sql = "UPDATE `notes` SET titre=:titre, contenu=:contenu WHERE id=:id";

        $stm = $pdo->prepare($sql);
        $stm->execute(
            [
                "titre"=>$titre,
                "contenu"=>$contenu,
                "id"=>$id,
            ]
        );
    }

    public static function delete($id)
    {
        $pdo = Database::getPdo();
        $sql = "DELETE FROM archive WHERE id = $id";

        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
    
    public static function deleteNote($id)
    {
        $pdo = Database::getPdo();
        $sql = "DELETE FROM notes WHERE id = $id";

        $stm = $pdo->prepare($sql);
        $stm->execute();
    }

    public static function selectId($id)
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM archive WHERE id = ?";

        $stm = $pdo->prepare($sql);
        $stm->execute([$id]);
        $res = $stm->fetchAll();
        
        return $res; 
    }  

    public static function selectNote($id)
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM notes WHERE id = ?";

        $stm = $pdo->prepare($sql);
        $stm->execute([$id]);
        $res = $stm->fetchAll();
        
        return $res; 
    }   

    public static function searchArchive($params)
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM archive WHERE titre = :params";
        
        $stm = $pdo->prepare($sql);
        $stm->execute(['params'=>$params]);
        $res = $stm->fetchAll();
        
        return $res; 
    }  
    
}