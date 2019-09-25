<?php
$user = "phpmyadmin";
$password = "Pandore11,";

$bdd = new PDO('mysql:host=localhost;dbname=livre_or';charset=utf8', '$user', '$password');

try{    // Try, il fait un essayé voir si il y arrive

    $bdd = new PDO('mysql:host=localhost;dbname=livre_or';'charset=utf8', '$user', '$password');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){    /Catch, si le try rate, il t'envoie le message d'erreur
    echo " J'ai une erreur la : "  . $e->getMessage();

?>






