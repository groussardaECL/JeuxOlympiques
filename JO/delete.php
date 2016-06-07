<?php
    require "connexion.php";

if ( ! isset($_GET['ID']) ) die('No ID');

mysql_query("DELETE FROM Jeux_Olympiques WHERE ID=".$_GET['ID']);

?>
<html>
<head>
<title>delete</title>
<script type="text/javascript">location.href="application_jo.php"</script>
</head>
<body></body>
</html>

