<?php
session_start();
session_unset(); // Libérer toutes les variables de session
session_destroy(); // Détruire la session
header("Location: connexion.php"); // Rediriger vers la page de connexion
exit();
?>
