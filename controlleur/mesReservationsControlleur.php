<?php
include './modeles/mesReservationsModel.php';

class MesReservationsControlleur{
    public function afficherReservations(){
        session_start();
        $user_id=$_SESSION['user']['id'];
        $getReservations=new newReservationModel();
        $reservations=$getReservations->getReservationsByUser($user_id);
       

        require './Vues/mesReservations.php';
    }
    
}
$mesReservationObject=new MesReservationsControlleur();
$mesReservationObject->afficherReservations();
?>