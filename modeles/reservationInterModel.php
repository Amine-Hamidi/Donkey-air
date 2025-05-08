<?php
include_once __DIR__.'/Base.php';


class ReservationsIntModel extends Base{
    public function getOptionById(array $id){
        if (empty($id) ) return[];

        $idRecuperer=implode(',',array_fill(0, count($id), '?'));

        $sql="SELECT * from options where id IN ($idRecuperer)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute($id);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function read($ville_depart, $ville_arrivee){
        $stmt=$this->pdo->prepare('SELECT id,ville_depart, ville_arrivee, prix from vol where ville_depart= :ville_depart and ville_arrivee= :ville_arrivee ' );
        $stmt->execute([
                        'ville_depart' => $ville_depart,
                        'ville_arrivee' => $ville_arrivee,
                        
                        ]);
                        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function createReservation($utilisateur_id, $vol_id, $date_voyage, $total) {
       
        $sql = 'INSERT INTO reservation (date_voyage, utilisateur_id, vol_id, total)
                VALUES (:date_voyage, :utilisateur_id, :vol_id, :total)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'date_voyage' => $date_voyage,
            'utilisateur_id' => $utilisateur_id,
            'vol_id' => $vol_id,
            'total' => $total
        ]);
        return $this->pdo->lastInsertId();
    }
    
    public function createOptionReservation($id_reservation,$id_option){
        $sql='INSERT INTO reservation_option (option_id, reservation_id) VALUES(:option_id, :reservation_id) ';
        $stmt=$this->pdo->prepare($sql);
        
        return $stmt->execute(['option_id'=>$id_option,
                                'reservation_id'=>$id_reservation]);
        
    }
}
?>