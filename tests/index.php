<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Moji'O'to</title>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">

		<script	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


		<script>
			$(document).ready(function(){

			});
		</script>

		<style>
			#mainPanel {
				margin-top: 10vh;
				margin-bottom: 10vh;
				max-width: 40vw;
			}

			.col {
				text-align: center;
			}

			button {
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<?php include "../includes/header.php" ?>		

		<div id="mainPanel" class="container">
			<div class="row align-items-center">
				<div class="col md">
					<a href="fastClick/"><button type="button" class="btn btn-info">FastClick</button></a>
				</div>
				<div class="col md">
					<a href="carGame/"><button type="button" class="btn btn-light">CarGame</button></a>				
				</div>
				<div class="col md">
					<button type="button" class="btn btn-dark">????</button>					
				</div>
			</div>
		</div>

		<?php include "../includes/footer.php" ?>

	</body>

</html>