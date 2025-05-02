<?php
require_once './controlleur/UserControlleur.php';

$action = $_GET['action'] ?? 'register'; 

$controller = new UserControlleur();

if ($action === 'register') {
    $controller->register();
} else {
    echo "Page inconnue.";
}
