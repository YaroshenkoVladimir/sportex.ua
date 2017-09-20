<?php
	require_once "connect.php";
	
	function getNews ($limit, $id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE `id` = ".$id;
	$result = $mysqli-> query("SELECT * FROM `news`$where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}
	
	function getGalery ($limit, $id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE `id` = ".$id;
	$result = $mysqli-> query("SELECT * FROM `galery`$where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}
	
	function getFoto ($limit, $id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE `id` = ".$id;
	$result = $mysqli-> query("SELECT * FROM `foto`$where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}
	
	
	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>