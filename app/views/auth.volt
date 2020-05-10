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
			href="../../public/vendor/auth/bootstrap/css/bootstrap.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="../../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="../../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
		/>

		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="../../public/css/auth/util.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="../../public/css/auth/main.css"
		/>
	</head>
	<body>
		{{ flashSession.output() }}
		{% block content %} {% endblock %}
	</body>

	<!--===============================================================================================-->
	<script src="../../public/vendor/auth/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../../public/vendor/auth/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../../public/js/auth/main.js"></script>
</html>
