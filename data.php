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

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Violation Log</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  	<style>
	  	.btn-default {
	  		color: white;
			background-color: transparent;
			border-color: white;
	  		font-family: Montserrat, sans-serif;
	  		font-size: 14px;
	  	}

	  	.btn-default:hover {
	  		color: black;
			background-color: white;
			border-color: white;
			font-family: Montserrat, sans-serif;
	  		font-size: 14px;
	  	}
	</style> 	
</head>

<div class="jumbotron text-center">
	<center><table border = "1">
		<tr> 
			<th> File Name </th>
			<th> Description </th>
			<th> Gender </th>
		</tr>
			
		<?php foreach ($arr as $row) { ?>
			<tr> 
				<td> <?php echo $row["moviename"] ?> </td>
				<td> <?php echo $row["yourname"] ?> </td>		
				<td> <?php echo $row["Gender"] ?> </td>
			</tr>
		<?php } ?>

	</table></center><br><br>
	<a href="search.php" class="btn btn-default" role="button">Home</a>
</div>
</html>