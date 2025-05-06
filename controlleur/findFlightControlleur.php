<?php
include __DIR__.'/../modeles/findFlightModel.php';
class findFlight{
    public function search(){
        

        // $flightObject=new Flight();
        // $flightObject->searchFlight($ville_depart, $ville_arrivee, $date_depart, $date_retour);

        $flightObject=new Flight();
        $departVille = $flightObject->searchDeparture();
        $retourVille = $flightObject->searchReturn();
        
        if ($_SERVER['REQUEST_METHOD']==='POST'){
            $ville_depart=$_POST['ville_depart'] ;
            $ville_arrivee=$_POST['ville_arrivee'] ;
            
            $_SESSION['date_depart']=$_POST['date_depart'];
            $result=$flightObject->searchFlight($ville_depart, $ville_arrivee);
            
            //var_dump( $result);
        }
        require __DIR__.'/../Vues/searchFlight.php';
    }

}

$findFlightObject=new findFlight();

$findFlightObject->search();
?>