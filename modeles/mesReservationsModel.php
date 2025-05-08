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
    public function updateReservationDate($id, $new_date) {
        $sql = 'UPDATE reservation SET date_voyage = :date_voyage WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'date_voyage' => $new_date,
            'id' => $id
        ]);
        
    }
    public function getReservationById($id){
        
        $sql='SELECT reservation.id, reservation.date_voyage FROM reservation where reservation.id= :id ';
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>