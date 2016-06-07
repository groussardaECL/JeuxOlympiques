<?php
require "connexion.php";

if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) die ('Illegal call');

mysql_query("INSERT INTO rdv SET ".
      "description='".mysql_escape_string($_POST['description'])."',".
      "debut='".mysql_escape_string($_POST['debut'])."',".
      "duree='".mysql_escape_string($_POST['duree'])."';") or die(mysql_error());

?>
<html>
<head>
<title>new</title>
<script type="text/javascript">location.href="rdv.php"</script>
</head>
<body></body>
</html>
