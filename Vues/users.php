<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Donkey Air</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>


<h2>Inscription</h2>
<form method="post" action="">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="telephone" placeholder="Téléphone" required><br>
    <select name="genre" required>
        <option value="0">Homme</option>
        <option value="1">Femme</option>
    </select><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit">S'inscrire</button>
</form>

