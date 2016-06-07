<?php require "connexion.php"; ?>
<html>
 <head>
  <title>Mes tags</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
 </head>
 <body>
 <h1>Tous mes tags</h1>
 <table><tr><th>ID</th><th>Tag</th><th>Supprimer</th></tr>
 <?php
  $r = mysql_query("SELECT * FROM Tags");
  while ( $a = mysql_fetch_array($r) )
     {
      echo '<tr>';
	  echo '<td>'.$a['ID'].'</td>';
      echo '<td>'.$a['Tag'].'</td>';
	  echo '<td>';
      echo '<a class="delete" href="deletetag.php?ID='.$a['ID'].'"'.
           ' onclick="return confirm(\'Voulez-vous vraiment supprimer ce tag ?\')")>Supprimer le tag '.$a['ID'].' </a>';
      echo '</tr>';
}
?>
</table>
<h2>Ajouter des tags</h2>
<form method="POST" action="newtag.php">
        <span>Tag</span>
        <input type="text" name="ATag" value=""><br />
  <input type="submit" name="submit" value="Envoyer">
</form>
<a href="application_jo.php">Retour</a>
 </body>
</html>
