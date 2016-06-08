<?php
	$text = $_GET['rfid'];
	$date = date("l\, j F Y H:i:s");
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "imkaproject";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO log_pelanggaran (id, tanggal)
	VALUES ('" . $text . "','" . $date ."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE bank SET saldo=saldo-50000 WHERE id=(SELECT id_bank FROM log_pelanggaran_bank WHERE id_rfid='" . $text . "')";
		
	mysqli_query($conn, $sql);
	mysqli_close($conn);
?>
