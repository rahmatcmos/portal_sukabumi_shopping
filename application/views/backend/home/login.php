<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Form</title>
	<link href="<?php echo base_url('asset/backend/css/style_login_backend.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('asset/backend/css/style.css') ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url('asset/backend/js/jquery-1.10.2.min.js') ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".username").focus(function() {
				$(".user-icon").css("left","-48px");
			});
			$(".username").blur(function() {
				$(".user-icon").css("left","0px");
			});

			$(".password").focus(function() {
				$(".pass-icon").css("left","-48px");
			});
			$(".password").blur(function() {
				$(".pass-icon").css("left","0px");
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div class="user-icon"></div>
		<div class="pass-icon"></div>
		<form name="login-form" class="login-form" action="<?php echo base_url('backend/login/DoLogin'); ?>" method="POST">
			<div class="header">
				<h1>Sukabumi Shopping</h1>
				<span><?php echo validation_errors(); ?>
				<?php echo $this->session->flashdata('notification')?>
			</div>
			<div class="content">
				<input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" placeholder="username">
				<input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" placeholder="password">
			</div>

			<div class="footer">
				<input type="submit" name="submit" value="Login" class="button" />
			</div>
		</form>
	</div>
	<div class="gradient"></div>
</body>
</html>