<?php

$user = 'root'; 
$password = '';

try{
    $pdo = new PDO('mysql:host=localhost;dbname=tdl',$user,$password);
}
catch(PDOException $e){
    echo "Erreur :" . $e->getMessage(). "<br>";
    die();
}
?>