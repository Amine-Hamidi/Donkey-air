<?php
include './modeles/User.php';
class UpdateUser{
    public function modifierUtilisateur(){ 
        session_start(); 
        
        $nom= $_SESSION['user']['nom'];
        $prenom= $_SESSION['user']['prenom'];
        $telephone= $_SESSION['user']['telephone'];
        $email= $_SESSION['user']['email'];
        $genre= $_SESSION['user']['genre'];
        $id= $_SESSION['user']['id'];
        $user= new User();
        $user->findById($id);

     
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enregistrer'])){
            
            $user->update($nom, $prenom,$genre, $email, $telephone,$id);
            header('Location: http://localhost:8000/monCompte.php');
            exit();
        } else {
            include './Vues/updateUSer.php';
        }
       
    }
    

}
$updateUserObject=new UpdateUser();
$updateUserObject->modifierUtilisateur();

?>