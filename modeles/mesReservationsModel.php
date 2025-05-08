<?php
include_once __DIR__.'/Base.php';


class newReservationModel extends Base{
    public function getReservationsByUser($user_id) {
        $sql='SELECT reservation.id, reservation.date_voyage, reservation.total, vol.ville_depart, vol.ville_arrivee
              from reservation 
              Join vol 
              ON reservation.vol_id=vol.id
              where reservation.utilisateur_id= :user_id';
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute(['user_id'=>$user_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteReservation($id) {
        
        $stmt = $this->pdo->prepare('DELETE FROM reservation_option WHERE reservation_id = :id');
        $stmt->execute(['id' => $id]);
    
        $stmt = $this->pdo->prepare('DELETE FROM reservation WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
    
}
?>