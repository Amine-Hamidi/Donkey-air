<?php

include __DIR__.'/Base.php';
Class User extends Base{
    public function authentification($email, $password){
        $query=$this->pdo->prepare('SELECT * from users where email= :email AND password= :password');
        $query->bindParam(':email',$email);
        $query->bindParam(':password', $password);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

}


?>