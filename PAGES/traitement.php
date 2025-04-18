<?php

if(isset($_POST['lastname']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])){
    
$nom = htmlspecialchars($_POST['lastname']);
$prenom = htmlspecialchars($_POST['firstname']);
$adresse = htmlspecialchars($_POST['a']);
$cp = htmlspecialchars($_POST['b']);
$ville = htmlspecialchars($_POST['c']);

$auth = new PDO ('mysql:server=localhost;dbname=DBPHPB1CS1', 'root', '');
$sql = "INSERT INTO clients (nom, prenom, adresse, code_postal, ville) VALUES ('$nom', '$prenom','$adresse','$cp','$ville')";

if($auth->query($sql)){
    header('Location:ok.php');
} else {
    header('Location:pasok.php');
}

}else {
    header('Location:eval1.php');
} 
