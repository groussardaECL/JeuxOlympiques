<?php
mysql_connect('localhost', 'tc4', 'password') or die('Could not connect');
mysql_select_db('tc4') or die('Could not select DB');
mysql_query('SET NAMES utf8');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    mysql_query("INSERT INTO rdv SET ".
      "description='".mysql_real_escape_string($_POST['description'])."',".
      "debut='".mysql_real_escape_string($_POST['debut'])."',".
      "duree='".mysql_real_escape_string($_POST['duree'])."';");
}
?>
<html>
 <head>
  <title>Mes rendez-vous</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
 </head>
 <body><h1>Mes rendez-vous</h1>
 <table><tr><th>Rendez-vous</th><th>date et heure</th><th>durée</th></tr>
 <?php
  $r = mysql_query("SELECT * FROM rdv");
  while ( $a = mysql_fetch_array($r) ) {
  echo '<tr><td>'.$a['description'].'</td><td>'.$a['debut'].'</td><td>'.$a['duree'].'</td></tr>';
}
?>
</table>
<h2>Nouveau rendez-vous</h2>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
