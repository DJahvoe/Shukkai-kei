a:3:{i:0;s:2948:"<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Shukkaikei</title>

		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous"
		/>
		<!-- <link rel="shortcut icon" type="image/x-icon" href="<?= $this->url->get('img/favicon.ico') ?>"/> -->
		<!-- Bootstrap core CSS -->
		<link
			href="/public/vendor/app/bootstrap/css/bootstrap.min.css"
			rel="stylesheet"
		/>

		<!-- Custom fonts for this template -->
		<link
			href="/public/vendor/app/fontawesome-free/css/all.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"
			rel="stylesheet"
			type="text/css"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
			rel="stylesheet"
			type="text/css"
		/>

		<!-- Custom styles for this template -->
		<link href="/public/css/app/style.min.css" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="<?= $this->url->get('/') ?>">Shukkai-kei</a>
		<button
			class="navbar-toggler navbar-toggler-right"
			type="button"
			data-toggle="collapse"
			data-target="#navbarResponsive"
			aria-controls="navbarResponsive"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			Menu
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/') ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/about') ?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/contact') ?>">Contact</a>
				</li><?php if ($this->session->has('auth')) { ?><li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/blog') ?>">Blog</a>
				</li><?php if ($this->session->get('auth')['is_admin'] == 1) { ?><li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/dashboard') ?>">Dashboard</a>
				</li><?php } ?><li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/auth/logout') ?>"
						><?= $this->session->get('auth')['username'] ?>, Logout</a
					>
				</li><?php } else { ?><li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/auth/login') ?>">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $this->url->get('/auth/register') ?>">Register</a>
				</li><?php } ?></ul>
		</div>
	</div>
</nav>
 ";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:" ";s:4:"file";s:91:"D:\DeveloperTools\xamppREINSTALL\htdocs\_Phalcon\final-project-individu/app/views/\app.volt";s:4:"line";i:42;}}i:1;s:2128:" <hr />

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<ul class="list-inline text-center">
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-github fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
				</ul>
				<p class="copyright text-muted">
					Copyright &copy; Shukkai-kei 2020
				</p>
			</div>
		</div>
	</div>
</footer>

	</body>
	<script
		src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"
	></script>

	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"
	></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"
	></script>

	<!-- Bootstrap core JavaScript -->
	<script src="/public/vendor/app/jquery/jquery.min.js"></script>
	<script src="/public/vendor/app/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="/public/js/app/jqBootstrapValidation.js"></script>
	<script src="/public/js/app/contact_me.js"></script>

	<!-- Custom scripts for this template -->
	<script src="/public/js/app/clean-blog.min.js"></script>
</html>
";}