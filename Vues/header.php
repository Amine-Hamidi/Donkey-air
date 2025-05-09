<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="top-header">
    <div class="header-left">
        <p>
            <?= isset($_SESSION['user']) 
                ? htmlspecialchars('Mr ' . $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']) 
                : 'Invité' ?>
        </p>
    </div>

    <nav class="header-nav">
        <a href="monCompte.php">Mon compte</a>
        <a href="mesReservations.php">Mes réservations</a>
        <a href="search.php">Trouver un vol</a>
    </nav>

    <form method="post" action="logout.php" class="logout-form">
        <button type="submit">Déconnexion</button>
    </form>
</header>

<div class="banner">
    <h1>DONKEY AIR</h1>
</div>
