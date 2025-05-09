<?php
include './modeles/User.php';

class MonCompte{
    public function read(){
        session_start();
        $nom= $_SESSION['user']['nom'];
        $prenom= $_SESSION['user']['prenom'];
        $telephone= $_SESSION['user']['telephone'];
        $email= $_SESSION['user']['email'];
        $genre= $_SESSION['user']['genre'];
        $id= $_SESSION['user']['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])){ 
            
            header('location : http://localhost:8000/updateUSer.php');
            exit();

        }else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['changer_mdp'])){
            
        }
        else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['supprimer_mdp'])){

        }else {
            include './Vues/monCompte.php'; 
        }
        
    }

}




?>