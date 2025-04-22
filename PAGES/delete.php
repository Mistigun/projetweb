<?php

if(isset($_POST['id']) && !empty($_POST['id'])){

    $x = $_POST['id'];
    $reqsql = "DELETE FROM abonnee WHERE id=$x";

    include '../STRUCT/connect.php';
    $auth->query($reqsql);
}

header('Location:aboutus.php');