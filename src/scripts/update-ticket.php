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

$updateRequest = $connectDataBase->prepare("INSERT INTO post (categorie, groupe, equipe1, equipe2, date_heure, lieu, prix, description) VALUES ( :categorie, :groupe, :equipe1, :equipe2, :date_heure, :lieu, :prix, :description)");
$updateRequest->bindParam(':categorie', $categorie);
$updateRequest->bindParam(':groupe', $groupe);
$updateRequest->bindParam(':equipe1', $equipe1);
$updateRequest->bindParam(':equipe2', $equipe2);
$updateRequest->bindParam(':date_heure', $date_heure);
$updateRequest->bindParam(':lieu', $lieu);
$updateRequest->bindParam(':prix', $prix);
$updateRequest->bindParam(':description', $description);

    header('Location: ../ticket.php');
