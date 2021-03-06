{% extends 'auth.volt' %} {% block content %}

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-50 p-b-90">
			<form
				class="login100-form validate-form flex-sb flex-w"
				action="{{ url('/auth/store') }}"
				method="POST"
			>
				<span class="login100-form-title p-b-51">
					Register
				</span>

				<div
					class="wrap-input100 validate-input m-b-16"
					data-validate="Username is required"
				>
					<input
						class="input100"
						type="text"
						name="username"
						placeholder="Username"
					/>
					<span class="focus-input100"></span>
				</div>

				<div
					class="wrap-input100 validate-input m-b-16"
					data-validate="Email is required"
				>
					<input
						class="input100"
						type="email"
						name="email"
						placeholder="E-mail"
					/>
					<span class="focus-input100"></span>
				</div>

				<div
					class="wrap-input100 validate-input m-b-16"
					data-validate="Password is required"
				>
					<input
						class="input100"
						type="password"
						name="password"
						placeholder="Password"
					/>
					<span class="focus-input100"></span>
				</div>

				<div
					class="wrap-input100 validate-input m-b-16"
					data-validate="Confirm Password is required"
				>
					<input
						class="input100"
						type="password"
						name="pass_confirm"
						placeholder="Confirm Password"
					/>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn m-t-17">
					<button type="submit" class="login100-form-btn">
						Register
					</button>
				</div>
			</form>
			<hr />
			<form action="{{ url('/') }}">
				<div class="container-login100-form-btn m-t-17">
					<button class="back100-form-btn">
						Back to Homepage
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

{% endblock %}
