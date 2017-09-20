<?php
 $connection = @mysql_connect("127.0.0.1", "root", "");
 $db = mysql_select_db ("chpt.base");
 mysql_query(" SET NAMES 'utf8'");
 
 if(!$connection || !$db)
 {
	 exit(mysql_error());
 }
?>