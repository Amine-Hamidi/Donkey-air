<?php
include __DIR__.'/../modeles/findFlightModel.php';
class findFlight{
    public function search(){
        
        session_start();
        $flightObject=new Flight();
        $departVille = $flightObject->searchDeparture();
        $retourVille = $flightObject->searchReturn();
        $user= $_SESSION['user'];
        if ($_SERVER['REQUEST_METHOD']==='POST'){
            $ville_depart=$_POST['ville_depart'] ;
            $ville_arrivee=$_POST['ville_arrivee'] ;

            $_SESSION['ville_arrivee']=$_POST['ville_arrivee'];
            $_SESSION['ville_depart']= $_POST['ville_depart'] ;
            $_SESSION['date_depart']=$_POST['date_depart'];
            $result=$flightObject->searchFlight($ville_depart, $ville_arrivee);
            
            header('Location: http://localhost:8000/vol.php');
            exit();
           
        }
        require __DIR__.'/../Vues/searchFlight.php';
    }

}

$findFlightObject=new findFlight();

$findFlightObject->search();
?>