<?php
include '../struct/top.php';
?>

<body class="page-avec-bg">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= RACINE ?>CSS/aymene.css">
<link rel="stylesheet" href="<?= RACINE ?>CSS/mobile.css">
</head>


<section class="formulaire">
<h1>Restez à l'affut de nos nouveaux projets !</h1>
  <form action="traitement.php" method="post">
      <input type="email" name="email" placeholder="email" maxlength="200" id="email">
      <input type="text" name="name" placeholder="nom" maxlength="200" id="name">
      <input type="text" name="ville" placeholder="ville" maxlength="200" id="ville">
      <input type="text" name="firstname" placeholder="prénom" maxlength="200" id="firstname">
      <input type="text" name="adresse" placeholder="adresse" maxlength="400" id="adresse">
      <input type="text" name="zip" placeholder="Code Postal" maxlength="5" id="zip">
      <input type="submit" value="Envoyer">
  </form>
</section>



    <h2>Liste des inscrits</h2>
    <table summary="">
    <caption>Liste</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include '../inc/connexion.php';

        $demande = "SELECT * FROM clients";
        $reponse = $auth->query($demande);
        foreach($reponse AS $r):
        ?>
            <tr>
                <td><?= $r['nom'] ?></td>
                <td><?= $r['prenom'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


<?php
include '../struct/bot.php';
?>
