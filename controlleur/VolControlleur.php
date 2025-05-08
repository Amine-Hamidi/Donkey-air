<?php
require './modeles/Vol.php';

    class VolControlleur{

        public function affiche(){
                session_start();
                // $date=$_SESSION['date_depart'];
                // var_dump($date);
              


                $ville_depart = $_SESSION['ville_depart'] ;
                $ville_arrivee = $_SESSION['ville_arrivee'];
                $date_depart = $_SESSION['date_depart'];
               

                $volObject=new Vol();
                $vols=$volObject->read($ville_depart,$ville_arrivee);
                if(isset($_POST['reserver'])){
                    header('Location: http://localhost:8000/reservation.php ');
                    exit();
                }
                
                require './Vues/vol.php';
                
            
        }
    }

    $volControlleur=new VolControlleur();
    $volControlleur->affiche();