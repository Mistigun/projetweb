<?php

include '../STRUCT/connect.php';

$email = htmlspecialchars($_POST['email']);
$lastname = htmlspecialchars($_POST['lastname']);
$firstname = htmlspecialchars($_POST['firstname']);
$ville = htmlspecialchars($_POST['ville']);
$adresse = htmlspecialchars($_POST['adresse']);
$zip = htmlspecialchars($_POST['zip']);
$id = $_POST['id'];

$reqsql = "UPDATE abonnee SET email = '$email', lastname ='$lastname', firstname ='$firstname', ville ='$ville', adresse ='$adresse', zip ='$zip' WHERE id=$id";

if($auth->query($reqsql)){
    header('Location:aboutus.php');
}