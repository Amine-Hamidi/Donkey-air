<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include __DIR__."/Vues/header.php";
    ?>
    <h2>Trouvez votre vol</h2>
    <form action="" method="POST">
        <input type="text" name="ville_depart" placeholder="Ville de départ" list="liste_villes_depart" required><br>
        <datalist id="liste_villes_depart">
            <option value="Paris">
            <option value="Lyon">
            <option value="Marseille">
            <option value="Toulouse">
            <option value="Nice">
        </datalist>
        <select>
            <option>Paris</option>
            <option>Lyon</option>
        </select>
        <input type="text" name="ville_arrivee" placeholder="Ville d'arrivée" list="liste_villes_arrivee" required><br>
        <datalist id="liste_villes_arrivee">
            <option value="Londres">
            <option value="New York">
            <option value="Tokyo">
            <option value="Istanbul">
            <option value="Dubai">
        </datalist>
        <input type="date" name="date_depart" placeholder="Date de départ" required><br>
        <input type="date" name="date_retour" placeholder="Date de retour" ><br>
        <button type="submit">Search</button>
    </form>
    
</body>
</html>