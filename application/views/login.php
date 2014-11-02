<div class="br10"></div>
<div class="br10"></div>
<div class="br10"></div>
<div class="container">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading panel-login-color">
				<h3>MASUK</h3>
			</div>
			<div class="panel-body border-panel-ccc">
				<form accept-charset="UTF-8" action="<?php echo base_url('backend/users/login') ?>" class="" method="post">
					<div style="display:none">
						<input name="utf8" type="hidden" value="">
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
							<input class="grey remember" id="user_remember_me" name="user_remember_me" type="checkbox" value="1">
							<span>Biarkan saya tetap masuk</span>
						</div>
						<div class="col-md-12 margin-bottom10 padding0">
							<a href="#">Lupa Kata Sandi</a>
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
			<div class="panel-footer border-top-footer-panel	 panel-login-color"></div>
		</div>
	</div>
	<div class="col-md-4">
	</div>
</div>
<div class="br10"></div>