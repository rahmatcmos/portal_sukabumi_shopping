<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			<li>Form</li>	 
			<li class="active">Data Admins</li>	 
		</ul>
	</div>
	<div class="padding-md">
		<form id="formToggleLine" action="<?php echo base_url('backend/users/save_data_admins') ?>" enctype="multipart/form-data" method="POST" class="form-horizontal no-margin form-border">
			<?php echo $this->session->flashdata('msg'); ?>
			<?php
				$row = $rows->row();
				$id  = $row->id_users;
			?>
			<div class="panel panel-info">
				<div class="panel-heading">
					USERS
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Username</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-user"></span></span>
								<input class="form-control" name="username" value="<?php echo $row->username; ?>" type="text" placeholder="Username">
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
								<input class="form-control" name="email" value="<?php echo $row->email; ?>" type="text" placeholder="user@mail.com">
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-key"></span></span>
								<input class="form-control" name="password_one" type="password" placeholder="Your Password">
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('password_one', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Konfirmasi Password</label>
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><span class="fa fa-key"></span></span>
								<input class="form-control" name="password_two" type="password" placeholder="Confirm Password">
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo form_error('password_two', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label"></label>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-success">UPDATE</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					PROFILE
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nama Lengkap</label>
						<div class="col-lg-6">
							<input class="form-control" name="fullname" value="<?php echo $row->fullname; ?>" type="text" placeholder="Masukan nama lengkap">
						</div>
						<div class="col-lg-4">
							<?php echo form_error('fullname', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Tanggal Lahir</label>
						<div class="col-lg-6">
							<input class="form-control" name="birthday" value="#" type="text" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Jenis Kelamin</label>
						<div class="col-lg-6">
							<select name="gender" class="form-control">
								<option value="">---- Jenis Kelamin ----</option>
								<option value="Male">Laki-laki</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Telephone</label>
						<div class="col-lg-6">
							<input class="form-control" name="telephone" value="#" type="text" placeholder="08572345xxx">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Avatar</label>
						<div class="col-lg-6">
							<input class="form-control" name="avatar" type="file">
							<input type="hidden" name="avatar2" value="#">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label"></label>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-success">UPDATE</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					INFORMATION
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">Daerah Asal</label>
						<div class="col-lg-6">
							<select name="city" class="form-control">
								<option value="">---- PILIH DAERAH ----</option>
								<option value="Kota Sukabumi">Kota Sukabumi</option>
								<option value="Kabupaten Sukabumi">Kabupaten Sukabumi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Kode Pos</label>
						<div class="col-lg-6">
							<input class="form-control" name="zip_code" value="#" type="text" placeholder="Example: 43121">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Kecamatan</label>
						<div class="col-lg-6">
							<input type="text" name="kecamatan" value="<?php echo $row->kecamatan; ?>" class="form-control" placeholder="Daerah Kecamatan">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Kelurahan</label>
						<div class="col-lg-6">
							<input class="form-control" name="kelurahan" value="<?php echo $row->kelurahan; ?>" type="text" placeholder="Daearah Kelurahan">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">RT</label>
						<div class="col-lg-6">
							<input class="form-control" name="rt" type="text" value="<?php echo $row->rt; ?>" placeholder="Example : 03">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">RW</label>
						<div class="col-lg-6">
							<input class="form-control" name="rw" value="<?php echo $row->rw; ?>" type="text" placeholder="Example : 08">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label"></label>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-success">UPDATE</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>