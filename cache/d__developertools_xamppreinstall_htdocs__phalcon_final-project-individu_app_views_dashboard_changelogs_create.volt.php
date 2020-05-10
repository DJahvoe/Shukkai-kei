<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />

		<title>Shukkai-kei Dashboard</title>

		<!-- Custom fonts for this template-->
		<link
			href="/public/vendor/admin/fontawesome-free/css/all.min.css"
			rel="stylesheet"
			type="text/css"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet"
		/>

		<!-- Custom styles for this template-->
		<link href="/public/css/admin/style.min.css" rel="stylesheet" />

		<!-- Custom styles for this page -->
		<link
			href="/public/vendor/admin/datatables/dataTables.bootstrap4.min.css"
			rel="stylesheet"
		/>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Sidebar -->
			<ul
	class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
	id="accordionSidebar"
>
	<!-- Sidebar - Brand -->
	<a
		class="sidebar-brand d-flex align-items-center justify-content-center"
		href="<?= $this->url->get('/') ?>"
	>
		<div class="sidebar-brand-icon rotate-n-15">
			出会系
		</div>
		<div class="sidebar-brand-text mx-3">Shukkaikei</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0" />

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= $this->url->get('/dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a
		>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider" />

	<!-- Heading -->
	<div class="sidebar-heading">
		Data
	</div>

	<!-- Nav Item - Posts -->
	<li class="nav-item">
		<a class="nav-link" href="<?= $this->url->get('/dashboard/posts') ?>">
			<i class="fas fa-fw fa-paper-plane"></i>
			<span>Posts</span></a
		>
	</li>

	<!-- Nav Item - Member -->
	<li class="nav-item">
		<a class="nav-link" href="<?= $this->url->get('/dashboard/members') ?>">
			<i class="fas fa-fw fa-user-friends"></i>
			<span>Members</span></a
		>
	</li>

	<!-- Nav Item - Comments -->
	<li class="nav-item">
		<a class="nav-link" href="<?= $this->url->get('/dashboard/comments') ?>">
			<i class="fas fa-fw fa-comments"></i>
			<span>Comments</span></a
		>
	</li>

	<!-- Nav Item - Feedback -->
	<li class="nav-item">
		<a class="nav-link" href="<?= $this->url->get('/dashboard/feedbacks') ?>">
			<i class="fas fa-fw fa-smile"></i>
			<span>Feedbacks</span></a
		>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider" />

	<!-- Heading -->
	<div class="sidebar-heading">
		Log
	</div>

	<!-- Nav Item - Changelog -->
	<li class="nav-item">
		<a class="nav-link" href="<?= $this->url->get('/dashboard/changelogs') ?>">
			<i class="fas fa-fw fa-exchange-alt"></i>
			<span>Changelogs</span></a
		>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block" />

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>

			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
				<div id="content">
					<!-- Topbar -->
					<nav
	class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
>
	<!-- Sidebar Toggle (Topbar) -->
	<button
		id="sidebarToggleTop"
		class="btn btn-link d-md-none rounded-circle mr-3"
	>
		<i class="fa fa-bars"></i>
	</button>

	<!-- Topbar Search -->
	<!-- <form
		class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
	>
		<div class="input-group">
			<input
				type="text"
				class="form-control bg-light border-0 small"
				placeholder="Search for..."
				aria-label="Search"
				aria-describedby="basic-addon2"
			/>
			<div class="input-group-append">
				<button class="btn btn-primary" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</form> -->

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">
		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a
				class="nav-link dropdown-toggle"
				href="#"
				id="searchDropdown"
				role="button"
				data-toggle="dropdown"
				aria-haspopup="true"
				aria-expanded="false"
			>
				<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div
				class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				aria-labelledby="searchDropdown"
			>
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input
							type="text"
							class="form-control bg-light border-0 small"
							placeholder="Search for..."
							aria-label="Search"
							aria-describedby="basic-addon2"
						/>
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>

		<div class="topbar-divider d-none d-sm-block"></div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a
				class="nav-link dropdown-toggle"
				href="#"
				id="userDropdown"
				role="button"
				data-toggle="dropdown"
				aria-haspopup="true"
				aria-expanded="false"
			>
				<span class="mr-2 d-none d-lg-inline text-gray-600 small"
					><?= $this->session->get('auth')['username'] ?></span
				>
			</a>
			<!-- Dropdown - User Information -->
			<div
				class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="userDropdown"
			>
				<a class="dropdown-item" href="<?= $this->url->get('/dashboard/changelogs') ?>">
					<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
					Change Log
				</a>
				<div class="dropdown-divider"></div>
				<a
					class="dropdown-item"
					href="#"
					data-toggle="modal"
					data-target="#logoutModal"
				>
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>
	</ul>
</nav>

					<!-- End of Topbar -->

					<!-- Begin Page Content -->
					<div class="container-fluid">
						<?= $this->flashSession->output() ?>
						
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Changelogs</h1>
<!-- <p class="mb-4">
		DataTables is a third party plugin that is used to generate the demo table
		below. For more information about DataTables, please visit the
		<a target="_blank" href="https://datatables.net"
			>official DataTables documentation</a
		>.
	</p> -->

<!-- Form Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form</h6>
	</div>
	<div class="card-body">
		<form action="/dashboard/changelogs/store" method="POST">
			<div class="form-group">
				<label for="title">Title</label>
				<input
					type="text"
					class="form-control"
					id="title"
					name="title"
					placeholder="Enter Title"
				/>
			</div>
			<div class="form-group">
				<label for="activated_pages">Activated Pages: </label>
			</div>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input id="select-all" type="checkbox" class="form-check-input" />
					Select All
				</label>
			</div><?php if ($this->length($posts) > 0) { ?><?php foreach ($posts as $post) { ?>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input
						type="checkbox"
						name="activated_pages[]"
						class="form-check-input"
						value="<?= $post->id ?>"
					/><?= $post->title ?>
				</label>
			</div>
			<?php } ?><?php } ?><hr />
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Create</button>
			</div>
		</form>
	</div>
</div>

<script>
	document.getElementById('select-all').onclick = function () {
		console.log('HALO');
		let checkboxes = document.getElementsByName('activated_pages[]');
		for (let checkbox of checkboxes) {
			checkbox.checked = this.checked;
		}
	};
</script>

					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; Shukkai-kei 2020</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div
	class="modal fade"
	id="logoutModal"
	tabindex="-1"
	role="dialog"
	aria-labelledby="exampleModalLabel"
	aria-hidden="true"
>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button
					class="close"
					type="button"
					data-dismiss="modal"
					aria-label="Close"
				>
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				Select "Logout" below if you are ready to end your current session.
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">
					Cancel
				</button>
				<a class="btn btn-primary" href="<?= $this->url->get('/auth/logout') ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

	</body>
	<!-- Bootstrap core JavaScript-->
	<script src="/public/vendor/admin/jquery/jquery.min.js"></script>
	<script src="/public/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="/public/vendor/admin/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="/public/js/admin/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="/public/vendor/admin/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="/public/js/admin/demo/chart-area-demo.js"></script>
	<script src="/public/js/admin/demo/chart-pie-demo.js"></script>

	<!-- Page level plugins -->
	<script src="/public/vendor/admin/datatables/jquery.dataTables.min.js"></script>
	<script src="/public/vendor/admin/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="/public/js/admin/demo/datatables-demo.js"></script>
</html>
