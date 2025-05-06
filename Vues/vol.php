<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Donkey Air</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>


<h2>Mes réservations:</h2>

<table>
  
  <thead>
    <tr>
      <th scope="col">Ville de départ</th>
      <th scope="col">Ville d'arrivée</th>
      <th scope="col">Départ/Retour</th>
      
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($vols as $vol): ?>
    <tr>
      
      <td><?php echo $vol['ville_depart'] ?></td>
      <td><?php echo $vol['ville_arrivee'] ?></td>
      <td><?php echo $vol['date_depart'] ?>/<?php echo $vol['date_retour'] ?></td>
      <td><a href="">Modifer</a> - <a href="">Annuler</a></td>
      
      
    </tr>
    <?php endforeach; ?>
    
  </tfoot>
</table>
