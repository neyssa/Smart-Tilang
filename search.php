<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart Traffic Light System</title>
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

	  	img{
	  		transform: translate(585px,100px);
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
	  		padding-top: 22%;
	  		margin-bottom: 10px;
	  		text-shadow: 0 0 15px #fff;
	  	}

	  	.content p{
	  		font-family: Montserrat, sans-serif;
	  		font-size: 20px;
	  		font-weight: 500;
	  		letter-spacing: 3px;
	  		color: #fff;
	  	}

	  	/*.jumbotron {
	      	background-color: #00071E;
	      	color: white;
	      	padding: 100px 25px;
	      	font-family: Montserrat, sans-serif;
	  	}*/

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

<center>
<img src="1.png" alt="Departemen Perhubungan Indonesia" style="float:left">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="background-wrap">
    <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
        <source src="tes3.mp4" type="video/mp4">
    </video>
	</div>

	<div class="content">
	  	<h1>Smart Traffic Light System</h1> 
	  	<p>Data Repository</p1> 
	  	<form class="form-inline">
	    	<input type="text" class="form-control" size="50" placeholder="Insert data you're searching for..." required>
	    	<a href="data.php" class="btn btn-default" role="button">Search</a><br><br>
	    	<a href="getdata_logpelanggaran.php" class="btn btn-default" role="button">Violation Log</a> 
	  		<a href="getdata_bank.php" class="btn btn-default" role="button">Bank</a> 
	  	</form>
	</div>
</body>
</center>

</html>