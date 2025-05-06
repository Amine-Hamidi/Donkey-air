<?php
require './modeles/Vol.php';

    class VolControlleur{

        public function affiche(){
            
                $vol= new Vol();
                $vols=$vol->read();
                
                require './Vues/vol.php';
                //echo "Méthode register() appelée<br>";
                //return $vols;
            
        }
    }

    $volControlleur=new VolControlleur();
    $volControlleur->affiche();