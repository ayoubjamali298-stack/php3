<?php 
require 'connexion.php';

$stmt = $pdo->prepare( "UPDATE nano SET nom = :nom WHERE id = :id  ");
$stmt->execute([
    'nom' => "brahim",
    'id' => 1 ,
    
 ]);

 echo "okk";
 
?>