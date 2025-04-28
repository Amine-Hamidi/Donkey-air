<?php 
require_once(__DIR__ . '/Base.php');
require_once(__DIR__ . '/Crud.php');
Class User extends Base{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $genre;
    private $mdp;

    public function  __construct($nom,$prenom,$email,$telephone,$genre,$mdp,$id=null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->genre = $genre;
        $this->mdp = $mdp;
    }

}


?>