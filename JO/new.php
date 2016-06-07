<?php
require "connexion.php";

if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) die ('Illegal call');

    mysql_query("INSERT INTO jeux_olympiques SET ".
                "Annee='".mysql_real_escape_string($_POST['Annee'])."',".
                "Ville='".mysql_real_escape_string($_POST['Ville'])."',".
                "Pays='".mysql_real_escape_string($_POST['Pays'])."',".
                "Nature='".mysql_real_escape_string($_POST['Nature'])."',".
                "Ouverture='".mysql_real_escape_string($_POST['Ouverture'])."',".
                "Cloture='".mysql_real_escape_string($_POST['Cloture'])."',".
                "Budget='".mysql_real_escape_string($_POST['Budget'])."',".
                "NbNations='".mysql_real_escape_string($_POST['NbNations'])."',".
                "NbEpreuves='".mysql_real_escape_string($_POST['NbEpreuves'])."',".
                "NbSportifs='".mysql_real_escape_string($_POST['NbSportifs'])."',".
                "NbSportives='".mysql_real_escape_string($_POST['NbSportives'])."',".
                "Evenement_particulier='".mysql_real_escape_string($_POST['Comm'])."';") or die(mysql_error());

?>
<html>
<head>
<title>new</title>
<script type="text/javascript">location.href="application_jo.php"</script>
</head>
<body></body>
</html>
