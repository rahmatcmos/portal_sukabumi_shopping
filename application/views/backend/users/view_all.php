<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#"> Home</a></li>
			<li>Admins</li>	 
			<li class="active">Data Users Admins</li>	 
		</ul>
	</div>
	<div class="padding-md">
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Data Users Admin
				<span class="label label-success pull-right"><div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div></span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-5 col-sm-3">
						<a href="<?php echo base_url('backend/users/add') ?>"><button class="btn btn-info btn-sm">Create New</button></a>
					</div>
					<div class="col-md-2 col-sm-3">
						<select id="columns" onchange="sorter.search('query')" class="form-control"></select>
					</div>
					<div class="col-md-2 col-sm-3">
						<select id="tablelocation" class="form-control" onchange="sorter.size(this.value)">
							<option value="5">5</option>
							<option value="10" selected="selected">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-3">
						<input type="text" id="query" onkeyup="sorter.search('query')" class="form-control" placeholder="Masukan Kata Pencarian">
					</div>
				</div>
			</div>
			<div class="padding-md clearfix">
			<table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover tinytable">
				<thead>
					<tr>
						<th class="nosort"><h5>No</h5></th>
						<th><h5>Nama Lengkap</h5></th>
						<th><h5>Username</h5></th>
						<th><h5>Email</h5></th>
						<th><h5>Status</h5></th>
						<th><h5>Action</h5></th>
					</tr>
				</thead>
				<tbody>
					<?php  
						$no = 0;
							foreach ($users as $row) {
								$no++;
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row->fullname ?></td>
						<td><?php echo $row->username ?></td>
						<td><?php echo $row->email ?></td>
						<td><span class="label label-info">Active</span></td>
						<td>
							<a href=""><button class="btn btn-warning btn-xs">Edit</button></a>
							<a href=""><button class="btn btn-danger btn-xs">Delete</button></a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<div class="br5"></div>
			<div id="tablefooter">
				<div id="tablenav">
					<div class="row">
						<div class="col-md-10 col-xs-3">
							<img src="<?php echo base_url('asset/backend/images/first.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
							<img src="<?php echo base_url('asset/backend/images/previous.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
							<img src="<?php echo base_url('asset/backend/images/next.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
							<img src="<?php echo base_url('asset/backend/images/last.gif'); ?>" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
						</div>
						<div class="col-md-1 col-xs-3">
							<select class="form-control" id="pagedropdown"></select>
						</div>
						<div class="col-md-1 col-xs-3">
							<a class="button blue" href="javascript:sorter.showall()"><div class="btn btn-info btn-xs">View all</div></a>
						</div>
					</div>
					<div class="br5"></div>
					<div class="br5"></div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>