<?php

require_once 'Models/Notes.php';

class Home
{

    public function __construct(){}

    

    public function savenote(){

        if ( isset($_POST['sendNote'])) {
            
            $titre = $_POST['titre'];
            $contenu = $_POST['contenu'];
    
            $note = new Notes();
            $note->create($titre, $contenu);

            include 'Views/notes.php';
        }
    }

    public function listnote(){
        
        $note = new Notes();
        $res = $note->readAll();
        return $res;
    }

    public function deletenote($id){
        
        $note = new Notes();
        $res = $note->delete($id);
        
        
        include 'Views/notes.php';
        
        
    }

    public function updatenote(){
        include 'Views/modif.php';
    }

}