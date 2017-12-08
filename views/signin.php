<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Moji'O'to - Sign in</title>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/custom.css">

	</head>

	<body>
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

			<a class="navbar-brand" href="#">
				<img src="../img/logo-mojito.png" height="50" class="d-inline-block align-top" alt="">
			</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<p class="nav-link" id="" >Alcoohol test</p>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="show-signup" href="./signup.html">Sign up</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="show-signin" href="./signin.html">Sign in</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
						Check me out
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

		<script	src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="../controllers/home-controller.js" type="text/javascript"></script>
	</body>

</html>