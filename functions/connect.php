<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli ("127.0.0.1", "root", "", "chpt.base");
		$mysqli->query("SET NAMES 'utf8'");
	}
	
	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}
?>