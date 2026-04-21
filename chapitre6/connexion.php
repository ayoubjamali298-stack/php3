<?php
 $host = 'localhost';
 $dbname = 'test';
 $username ='username';
 $password ='';

try{

$pdo =new pdo("mysql:localhost=$host;dbname=$dbname", $username ,$password);
   $pdo->setAttribute(pdo::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     echo "connexion  réussie à la base $dbname";
}catch (PDOException $e){

file_put_contents('erreurs.log' , $e->getMessage (),FILE_APPEND);
echo "une erreur est survenue. Contactez l'administrateur.";

}







?>