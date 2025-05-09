<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php 
            include __DIR__.'/header.php';
    ?>
    <h1 style="text-align: center;">MON COMPTE</h1> <br>
    <p> <b>Prenom: </b><?php echo htmlspecialchars($prenom) ?> </p>
    <p> <b>Nom: </b><?php echo htmlspecialchars($nom) ?> </p>
    <p> <b>E-mail: </b><?php echo htmlspecialchars($email) ?> </p>
    <p> <b>Genre: </b> <?php if($genre==0){
                                echo "Homme";
                            }else {
                                echo "Femme";
                            } ?>
    </p>
    <p><b>Téléphone: </b><?php echo htmlspecialchars($telephone) ?> </p> <br><br>
    
    <a href="/updateUSer.php">Modifier</a>
    -
    
    <form action="" method="post">
        <input type="hidden" name="changer_mdp" value="changer_mdp">
        <button type="submit" name="changer_mdp"> Changer mon mot de passe</button> -
    </form>
    <form action="" method="post">
        <input type="hidden" name="supprimer_mdp" value="supprimer_mdp">
        <button type="submit" name="supprimer_mdp"> Supprimer mon compte</button>
    </form>

</body>
</html>