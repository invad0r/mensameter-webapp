<?php
$b=$_POST["punkt"];
echo $b;
mysql_connect(localhost,root);
mysql_select_db(danieltinney) or die ( "Unable to select database");
$bewert=mysql_query('UPDATE essen SET bewertung=bewertung +$b WHERE name' );
?>