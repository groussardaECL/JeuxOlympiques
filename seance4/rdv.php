<?php require "connexion.php"; ?>
<html>
 <head>
  <title>Mes rendez-vous</title><link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body><h1>Mes rendez-vous</h1>
 <table><tr><th>Rendez-vous</th><th>date et heure</th><th>durée</th></tr>
 <?php
  $r = mysql_query("SELECT * FROM rdv");
  while ( $a = mysql_fetch_array($r) )
     {
    echo '<tr>';
    echo '<td>';
    echo '<a class="delete" href="delete.php?id='.$a['id'].'"'.
         ' onclick="return confirm(\'Voulez-vous vraiment supprimer ce rendez-vous ?\')")>X</a>&nbsp;';
    echo '<a href="detail.php?id='.$a['id'].'">'.$a['description'].'</a>';
    echo '</td>';
    echo '<td>'.$a['debut'].'</td>';
    echo '<td>'.$a['duree'].'</td>';
    echo '</tr>';
  }
?>
</table>
<h2>Nouveau rendez-vous</h2>
<form method="POST" action="new.php">
        <span>Description</span>
        <input type="text" name="description" value="mon_rdv"><br />
        <span>Date</span>
        <input type="text" name="debut" value="2009-10-19 14:10:01"><br />
        <span>Durée en minutes</span>
        <input type="text" name="duree" value="120"><br />
        <input type="submit" name="submit" value="Envoyer">
    </form>
 </body>
</html>
