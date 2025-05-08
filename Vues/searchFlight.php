<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    
</head>
<body>
    <?php
    include __DIR__."/header.php";
    ?>
    <h2>Trouvez votre vol</h2>
    <form action="" method="POST">
       
        <select name="ville_depart" id="ville_depart">
        <option >Ville de départ</option>
        <?php foreach( $departVille as $ville): ?>
            <option><?php echo $ville['ville_depart']?></option>
        <?php endforeach;  ?>
        </select><br>
        
        <select name="ville_arrivee" id="ville_arrivee">
        <option >Ville d'arrivée</option>
        <?php foreach( $retourVille as $ville): ?>
            <option ><?php echo $ville['ville_arrivee']?></option>
        <?php endforeach;  ?>
        </select><br>
         <input type="date" name="date_depart" placeholder="Date de départ" required><br>
        
        <button type="submit">Search</button>
    </form>
    
</body>
</html>