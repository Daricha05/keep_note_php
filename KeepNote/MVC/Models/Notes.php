<?php

require_once "Database.php";

class Notes
{

    public function create($titre, $contenu)
    {
        $pdo = Database::getPdo();
        $sql = 'INSERT INTO `notes`(`titre`, `contenu`) VALUES (?, ?)';
        
        $res = $pdo->prepare($sql);
        $res->execute([$titre, $contenu]);
        echo 'Model success';
    }

    public function insert_archive($titre, $contenu)
    {
        $pdo = Database::getPdo();
        $sql = 'INSERT INTO `archive`(`titre`, `contenu`) VALUES (?, ?)';
        $res = $pdo->prepare($sql);
        $res->execute([$titre, $contenu]);
    }

    public function readAll()
    {
        $pdo = Database::getPdo();
        $sql = 'SELECT * FROM `notes` ORDER BY id DESC';
        $res = $pdo->query($sql);
        $list = $res->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function read($edit = null)
    {
        $pdo = Database::getPdo();
        $sql = 'SELECT * FROM `notes` WHERE id = ?';
        $res = $pdo->prepare($sql);
        $res->execute([$edit]);
        $majs = $res->fetchAll(PDO::FETCH_ASSOC);
        return $majs;
    }

    public function delete($id)
    {
        $pdo = Database::getPdo();
        $sql = 'DELETE FROM `notes` WHERE id = ?';
        $res = $pdo->prepare($sql);
        $list = $res->execute([$id]);
    }

    public function update($titre, $contenu, $id)
    {
        $pdo = Database::getPdo();
        $sql = 'UPDATE `notes` SET `titre`= ?,`contenu`= ? WHERE `id`= ?';
        $res = $pdo->prepare($sql);
        $res->execute([$titre, $contenu, $id]);
    }
}