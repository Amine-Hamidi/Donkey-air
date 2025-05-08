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
<h2>Résumé de votre réservation</h2>

<p><strong>Prix du billet :</strong> <?= htmlspecialchars($prixTrajet) ?> €</p>

<h3>Options choisies :</h3>
<ul>

<?php foreach ($options as $option): ?>
    <li><?= htmlspecialchars($option['nom']) ?> – <?= htmlspecialchars($option['prix']) ?> €</li>
<?php endforeach; ?>
</ul>

<p><strong>Total des options :</strong> <?= htmlspecialchars($totalOptions) ?> €</p>

<p style="font-size: 20px; font-weight: bold; color: green;">
    Prix total à payer : <?= htmlspecialchars($prixTotal) ?> €
</p>
<form action="" method="POST">
<button name="retour">Retour</button>
<button name="Valider">Valider</button>
</form>

    
</body>
</html>