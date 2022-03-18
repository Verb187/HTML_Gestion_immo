<?php
// On commence par récupérer les champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['adresse']))      $adresse=$_POST['adresse'];
else      $adresse="";

if(isset($_POST['messages']))      $messages=$_POST['messages'];
else      $messages="";

if(isset($_POST['signalement']))      $signalement=$_POST['signalement'];
else      $signalement="";

if(isset($_POST['formFile']))      $formFile=$_POST['formFile'];
else      $formFile="";

// On vérifie si les champs sont vides
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($messages) OR empty($adresse))
    {
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else     
    {
       // connexion à la base
       $link=mysqli_connect("localhost","root","", "gestion.immo");
// sélection de la base  
    
    // on écrit la requête sql
    $sql = "INSERT INTO `immo.signalement` (`nom`, `prenom`, `adresse`, `email`, `message`, `signalement`, `fichier`) VALUES ('$nom', '$prenom', '$adresse', '$email', '$messages', '$signalement', '$formFile');";
    
    // on insère les informations du formulaire dans la table
    mysqli_query($link, $sql);

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';

    mysqli_close($link);  // on ferme la connexion
    } 
?>