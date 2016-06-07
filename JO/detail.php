<?php
require "connexion.php";

($id = $_GET['ID']) || die('No ID');

$r = mysql_query("SELECT * FROM Jeux_Olympiques WHERE ID=$id");
$a = mysql_fetch_array($r);
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Détail des Jeux Olympiques de l'année <?php echo $a['Annee']; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <h1>Jeux Olympiques d'<?php echo $a['Nature'];?> de <?php echo $a['Annee']; ?></h1>
  <dl>
    <dt>Ville</dt>
    <dd><?php echo $a['Ville'] ?></dd>
    <dt>Pays</dt>
    <dd><?php echo $a['Pays'] ?></dd>
    <dt>Nature</dt>
    <dd><?php echo $a['Nature'] ?></dd>
    <dt>Ouverture</dt>
    <dd><?php echo $a['Ouverture'] ?></dd>
    <dt>Cloture</dt>
    <dd><?php echo $a['Cloture'] ?></dd>
    <dt>Budget</dt>
    <dd><?php echo $a['Budget'] ?></dd>
    <dt>NbNations</dt>
    <dd><?php echo $a['NbNations'] ?></dd>
    <dt>Nombre Epreuves</dt>
    <dd><?php echo $a['NbEpreuves'] ?></dd>
    <dt>Nombre Sportifs</dt>
    <dd><?php echo $a['NbSportifs'] ?></dd>
    <dt>Nombre Sportives</dt>
    <dd><?php echo $a['NbSportives'] ?></dd>
    <dt>Evenement</dt>
    <dd><?php echo $a['Evenement_particulier'] ?></dd>
  </dl>
<dl>
<a href="application_jo.php">Retour à l'accueil</a>
</dl>
 </body>
</html>
