<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">Shukkai-kei</a>
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
					<a class="nav-link" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/about') }}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
				</li>

				{%- if session.has('auth') -%}
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/blog') }}">Blog</a>
				</li>
				{%- if session.get('auth')['is_admin'] == 1 -%}
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
				</li>
				{%- endif -%}
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/auth/logout') }}"
						>{{ session.get('auth')['username'] }}, Logout</a
					>
				</li>
				{%- else -%}
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/auth/login') }}">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/auth/register') }}">Register</a>
				</li>
				{%- endif -%}
			</ul>
		</div>
	</div>
</nav>
