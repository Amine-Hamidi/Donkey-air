
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
    <h2>Modifier la date de votre réservation</h2>

    <form method="post">
        <label for="date_voyage">Nouvelle date :</label>
        <input type="date" id="date_voyage" name="date_voyage"
               value="<?= htmlspecialchars($reservation['date_voyage']) ?>" required>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
