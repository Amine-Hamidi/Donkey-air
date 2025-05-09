<?php
include './modeles/mesReservationsModel.php'; 

session_start();

if (isset($_GET['id'])) {
    $reservation_id = $_GET['id'];
    
    $model = new newReservationModel();
    $model->deleteReservation($reservation_id);
}


header('Location: ../mesReservations.php');
exit();