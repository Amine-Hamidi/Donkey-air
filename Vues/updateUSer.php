
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier la date</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<?php
    include __DIR__."/header.php";
    ?>
    <h2>Modifier votre compte</h2>
    <label for="nom">Nom: </label>
    <input type="text" value="<?php echo htmlspecialchars($nom) ?>"> <br>
    <label for="prenom">Prenom: </label>
    <input type="text" value="<?php echo htmlspecialchars($prenom) ?>"><br>
    <label for="email">E-mail: </label>
    <input type="text" value="<?php echo htmlspecialchars($email) ?>"><br>
    <label for="telephone">Telephone: </label>
    <input type="text" value="<?php echo htmlspecialchars($telephone) ?>"><br>
    <label for="genre">genre: </label>
    <input type="text" value="<?php if($genre==0){
                                echo "Homme";
                            }else {
                                echo "Femme";
                            }  ?>">

    <form method="post">
        <button type="submit" name="enregistrer">Enregistrer</button>
    </form>
</body>
</html>
