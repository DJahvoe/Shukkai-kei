<!DOCTYPE html>
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
		<!-- <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}"/> -->
		<!-- Bootstrap core CSS -->
		<link
			href="../../public/vendor/app/bootstrap/css/bootstrap.min.css"
			rel="stylesheet"
		/>

		<!-- Custom fonts for this template -->
		<link
			href="../../public/vendor/app/fontawesome-free/css/all.min.css"
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
		<link href="../../public/css/app/style.min.css" rel="stylesheet" />
	</head>
	<body>
		{% include '/partials/navbar.volt' %} {% block content %} {% endblock %} {%
		include '/partials/footer.volt' %}
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
	<script src="../../public/vendor/app/jquery/jquery.min.js"></script>
	<script src="../../public/vendor/app/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="../../public/js/app/jqBootstrapValidation.js"></script>
	<script src="../../public/js/app/contact_me.js"></script>

	<!-- Custom scripts for this template -->
	<script src="../../public/js/app/clean-blog.min.js"></script>
</html>
