<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes réservations</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions a {
            margin: 0 5px;
            text-decoration: none;
            color: #2a5aa2;
        }
    </style>
</head>
<body>
        <?php 
        include __DIR__.'/header.php'
        ?>
    <h1 style="text-align: center;">Mes réservations</h1>

    <table>
        <thead>
            <tr>
                <th>Ville départ</th>
                <th>Ville arrivée</th>
                <th>Date de voyage</th>
                <th>Total (€)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($reservations as $reservation): ?>
            <tr>
                <td><?= htmlspecialchars($reservation['ville_depart']) ?></td>
                <td><?= htmlspecialchars($reservation['ville_arrivee']) ?></td>
                <td><?= htmlspecialchars($reservation['date_voyage']) ?></td>
                <td><?= htmlspecialchars($reservation['total']) ?> €</td>
                <td class="actions">
                <form method="post">
                    <button type="submit" name="modifier" value="<?= $reservation['id'] ?>">Modifier</button> -
                    <button type="submit" name="annuler" value="<?= $reservation['id'] ?>" onclick="return confirm('Confirmer l’annulation ?')">Annuler</button>
                </form>
            </td>
                
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

</body>
</html>
