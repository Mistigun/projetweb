<?php
include "struct/top.php";
?>

<link rel="stylesheet" href="<?= RACINE ?>/CSS/style.css">
<div class="video-banner" id="videobanner">
  <video autoplay muted loop playsinline>
    <source src="<?= RACINE ?>VIDEO/video3.mp4" type="video/mp4">
    
  </video>
  
  <div class="overlay center-overlay">
    <h1>LA EFREITCHOP</h1>
  </div>
  
  
  <div class="overlay bottom-overlay">
    <p>Les voitures de l'EFREI</p>

    </div>
    </div>

<main>
  

<article>
  <img src="<?= RACINE ?>IMAGE/sebchop1.png" alt="article">
  <p>Charles, Aymène et Sébastien se sont d’abord réunis autour d’un constat commun : réinventer l’expérience automobile en plaçant l’utilisateur et l’environnement au cœur du projet. Motivés par l’envie de combiner leurs compétences respectives design, ingénierie et logiciel ils ont esquissé, lors de plusieurs ateliers de design thinking, les grandes lignes d’un véhicule pensé comme un laboratoire de créativité.  
</p><br>
<p>
Le processus a suivi une démarche itérative : interviews d’usagers pour identifier leurs attentes, séances de brainstorming pour générer des idées inattendues, puis réalisation de maquettes en argile et de prototypes virtuels pour tester formes et interfaces. Chaque phase de prototypage donnait lieu à des retours terrain, permettant au trio d’ajuster en continu la direction artistique, les choix de matériaux et la philosophie d’usage.  
</p><br>
<p>
Enfin, conscient de l’importance de l’éco-responsabilité et de l’accessibilité, le trio a mené des workshops avec des experts en développement durable et des ateliers ouverts au public. Ces échanges ont enrichi le projet d’une vision partagée : créer non seulement un moyen de transport, mais un véritable écosystème de mobilité pensée collectivement.</p>
  <a href="PAGES/racing.php" class="btn">En savoir plus</a>

</article>
<article>
  <img src="<?= RACINE ?>IMAGE/porsche.png" alt="article">
  <p>Les voitures sportives et les voitures de course incarnent toutes deux la recherche de la performance, mais elles s’adressent à des usages et à des publics bien différents. La voiture sportive reste avant tout un véhicule de série homologué pour la route : elle conjugue puissance et agrément de conduite tout en offrant un minimum de confort et d’équipements. Son moteur, souvent un V6, V8 ou V12, peut être associé à des turbocompresseurs ou à une motorisation hybride pour délivrer entre 300 et 700 chevaux, modulés par des modes de conduite (Confort, Sport, Track) afin de s’adapter aussi bien aux trajets quotidiens qu’aux escapades plus dynamiques sur circuit amateur.</p><br>
<p>
À l’inverse, la voiture de course est entièrement pensée pour la compétition : châssis monocoque en carbone, suspensions réglables dans tous les axes et aérodynamique très travaillée — ailes avant et arrière, diffuseurs et générateurs de vortex — permettent de maximiser l’appui et la rigidité. Le moteur, calé pour tourner à très haut régime, délivre souvent plus de 700 chevaux en GT3 et peut dépasser les 1 000 chevaux dans les prototypes hybrides LMP1/LMDh. La boîte séquentielle, commandée au volant, assure des passages de rapport ultrarapides, au prix d’un sacrifice total de confort.</p>
  <a href="PAGES/sport.php" class="btn">En savoir plus</a>
</article>





</main>

<?php
include "struct/bot.php";
?>