<?php
require "connexion.php";

if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) die ('Illegal call');

    mysql_query("INSERT INTO tags SET ".
                "Tag='".mysql_real_escape_string($_POST['ATag'])."';") or die(mysql_error());

?>
<html>
<head>
<title>new</title>
<script type="text/javascript">location.href="tag.php"</script>
</head>
<body></body>
</html>
