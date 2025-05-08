<?php
include './modeles/mesReservationsModel.php';

class MesReservationsControlleur{
    public function afficherReservations(){
        session_start();
        $user_id=$_SESSION['user']['id'];
        $getReservations=new newReservationModel();
        $reservations=$getReservations->getReservationsByUser($user_id);
        
       if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['annuler'])){
        $reservation_id = $_POST['annuler'];
        $model = new newReservationModel();
        $model->deleteReservation($reservation_id);
        header('Location: http://localhost:8000/mesReservations.php');
       }else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])){
        $reservation_id = $_POST['modifier'];
        $model = new newReservationModel();
        $model->updateReservationDate($reservation_id, $_POST['date_voyage']);
        $_SESSION['reservation_a_modifier'] = $reservation_id;
        header('Location: http://localhost:8000/updateDate.php');
       }else {
        require './Vues/mesReservations.php';
       }

        
    }
    
}
$mesReservationObject=new MesReservationsControlleur();
$mesReservationObject->afficherReservations();
?>