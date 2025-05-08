<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Donkey Air</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<?php
    include __DIR__.'/header.php';
?>

<h2>Mes réservations:</h2>

<table>
  
  <thead>
    <tr>
      <th scope="col">Ville de départ</th>
      <th scope="col">Ville d'arrivée</th>
      <th scope="col">prix</th>
      <th scope="col">Départ</th>
      
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($vols as $vol): ?>
    <tr>
      
      <td><?php echo $vol['ville_depart'] ?></td>
      <td><?php echo $vol['ville_arrivee'] ?></td>
      <td><?php echo $vol['prix'] ?></td>
      <td><?php echo  $_SESSION['date_depart']  ?></td>
      
      <form method="POSt">
        <td><button type="submit" name="reserver">Réserver</button></td>
      </form>
    </tr>
    <?php endforeach; ?>
   
    
  </tfoot>
</table>
