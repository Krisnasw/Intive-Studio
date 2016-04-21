<?php
	
	$db = new mysqli('localhost', 'root', '' , 'intive');

	if ($db->connect_error) {
		die('Koneksi Ke Database Gagal JANCOK'.$db->connect_error);
	}
?>
