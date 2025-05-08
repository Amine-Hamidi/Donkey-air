<?php
include_once(__DIR__ . '/../config/db.php');
 abstract class Base{
    protected $pdo;
    public function __construct()
    {
        try{
            $this->pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8",USER,PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        }catch(PDOException $e){
            echo "Erreur de connexion: ".$e->getMessage();
        }
    }
}





?>