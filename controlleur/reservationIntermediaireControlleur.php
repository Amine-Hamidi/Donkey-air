<?php
    include './modeles/reservationInterModel.php';
    

    class ReservationIntermediaireControlleur{
        public function validateReservationInter(){
                
                
                session_start();
                

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
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if(isset($_POST['retour'])){
                        header('Location: http://localhost:8000/reservation.php ');
                        exit();
                    }else  if(isset($_POST['Valider'])){
                        $id = $_SESSION['user']['id'];
                        $vol_id = $trajet['id'];
                        $date_depart = $_SESSION['date_depart'];
                        $reservation_id=$reservationModelObject->createReservation($id, $vol_id, $date_depart, $prixTotal);
                        foreach($_SESSION['options_choisies'] as $option_id):
                            $reservationModelObject->createOptionReservation($reservation_id,$option_id);
                        endforeach;
                        header('Location: http://localhost:8000/mesReservations.php ');
                        exit();
                    }
                }else{
                     require './Vues/pageIntermediaire.php';
                    }
        }
    }
   $reservationObject=new ReservationIntermediaireControlleur();
   $reservationObject->validateReservationInter();

?>