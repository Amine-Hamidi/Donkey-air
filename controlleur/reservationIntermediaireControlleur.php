<?php
    include './modeles/reservationInterModel.php';
    

    class ReservationIntermediaireControlleur{
        public function validateReservationInter(){
                
                
                session_start();
                //var_dump($_SESSION['options_choisies']);

                $reservationModelObject=new ReservationsIntModel();
                $options=$reservationModelObject->getOptionById($_SESSION['options_choisies']);

                $totalOptions = 0;
                foreach ($options as $opt) {
                $totalOptions += $opt['prix'];
                }
                
                $ville_depart = $_SESSION['ville_depart'];
                $ville_arrivee = $_SESSION['ville_arrivee'];
                $trajet = $reservationModelObject->read($ville_depart, $ville_arrivee);
                $prixTrajet = $trajet['prix'];
                $prixTotal = $prixTrajet + $totalOptions;
                require './Vues/pageIntermediaire.php';
                if(isset($_POST['retour'])){
                    header('Location: http://localhost:8000/reservation.php ');
                    exit();
                }else  if(isset($_POST['Valider'])){
                    header('Location: http://localhost:8000/reservation.php ');
                    exit();
                }
            
               
        }
    }
   $reservationObject=new ReservationIntermediaireControlleur();
   $reservationObject->validateReservationInter();

?>