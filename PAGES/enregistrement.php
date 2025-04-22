<?php
if (
isset($_POST['email']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['ville']) && isset($_POST['adresse']) && isset($_POST['zip']) && !empty($_POST['email']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['ville']) && !empty($_POST['adresse']) && !empty($_POST['zip'])){
   
    include '../STRUCT/connect.php';

$email = htmlspecialchars($_POST['email']);
$lastname = htmlspecialchars($_POST['lastname']);
$firstname = htmlspecialchars($_POST['firstname']);
$ville = htmlspecialchars($_POST['ville']);
$adresse = htmlspecialchars($_POST['adresse']);
$zip = htmlspecialchars($_POST['zip']);

$req ="INSERT INTO abonnee (email, lastname, firstname, ville, adresse, zip) VALUES ('$email', '$lastname', '$firstname','$ville', '$adresse', '$zip')";


if($auth->query($req)){
    header('Location:aboutus.php');
}else {
    header('Location:aboutus.php');
}

} else {
header('Location:aboutus.php');
}