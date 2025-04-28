<?php
include './modeles/User.php';

class UserControlleur{

    public function register()
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $user= new user(
                            $_POST['nom'],
                            $_POST['prenom'],
                            $_POST['email'],
                            $_POST['telephone'],
                            $_POST['genre'],
                            password_hash($_POST['password'], PASSWORD_DEFAULT)
            );
        }
    }
}


?>