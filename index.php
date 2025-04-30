<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donkey Air - Trouver votre vol</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>DONKEY AIR</h1>
        </header>

        <main>
            <h2>Trouver votre vol</h2>

            <?php
            // Afficher un message si le formulaire et soumis
            if ($_SERVE["REQUEST_METHOD"] == "POST") {
                $depart = htmlspecialchars($_POST['depart']);
                $arrivee = htmlspecialchars($_POST['arrivee']);
                $date_depart = htmlspecialchars($_POST['date_depart']);
                $date_retour = htmlspecialchars($_POST['date_retour']);

                echo '<div class="resultat">';
                echo '<h3>Résultats pour :</h3>';
                echo '<p><strong>Départ :</strong> ' . $depart . '</p>';
                echo '<p><strong>Arrivée :</strong> ' . $arrivee . '</p>';
                echo '<p><strong>Date aller :</strong> ' . date('d/m/y',  strtotime($date_depart)) . '</p>';
                if (!empty($date_retour)) {
                    echo '<p><strong>Date retour :</strong> ' . date('d/m/y', strtotime($date_retour)) . '</p>';
                }
                echo '</div>';
            }
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="from-group">
                    <label for="départ">Vile de départ</label>
                    <input type="text" id="départ" name="depart" required>
                </div>
                <div class="from-group">
                    <label for="départ">Vile d'arrivée</label>
                    <input type="text" id="arrivee" name="arrivee" required>
                </div>
                <div class="from-group">
                    <label for="départ">Date de départ</label>
                    <input type="text" id="date_départ" name="date_depart" required>
                </div>
                <div class="from-group">
                    <label for="départ">Date de retour</label>
                    <input type="text" id="date_retour" name="date_retour" required>
                </div>
                <button type="submit" class="btn">Rechercher</button>
            </form>
        </main>
    </div>
</body>

</html>