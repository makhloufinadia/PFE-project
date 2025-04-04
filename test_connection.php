<?php
require 'classes/Model.php';

try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    echo "Connexion à la base de données réussie!";
    
    // Test supplémentaire
    $stmt = $db->query("SHOW TABLES FROM shareboard");
    echo "<br>Tables disponibles: " . $stmt->rowCount();
} catch(PDOException $e) {
    die("ERREUR: " . $e->getMessage());
}