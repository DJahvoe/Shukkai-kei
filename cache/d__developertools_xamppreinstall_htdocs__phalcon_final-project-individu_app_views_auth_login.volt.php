<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Shukkaikei</title>

		<link
			rel="stylesheet"
			type="text/css"
			href="/public/vendor/auth/bootstrap/css/bootstrap.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
		/>

		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/public/css/auth/util.css" />
		<link rel="stylesheet" type="text/css" href="/public/css/auth/main.css" />
	</head>
	<body>
		<?= $this->flashSession->output() ?>
		
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-50 p-b-90">
			<form
				class="login100-form validate-form flex-sb flex-w"
				action="<?= $this->url->get('/auth/signin') ?>"
				method="POST"
			>
				<span class="login100-form-title p-b-51">
					Login
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
				<!-- 
				<div class="flex-sb-m w-full p-t-3 p-b-24">
					<div class="contact100-form-checkbox">
						<input
							class="input-checkbox100"
							id="ckb1"
							type="checkbox"
							name="remember-me"
						/>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
				</div> -->

				<div class="container-login100-form-btn m-t-17">
					<button type="submit" class="login100-form-btn">
						Login
					</button>
				</div>
			</form>
			<hr />
			<form action="<?= $this->url->get('/') ?>">
				<div class="container-login100-form-btn m-t-17">
					<button class="back100-form-btn">
						Back to Homepage
					</button>
				</div>
			</form>
		</div>
	</div>
</div>


	</body>

	<!--===============================================================================================-->
	<script src="/public/vendor/auth/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="/public/vendor/auth/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="/public/js/auth/main.js"></script>
</html>
