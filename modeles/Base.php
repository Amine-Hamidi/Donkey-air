<?php
include_once(__DIR__ . '/../config/db.php');
 abstract class Base{
    protected $pdo;
    public function __construct()
    {
        try{
            $this->pdo=new PDO("mysql:host".HOST.";dbname=".DBNAME.";charser=utf8",USER,PASS);
            
        }catch(PDOException $e){
            echo "Erreur de connexion: ".$e->getMessage();
        }
    }
}





?>