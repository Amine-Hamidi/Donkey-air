<?php
    include './modeles/Reservations.php';

    class ReservationControlleur{
        public function validateReservation(){
                
                session_start();
                $ville_depart = $_SESSION['ville_depart'] ;
                $ville_arrivee = $_SESSION['ville_arrivee'];
                $date_depart = $_SESSION['date_depart'];
                
                $reservation= new reservationsModel();
                $resultat=$reservation->read($ville_depart, $ville_arrivee);
                $result=$reservation->Option();

                //$prix++;
                $nom = $_SESSION['user']['nom'];
                $prenom = $_SESSION['user']['prenom'];
                $telephone = $_SESSION['user']['telephone'];
                
                // if(isset($_POST['option'])){
                //     var_dump($_POST);
                    
                //     header('Location: http://localhost:8000/reservationIntermediaire.php');
                //     exit();

                // }
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['option'])) {
                    
                    $_SESSION['options_choisies'] = $_POST['option']; 
                
                    header('Location: http://localhost:8000/reservationIntermediaire.php');
                    exit();
                }
            
                require "./Vues/reservation.php";
        
    }
    }
    $reservationObject=new ReservationControlleur();
    $reservationObject->validateReservation();

?>