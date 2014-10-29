<header>
	<section class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- <div class="col-md-6">Portal Jual Beli Online Sukabumi Shopping</div>
					<div class="col-md-6">Selamat Datang, User</div> -->
				</div>
			</div>
		</div>
	</section>
</header>
<section class="header2 shadow-bottom-navbar" id="top-menu-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo base_url('home'); ?>">Sukabumi Shopping</a>
					</div>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<div class="text-center">
								<button type="button" class="btn btn-fresh btn-sm btn-red-navbar"><span class="fa fa-search"></span> Iklan Terbaru</button>
							</div>
						</li>
						<li>
							<div class="ui-group-buttons">
								<a href="#" data-toggle="modal" data-target="#login"><button type="button" class="btn btn-primary btn-sm btn-login">Login</button></a>
								<div class="or or-sm"></div>
								<a href="#" data-toggle="modal" data-target="#signup"><button type="button" class="btn btn-primary btn-sm btn-register">Daftar</button></a>
							</div>
						</li>
						<li>
							<div class="text-center">
								<a href="<?php echo base_url('signup_ads') ?>"><button type="button" class="btn btn-fresh btn-sm"><span class="fa fa-plus"></span> Pasang Iklan Gratis</button></a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog-2">
		<div class="modal-content">
			<span class="close close-modal fa fa-times" data-dismiss="modal" aria-hidden="true"></span>
			<div class="modal-content width100 margin0">
				<div class="modal-header bg-sky modal-header-info">
					<h3 align="center">MASUK</h3>
				</div>
				<div class="modal-body">
					<form accept-charset="UTF-8" action="<?php echo base_url('') ?>" class="" method="post">
						<div style="display:none">
							<input name="utf8" type="hidden" value="✓">
							<input name="authenticity_token">
						</div>
						<fieldset>
							<div class="form-group">
								<a class="btn btn-primary-fb" href="#"><i class="fa fa-facebook pull-left font16"></i> Login dengan Facebook </a>
							</div>
							<div class="form-group margin-bottom30 margin-top20">
								<div class="col-xs-12 padding0" style=" margin-left: 0px; ">
									<i class="omb-or"></i>
									<span class="omb-span">atau</span>
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="email">Email</label>
									<input class="form-control" name="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="password">Password</label>
									<input class="form-control password" name="password" placeholder="Kata Sandi" type="password">
								</div>
							</div>
							<div class="col-md-12 margin-bottom10 padding0">
								<input name="user[remember_me]" type="hidden" value="0">
								<input class="grey remember" id="user_remember_me" name="user[remember_me]" type="checkbox" value="1">
								<span>Biarkan saya tetap masuk</span>
							</div>
							<div class="col-md-12 margin-bottom10 padding0">
								<a href="/users/password/new">Lupa Kata Sandi</a>
							</div>
							<div class="form-group">
								<div class="controls">
									<input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Masuk">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12 col-md-offset-4"> Bukan Member ? <a href="#signup" data-dismiss="modal" data-toggle="modal" data-target="#signup"> Daftar </a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>  		
		</div>
	</div>
</div>

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog-2">
		<div class="modal-content">
			<span class="close close-modal fa fa-times" data-dismiss="modal" aria-hidden="true"></span>
			<div class="modal-content width100 margin0">
				<div class="modal-header bg-sky modal-header-blue">
					<h3 align="center">DAFTAR</h3>
				</div>
				<div class="modal-body">
					<form accept-charset="UTF-8" action="" class="" method="post">
						<div style="display:none">
							<input name="utf8" type="hidden" value="✓">
							<input name="authenticity_token">
						</div>
						<fieldset>
							<div class="form-group">
								<a class="btn btn-primary-fb" href="/users/auth/facebook"><i class="fa fa-facebook pull-left font16"></i> Daftar dengan Facebook </a>
							</div>
							<div class="form-group margin-bottom30 margin-top20">
								<div class="col-xs-12 padding0" style=" margin-left: 0px; ">
									<i class="omb-or"></i>
									<span class="omb-span">atau</span>
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="username">Username</label>
									<input class="form-control" name="username" placeholder="Username" type="text" required>
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="email">Email</label>
									<input class="form-control" name="email" placeholder="Email" type="email" required>
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="password">Password</label>
									<input class="form-control password" name="password" placeholder="Kata Sandi" type="password" required>
								</div>
							</div>
							<div class="form-group">
								<div class="controls text-italic">
									<label for="password">Konfirmasi password</label>
									<input class="form-control password" name="password" placeholder="Konfirmasi Kata Sandi" type="password" required>
								</div>
							</div>
							<div class="form-group">
								<div class="controls">
									<input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Daftar">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12 col-md-offset-3"> Sudah punya akun? <a href="#signup" data-dismiss="modal" data-toggle="modal" data-target="#login"> Masuk </a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>  		
		</div>
	</div>
</div>