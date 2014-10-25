<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="#"> Home</a></li>
			<li>Admins</li>	 
			<li class="active">View All</li>	 
		</ul>
	</div>
	<div class="padding-md">
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Data Admin
				<span class="label label-success pull-right">10 Admins</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<a href="<?php echo base_url('backend/users/add') ?>"><button class="btn btn-info btn-sm">Create New</button></a>
					</div>
				</div>
			</div>
			<table class="table table-striped" id="responsiveTable">
				<thead>
					<tr>
						<th>
							<label class="label-checkbox">
								<input type="checkbox" id="chk-all">
								<span class="custom-checkbox"></span>
							</label>
						</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr class="">
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Fathan Rohman</td>
						<td>karir.fathan@gmail.com</td>
						<td><span class="label label-info">Active</span></td>
						<td>
							<a href=""><button class="btn btn-warning btn-xs">Edit</button></a>
							<a href=""><button class="btn btn-danger btn-xs">Delete</button></a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="panel-footer clearfix">
				<ul class="pagination pagination-xs m-top-none pull-right">
					<li class="disabled"><a href="#">Previous</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
</div>