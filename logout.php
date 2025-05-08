<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: login.php'); // ou index.php si tu n’as pas encore login.php
exit();
