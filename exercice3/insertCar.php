<?php
// Connexion à la BDD
try {
  $instance = new PDO("mysql:host=localhost;dbname=car", "root", "");
} catch (Exception $e) {
  die($e->getMessage());
}

  if(isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['annee']) && isset($_POST['couleur'])){

    $query = $instance->prepare("INSERT INTO carlist (marque, modele, annee, couleur)
    VALUES (:marque, :modele, :annee, :couleur)");

    $insertSuccess = $query->execute(array(
      "marque" => $_POST['marque'],
      "modele" => $_POST['modele'],
      "annee" => $_POST['annee'],
      "couleur" => $_POST['couleur']
    ));

  }
