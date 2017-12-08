<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

	<a class="navbar-brand" href="../views/home.php">
		<img src="../img/logo-mojito.png" height="50" class="d-inline-block align-top" alt="">
	</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<p class="nav-link" id="">Alcoohol test</p>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="show-signup" data-toggle="modal" data-target="login-modal" href="">Sign up</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="show-signin" data-toggle="modal" data-target="signin-modal" href="">Sign in</a>
			</li>
		</ul>
	</div>
</nav>

<div id="signin-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div id='logbox'>
				<img src="../img/lemon.png">
				<input type="text" placeholder="Username">
				<input type="password" placeholder="Password">
				<button id='login-btn'>Sign in</button>
				<p><a href="">Mot de passe perdu ?</a></p>
				<p><a href="">Créer son compte !</a></p>
			</div>
		</div>
	</div>
</div>


<div id="signup-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="signin-modal" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div id='logbox'>
				<img src="../img/lemon.png">
				<input type="text" placeholder="Username">
				<input type="password" placeholder="Password">
				<button id='login-btn'>Sign up</button>
				<p><a href="">Mot de passe perdu ?</a></p>
				<p><a href="">Créer son compte !</a></p>
			</div>
		</div>
	</div>
</div>