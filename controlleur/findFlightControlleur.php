<?php
include __DIR__.'/../modeles/findFlightModel.php';
class findFlight{
    public function search(){
        $ville_depart=$_GET['ville_depart'];
        $ville_arrivee=$_GET['ville_arrivee'];
        $date_depart=$_GET['date_depart'];
        $date_retour=$_GET['date_retour'];

        $flightObject=new Flight();
        $flightObject->searchFlight($ville_depart, $ville_arrivee, $date_depart, $date_retour);

        
        require '../Vues/searchFlight.php';
    }
}

$findFlightObject=new findFlight();
$findFlightObject->search();
?>