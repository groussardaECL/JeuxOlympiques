<?php
require "connexion.php";

if ( ! isset($_GET['id']) ) die('No ID');

mysql_query("DELETE FROM rdv WHERE id=".$_GET['id']);

?>
<html>
<head>
<title>delete</title>
<script type="text/javascript">location.href="rdv.php"</script>
</head>
<body></body>
</html>

