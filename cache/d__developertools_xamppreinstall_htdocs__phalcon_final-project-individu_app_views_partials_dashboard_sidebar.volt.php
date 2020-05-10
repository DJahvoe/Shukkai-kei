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
