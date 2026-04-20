
<?php
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base $dbname";
} catch (PDOException $e) {
   
    file_put_contents('erreurs.log', $e->getMessage(), FILE_APPEND);
    echo "Une erreur est survenue. Contactez l'administrateur.";

}

