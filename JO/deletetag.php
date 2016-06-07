<?php
    require "connexion.php";

if ( ! isset($_GET['ID']) ) die('No ID');

mysql_query("DELETE FROM tags WHERE ID=".$_GET['ID']);

?>
<html>
<head>
<title>delete</title>
<script type="text/javascript">location.href="Tag.php"</script>
</head>
<body></body>
</html>

