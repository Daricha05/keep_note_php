<?php

include 'autoload.php';

class ArchiveControl
{

    public function home()
    {   
        $result = Archive::readAll();
        include 'Views/home.php';
    }

    public function Openlist()
    { 
        $result = Archive::readAll();
        include 'Views/archive.php';
    }

    public function List_Notes()
    {
        $result = Archive::readAllNotes();
        include 'Views/listNote.php';
    }

    public function OpenAdd()
    {
        include 'Views/addNotes.php';
    }

    public function create()
    {
        if (isset($_POST['send'])) {

            $titre = htmlspecialchars(trim($_POST['titre']));
            $contenu = htmlspecialchars(trim($_POST['contenu']));
            $username = $_POST['username'];
            
            session_start();
            $_SESSION['username'] = $username;

            if ((!empty($titre)) || (!empty($contenu))) {
                Archive::createNote($titre, $contenu, $username);
                header("Location: http://localhost/KeepNote/MVC/ArchiveControl/home");
            } else {

                echo ('Veuillez remplir les champs !');
            }
        }
    }

    public function delete($id)
    {

        $result = Archive::deleteNote($id);
        header("Location: http://localhost/KeepNote/MVC/ArchiveControl/List_Notes");
    }

    public function Select($id)
    {

        $result = Archive::selectNote($id);

        foreach ($result as $value) {
            $id = $value['id'];
            $titre = $value['titre'];
            $contenu = $value['contenu'];
        }
        include 'Views/modif.php';
    }

    public function Update($id)
    {
        if (isset($_POST['send'])) {

            $titre = htmlspecialchars(trim($_POST['titre']));
            $contenu = htmlspecialchars(trim($_POST['contenu']));

            // var_dump($_POST);
            $result = Archive::update($titre, $contenu, $id);
            header("Location: http://localhost/KeepNote/MVC/ArchiveControl/List_Notes");
        }
    }

    public function search()
    {

        $find = htmlspecialchars(trim($_POST['search']));
        $result = Archive::searchArchive($find);
        include 'Views/listNote.php';
    }
}