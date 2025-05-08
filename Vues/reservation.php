
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    

</head>
<body>
<?php
    include __DIR__.'/header.php';
?>
<div style="width: 40%;">
    <div style="border: 2px solid #cce; border-radius: 15px; padding: 20px;margin-top:20px;">
      <h2><?= htmlspecialchars($resultat['ville_depart'] ) ?> – <?= htmlspecialchars($resultat['ville_arrivee'] ?? '') ?></h2>
      <p style="font-size: 24px; font-weight: bold; color: #2a5aa2;">
        <?= htmlspecialchars($resultat['prix'] ) ?> €
      </p>
      <p><strong>Départ :</strong> <span style="color: #7ab0ff;">
        <?= htmlspecialchars($_SESSION['date_depart'] ) ?>
      </span></p>
      
</div>
<div>
    <h2>Info client</h2> 
    <p>Prénom: <?php echo $prenom ?></p>
    <p>Nom: <?php echo $nom ?></p>
    <p>Téléphone: <?php echo $telephone ?> </p> <br>
</div>
<div>
    <p style="font-size: 24px; font-weight: bold; color: #2a5aa2;">
        <?= htmlspecialchars($resultat['prix'] ) ?> €
      </p><br>
</div>
<form action="" method="POST">
<div>

    <?php foreach($result as $option): ?>
    <ul>
        <li><input type="checkbox" name="option[]" value="<?= htmlspecialchars($option['id']) ?>" /><?php echo $option['nom'] ?>: <?php echo $option['prix'] ?> €</li>
    </ul>
    <?php endforeach; ?>
</div>

<button type="submit" >Réservation</button>
</form>


</body>
</html>