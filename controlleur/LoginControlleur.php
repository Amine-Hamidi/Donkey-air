<?php
include __DIR__.'/../modeles/authentification.php';
class LoginControlleur{
    private $userObject;
    public function __construct()
    {
        $this->userObject= new User() ;
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $user= $this->userObject->authentification($email, $password);
            if($user){
                session_start();
                $_SESSION['user']=$user;
                //var_dump($_SESSION['user']);
                header('Location: http://localhost:8000/search.php');
            }else {
                echo "Erreur d'authentification";
            }
                
               
            
           
        }
        require __DIR__.'/../Vues/user/login.php';
        
    }
   
}

$loginObject= new LoginControlleur();
$loginObject->login();
?>