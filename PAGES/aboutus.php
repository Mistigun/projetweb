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
  <form action="enregistrement.php" method="POST">
      <input type="email" name="email" placeholder="Email" maxlength="200" id="email">

      <input type="text" name="lastname" placeholder="Nom" maxlength="200" id="lastname">

      <input type="text" name="firstname" placeholder="Prénom" maxlength="200" id="firstname">

      <input type="text" name="ville" placeholder="Ville" maxlength="200" id="ville">

      

      <input type="text" name="adresse" placeholder="Adresse" maxlength="400" id="adresse">

      <input type="text" name="zip" placeholder="Code Postal" minlegth="5" maxlength="5" id="zip">
      <input type="submit" value="Envoyer">
  </form>
</section>


<section class="formulaire">
<table>

<caption> Liste des inscrits </caption>
    <thead>
        <tr>
            <th>Email</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../STRUCT/connect.php';
            $req = "SELECT * FROM abonnee";
            $reponse = $auth->query($req);
            foreach ($reponse AS $r):
        ?>
        <tr>
            <td><?= $r ['email'] ?></td>
            <td><?= $r ['lastname'] ?></td>
            <td><?= $r ['firstname'] ?></td>
            <td><?= $r ['ville'] ?></td>
            <td><?= $r ['adresse'] ?></td>
            <td><?= $r ['zip'] ?></td>
            
            <td>
            <form action="modif.php" method="post">
                <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                <input type="image" src="../IMAGE/modifier.png" alt="modif">   
            </form> 
            </td>
            <td>
                
            <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                    <input type="image" src="../IMAGE/close.png" alt="suppr">
                </form>
            </td> 
            </tr>

        <?php
            endforeach;
        ?>  

        </tbody>
        </table> 
    </section>

<?php
include '../struct/bot.php';
?>
