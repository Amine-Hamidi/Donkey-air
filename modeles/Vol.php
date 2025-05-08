<?php

include_once(__DIR__ . '/Base.php');

class Vol extends Base{

    public function save($id, $ville_depart, $ville_arrivee, $date_depart, $date_retour, $prix){
        $stmt=$this->pdo->prepare('INSERT INTO vol (ville_depart, ville_arrivee, date_depart, date_retour, prix) VALUES 
                                                    (:ville_depart, :ville_arrivee, :date_depart, :date_retour, :prix) ');
        
        return $stmt->execute(['ville_depart'=>$ville_depart,
                                'ville_arrivee'=>$ville_arrivee,
                                'date_depart'=>$date_depart,
                                'date_retour'=>$date_retour,
                                'prix'=>$prix]);
    }

    public function read($ville_depart, $ville_arrivee){
        $stmt=$this->pdo->prepare('SELECT ville_depart, ville_arrivee, prix from vol where ville_depart= :ville_depart and ville_arrivee= :ville_arrivee ' );
        $stmt->execute([
            'ville_depart' => $ville_depart,
            'ville_arrivee' => $ville_arrivee
        ]);
        
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }


}


?>