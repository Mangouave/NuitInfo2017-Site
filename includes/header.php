<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/NuitInfo2017-Site/css/custom.css">
<script	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

	<a class="navbar-brand" href="/NuitInfo2017-Site/views/home.php">
		<img src="/NuitInfo2017-Site/img/logo-mojito.png" height="50" class="d-inline-block align-top" alt="">
	</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<p class="nav-link"><a style="text-decoration: none; " href="/NuitInfo2017-Site/tests/">Test de réactivité</a></p>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="show-signup" data-toggle="modal" href="">Sign up</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="show-signin" data-toggle="modal" href="">Sign in</a>
			</li>
		</ul>
	</div>
</nav>

<div id="signin-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div id='logbox'>
				<img src="/NuitInfo2017-Site//img/lemon.png">
				<input type="text" placeholder="Username">
				<input type="password" placeholder="Password">
				<button id='login-btn'>Sign in</button>
				<p><a href="">Mot de passe perdu ?</a></p>
				<p><a href="">Créer son compte !</a></p>
			</div>
		</div>
	</div>
</div>


<div id="signup-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="signup-modal" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div id='logbox'>
				<img src="/NuitInfo2017-Site//img/lemon.png">
				<input type="text" placeholder="Username">
				<input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm Password">
				<button id='login-btn'>Sign up</button>
                <p><a href="">Déjà un compte ? <br>Connectez-vous !</a></p>
			</div>
		</div>
	</div>
</div>
