<?php
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

$sql = "SELECT log_pelanggaran.id, bank.nama, log_pelanggaran.tanggal FROM log_pelanggaran INNER JOIN log_pelanggaran_bank INNER JOIN bank WHERE log_pelanggaran.id=log_pelanggaran_bank.id_rfid AND log_pelanggaran_bank.id_bank = bank.id";
$result = mysqli_query($conn, $sql);

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
  		*{
  			margin: 0;
  			padding: 0;
  		}

	  	body {
	      	font: 400 15px Lato, sans-serif;
	      	line-height: 1.8;
	      	color: #818181;
	  		background-color: #00071E;
	  	}

	  	.background-wrap{
	  		position: fixed;
	  		z-index: -1000;
	  		width: 100%;
	  		height: 100%;
	  		overflow: hidden;
	  		top : 0;
	  		left: 0;
	  	}

	  	#video-bg-elem{
	  		position: absolute;
	  		top: 0;
	  		left: 0;
	  		min-height: 100%;
	  		min-width: 100%;
	  	}

	  	.content{
	  		position: absolute;
	  		width: 100%;
	  		min-height: 100%;
	  		z-index: 1000;
	  		background-color: rgba(0,0,0,0,7);
	  	}

	  	.content h1 {
	  		font-family: Montserrat, sans-serif;
	  		font-size: 65px;
	  		font-weight: 500;
	  		color: #fff;
	  		padding-top: 10%;
	  		margin-bottom: 10px;
	  		text-shadow: 0 0 25px #fff;
	  	}

	  	.content p{
	  		font-family: Montserrat, sans-serif;
	  		font-size: 20px;
	  		font-weight: 500;
	  		letter-spacing: 3px;
	  		color: #fff;
	  	}

	  	table{
	  		border : 1px white;
	  	}

	  	.content th{
	  		font-family: Montserrat, sans-serif;
	  		font-size: 20px;
	  		font-weight: 500;
	  		letter-spacing: 3px;
	  		color: #fff;
	  		border-color: #fff;
	  		text-align: center;
	  		background-color: #110B2D;
	  		padding: 10px;
	  		text-shadow: 0 0 10px #fff;
	  	}

	  	.content td{
	  		font-family: Montserrat, sans-serif;
	  		font-size: 15px;
	  		letter-spacing: 2px;
	  		color: #fff;
	  		text-align: center;
	  		border-color: #fff;
	  	}

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
	  		box-shadow: 0 0 15px #fff;
	  	}
	</style> 	
</head>

<div class="background-wrap">
    <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
        <source src="tes2.mp4" type="video/mp4">
    </video>
</div>

<center>
<div class="content">
	  	<h1>Violation Log</h1> 
		<center><table border = "1">
			<tr> 
				<th> Violator ID </th>
				<th> Name </th>
				<th> Date </th>
			</tr>
			
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
				<tr> 
					<td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["nama"] ?> </td>
					<td> <?php echo $row["tanggal"] ?> </td>
				</tr>
			<?php } ?>

		</table></center><br>
	<a href="search.php" class="btn btn-default" role="button">Home</a>
</div>
</center>
</html>
