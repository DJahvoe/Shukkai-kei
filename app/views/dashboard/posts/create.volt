{% extends 'dashboard.volt' %} {% block content %}
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Posts</h1>
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
		<form action="/dashboard/posts/store" method="POST">
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
				<label for="subtitle">Sub-Title</label>
				<input
					type="text"
					class="form-control"
					id="subtitle"
					name="subtitle"
					placeholder="Enter Sub-title"
				/>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" id="content" name="content"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
</div>
{% endblock %}
