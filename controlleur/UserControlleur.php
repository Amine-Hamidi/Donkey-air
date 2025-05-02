    <?php
    include './modeles/User.php';

    class UserControlleur{

        public function register()
        {
            echo "Méthode register() appelée<br>";
            if($_SERVER['REQUEST_METHOD']==='POST'){
                $user= new user();

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $genre = $_POST['genre'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $user->save($nom, $prenom, $genre, $email, $telephone, $password);
                echo "dans if";
                header('Location: index.php?action=login');
                //echo "Méthode register() appelée<br>";
                exit();
            }
            require './Vues/user/register.php';
        }
        
    }


    ?>