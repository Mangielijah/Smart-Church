<?php
 define("DB_HOST", "localhost");
 define("DB_USER", "root");
 define("DB_PASS", "");
 define("DB_NAME", "church");
 
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ("Could not connect to server");
//$db = mysql_select_db(DB_NAME, $link) or die ("Could not find database");
?>
