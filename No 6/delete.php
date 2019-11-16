<?php
	include("config/koneksi.php");

	$sql = "DELETE FROM product WHERE id = ".$_GET['id'];
	mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>.");
	echo "Data Telah Dihapus.";
?>