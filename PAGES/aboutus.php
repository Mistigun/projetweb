<?php
include '../struct/top.php';
?>

<body class="page-avec-bg">
<head>
<link rel="stylesheet" href="<?= RACINE ?>CSS/aymene.css">
</head>


<section class="formulaire">
<h1>Restez à l'affut de nos nouveaux projets !</h1>
  <form action="traitement.php" method="post">
      <input type="email" name="email" placeholder="email" maxlength="200" id="email">
      <input type="text" name="name" placeholder="nom" maxlength="200" id="name">
      <input type="text" name="ville" placeholder="ville" maxlength="200" id="ville">
      <input type="text" name="firstname" placeholder="prénom" maxlength="200" id="firstname">
      <input type="text" name="adresse" placeholder="adresse" maxlength="400" id="adresse">
      <input type="text" name="zip" placeholder="Code Postal" minlegth="5" maxlength="5" id="zip">
      <input type="submit" value="Envoyer">
  </form>
</section>

<?php
include '../struct/bot.php';
?>
