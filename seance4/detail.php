<?php
require "connexion.php";

($id = $_GET['id']) || die('No ID');

$r = mysql_query("SELECT * FROM rdv WHERE id=$id");
$a = mysql_fetch_array($r);
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $a['description']; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <h1><?php echo $a['description']; ?></h1>
  <dl>
    <dt>Date</dt>
    <dd><?php echo $a['debut'] ?></dd>
    <dt>Durée</dt>
    <dd><?php echo $a['duree'] ?>&nbsp;mn</dd>
  </dl>
 </body>
</html>
