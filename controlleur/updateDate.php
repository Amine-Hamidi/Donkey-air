<?php
include './modeles/mesReservationsModel.php';

class UpdateDate{
    public function newDate(){
        session_start();
        

        $id = $_SESSION['reservation_a_modifier'];
        $newReservationObject= new newReservationModel();
        $reservation=$newReservationObject->getReservationById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['date_voyage'])) {
            $newDate = $_POST['date_voyage'];
            $newReservationObject->updateReservationDate($id, $newDate);

            header('Location: http://localhost:8000/mesReservations.php');
            exit();
        }
       require './Vues/updateDate.php';
    }
}
$updateDateObject=new UpdateDate();
$updateDateObject->newDate();
?>