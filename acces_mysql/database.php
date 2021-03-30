<?php

$db_user = "stagiaire";
$db_password = "";
$db_host = "serveur.siovision.fr";
$db_database = "bateaux02";

try {
    $db = new PDO("mysql:host=$db_host;database=$db_database", $db_user, $db_password);
} catch (Exception $exception) {
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
}
