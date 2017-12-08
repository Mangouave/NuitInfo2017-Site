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
		<link rel="stylesheet" type="text/css" href="../css/custom.css">

		<script	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="view.js"></script>
		<script src="controller.js"></script>

		<script>
			$(document).ready(function(){
				new controller(this);
			});
		</script>

		<style>
			#mainPanel{
				height: 40vh;
				width: 40vw;
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<?php include "../../includes/header.php" ?>		

		<div id="mainPanel" class="container btn-info">
			<div class="row">
				<div class="col md">
				
				</div>
			</div>
		</div>

		<?php include "../../includes/footer.php" ?>

	</body>

</html>