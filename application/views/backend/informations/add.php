<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			<li>Form</li>	 
			<li class="active">Data Admins</li>	 
		</ul>
	</div><!--breadcrumb-->
	<div class="padding-md">
		<form id="formToggleLine" action="<?php echo base_url('backend/informations/create') ?>" method="POST" class="form-horizontal no-margin form-border">
		<div class="panel panel-info">
			<div class="panel-heading">
				DATA LOKASI KOTA/KABUPATEN SUKABUMI
			</div>
			<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nama Daerah</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
								<input class="form-control" name="city_name" type="text" placeholder="Kota/Kabupaten Sukabumi">
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('city_name', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label"></label>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-success">SAVE</button>
						</div>
					</div>
				<br>
				<div class="form-group">
				<div class="col-md-8">
					<table class="table table-striped" id="responsiveTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kota/Kabupaten</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 0;
								foreach ($locations_city as $row) {
									$no++;
							?>
							<tr class="">
								<td><?php echo $no; ?></td>
								<td><?php echo $row->city_name; ?></td>
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
				</div>
				</div>
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				DATA LOKASI KECAMATAN SUKABUMI
			</div>
			<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nama Kota/Kabupaten</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
								<select name="id_search_city" id="city" class="form-control" onChange="get_agency(this.value);">
									<option value="">Pilih Daerah ...</option>
									<?php  
										foreach ($locations_city as $row) {
									?>
									<option value="<?php echo $row->id_search_city; ?>"><?php echo $row->city_name; ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Nama Kecamatan</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
								<input class="form-control" name="agency_name" type="text" placeholder="Nama Kecamatan">
							</div>
						</div>
						<div class="col-lg-4">
						<?php echo form_error('Nama Kecamatan', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label"></label>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-success">SAVE</button>
						</div>
					</div>
				<br>
				<div class="form-group">
					<div class="col-md-8">
					<table class="table table-striped" id="responsiveTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kota/Kabupaten</th>
								<th>Nama Kecamatan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 0;
								foreach ($locations_agency->result() as $row) {
									$no++;
							?>
							<tr class="">
								<td><?php echo $no; ?></td>
								<td><?php echo $row->id_search_city; ?></td>
								<td><?php echo $row->agency_name; ?></td>
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
					<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>