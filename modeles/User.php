<?php 
include_once(__DIR__ . '/Base.php');
Class User extends Base{
    

    public function __construct(){
        parent::__construct();
    }

    public function save($nom,$prenom,$genre,$email,$telephone,$password){
        $stmt=$this->pdo->prepare("INSERT INTO users (nom,prenom,email,telephone,genre,password) VALUES (:nom, :prenom, :email, :telephone, :genre, :password)");
        $resulat=$stmt->execute([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'telephone'=>$telephone,
            'genre'=>$genre,
            'password'=>$password
    ]);
    
        return $resulat;

    }
    
    public function findByEmail($email){
        $stmt=$this->pdo->prepare("SELECT * from users where email= :email LIMIT 1");
        $stmt->execute(['email'=>$email]);

        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function findById($id){
        $stmt=$this->pdo->prepare("SELECT * from users where id= :id");
        $stmt->execute(['id'=>$id]);

        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id){
        $stmt=$this->pdo->prepare("DELETE FROM users where id= :id");
        return $stmt->execute(['id'=>$id]);

        
    }
    
    public function update($id, $nom, $prenom, $genre, $email, $telephone, $password){

        $stmt=$this->pdo->prepare("UPDATE users SET nom= :nom, prenom= :prenom, genre= :genre, email= :email, telephone= :telephone, password= :password 
                                    where id=:id");
        
        return $stmt->execute(['id'=>$id,
                            'nom'=>$nom,
                            'prenom'=>$prenom,
                            'genre'=>$genre,
                            'email'=>$email,
                            'telephone'=>$telephone,
                            'password'=>$password]);
    } 
}


?>