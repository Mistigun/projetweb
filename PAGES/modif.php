<?php

$id = $_POST['id'];

include '../STRUCT/connect.php';
$sql = "SELECT * FROM abonnee WHERE id=$id";
$reponse = $auth->query($sql);

foreach($reponse AS $r) {  ?>
    <form action="update.php" method="post">

    <input type="text" name="email" value="<?=$r['email'] ?>"maxlength="200" id="email">

    <input type="text" name="firstname" value="<?=$r['firstname'] ?>"maxlength="200" id="firstname">

    <input type="text" name="lastname" value="<?=$r['lastname'] ?>"maxlength="200" id="lastname">

    <input type="text" name="ville" value="<?=$r['ville'] ?>"maxlength="200" id="ville">

    <input type="text" name="adresse" value="<?=$r['adresse'] ?>"maxlength="200" id="adresse">

    <input type="text" name="zip" value="<?=$r['zip'] ?>"maxlength="5" id="zip">

    <input type="hidden" name="id" value="<?=$r['id'] ?>">

    <input type="submit"  value="Enregistrer mes coordonéees">
</form>
<?php }