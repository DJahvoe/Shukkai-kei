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
