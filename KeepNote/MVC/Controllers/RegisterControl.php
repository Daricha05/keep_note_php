<?php

include 'autoload.php';
    
class RegisterControl {

    public function Register()
    {
        include 'Views/register.php';
    }
    public function Login()
    {
        include 'Views/login.php';
    }
    
    public function new_compte()
    {
        if (isset($_POST['send'])) {
            
            $username = htmlspecialchars(trim($_POST['username']));
            $password = sha1($_POST['password']);

            if ((!empty($username)) && (!empty($password))) {

                $result = Register::create($username, $password);
                include 'Views/home.php';

            }else {

                echo ('Veuillez remplir les champs !');
            }
        }
    }

    public function identifie(){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        
        $result = Register::check_user($username, $password);
        if ($result) {
            session_start();
            $_SESSION['username'] = $username;
            var_dump($result);
            header("Location: http://localhost/KeepNote/MVC/ArchiveControl/home");
        }else {
            echo "Erreur d'identifiaction";
            include 'Views/login.php';
        }
    }

    public function Logout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: http://localhost/KeepNote/MVC/RegisterControl/Login");
    }


}