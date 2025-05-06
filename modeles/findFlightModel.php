<?php

include __DIR__.'/Base.php';

class Flight extends Base{

    public function searchFlight($ville_depart, $ville_arrivee, $date_depart, $date_retour){
        $query=$this->pdo->prepare('SELECT ville_depart, ville_arrivee, date_depart,date_retour from vol 
                                    where ville_depart= :ville_depart AND ville_arrivee= :ville_arrivee and date_depart= :date_depart and 
                                    date_retour= :date_retour');
        $query->execute(['ville_depart'=>$ville_depart,
                        'ville_arrivee'=>$ville_arrivee,
                        'date_depart'=>$date_depart,
                        'date_retour'=>$date_retour]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    
    public function searchDeparture(){
        $query=$this->pdo->prepare('SELECT ville_depart From vol ');
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function searchReturn(){
        $query=$this->pdo->prepare('SELECT ville_arrivee From vol ');
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    
}
?>