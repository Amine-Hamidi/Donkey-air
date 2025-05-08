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
        $stmt=$this->pdo->prepare('SELECT ville_depart, ville_arrivee, prix from vol where ville_depart= :ville_depart and ville_arrivee= :ville_arrivee ' );
        $stmt->execute([
                        'ville_depart' => $ville_depart,
                        'ville_arrivee' => $ville_arrivee,
                        
                        ]);
                        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>