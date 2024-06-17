<?php
$categorie = $_POST['categorie']; 
$groupe = $_POST['groupe']; 
$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$date_heure = $_POST['date_heure'];
$lieu = $_POST['lieu'];
$prix = $_POST['prix'];
$description = $_POST['description'];


$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");

$createRequest = $connectDataBase->prepare("INSERT INTO post (categorie, groupe, equipe1, equipe2, date_heure, lieu, prix, description) VALUES ( :categorie, :groupe, :equipe1, :equipe2, :date_heure, :lieu, :prix, :description)");
$createRequest->bindParam(':categorie', $categorie);
$createRequest->bindParam(':groupe', $groupe);
$createRequest->bindParam(':equipe1', $equipe1);
$createRequest->bindParam(':equipe2', $equipe2);
$createRequest->bindParam(':date_heure', $date_heure);
$createRequest->bindParam(':lieu', $lieu);
$createRequest->bindParam(':prix', $prix);
$createRequest->bindParam(':description', $description);



$createRequest->execute();

header('Location: ../ticket.php');