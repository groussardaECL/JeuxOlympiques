<?php require "connexion.php"; ?>
<html>
 <head>
  <title>Les Jeux Olympiques</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
 </head>
 <body>
 <h1>Tous les JO</h1>
 <table><tr><th>Année</th><th>Ville</th><th>Pays</th><th>Ete/Hiver</th><th>Date Ouverture</th><th>Date Cloture</th><th>Budget</th><th>Nombre Nations</th><th>Nombre Epreuves</th><th>Nombre Sportifs</th><th>Nombre Sportives</th><th>Evenements Particuliers</th></tr>
 <?php
  $r = mysql_query("SELECT * FROM Jeux_Olympiques");
  while ( $a = mysql_fetch_array($r) )
     {
      echo '<tr>';
      echo '<td>';
      echo '<a class="delete" href="delete.php?ID='.$a['ID'].'"'.
           ' onclick="return confirm(\'Voulez-vous vraiment supprimer ces Jeux Olympiques ?\')")>X</a>&nbsp;';
      echo '<a href="detail.php?ID='.$a['ID'].'">'.$a['Annee'].'</a>';
      echo '</td>';
      echo '<td>'.$a['Ville'].'</td>';
      echo '<td>'.$a['Pays'].'</td>';
      echo '<td>'.$a['Nature'].'</td>';
      echo '<td>'.$a['Ouverture'].'</td>';
      echo '<td>'.$a['Cloture'].'</td>';
      echo '<td>'.$a['Budget'].'</td>';
      echo '<td>'.$a['NbNations'].'</td>';
      echo '<td>'.$a['NbEpreuves'].'</td>';
      echo '<td>'.$a['NbSportifs'].'</td>';
      echo '<td>'.$a['NbSportives'].'</td>';
      echo '<td>'.$a['Evenement_particulier'].'</td>';
      echo '</tr>';
}
?>
</table>
<h2>Ajouter des JO</h2>
<form method="POST" action="new.php">
        <span>Année</span>
        <input type="text" name="Annee" value="1980"><br />
        <span>Ville</span>
        <input type="text" name="Ville" value="Ecully"><br />
        <span>Pays</span>
        <input type="text" name="Pays" value="France"><br />
        <span>Ete ou Hiver</span>
        <input type="text" name="Nature" value="Ete"><br />
        <span>Ouverture</span>
        <input type="date" name="Ouverture" value="2012-12-24"></br>
        <span>Cloture</span>
        <input type="date" name="Cloture" value="2012-12-31"><br />
        <span>Budget</span>
        <input type="text" name="Budget" value="123"> 
        En millions de dollars<br />
        <span>Nombre de Nations</span>
        <input type="text" name="NbNations" value="204"><br />
        <span>Nombre Epreuves</span>
        <input type="text" name="NbEpreuves" value="302"><br />
        <span>Nombre de Sportifs</span>
        <input type="text" name="NbSportifs" value="2000"><br />
        <span>Nombre de Sportives</span>
        <input type="text" name="NbSportives" value="0"><br />
        <span>Commentaires</span>
        <input type="text" name="Comm" value="Evenements Particuliers"><br />
  <input type="submit" name="submit" value="Envoyer">
</form>
<a href="tag.php">Aller aux tags</a>
 </body>
</html>
