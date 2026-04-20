<?php
$host = 'localhost';
$port = 3307;
$dbname = 'namedb';
$username = 'root';
$password = ''; // default XAMPP root has no password

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>