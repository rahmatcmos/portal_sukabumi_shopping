<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "shareds/head.php" ?>
	<title>Sukabumi Shopping</title>
</head>
<body class="body_login">
	<?php include "shareds/nav_bar.php" ?>
	<?php include "shareds/mini_property.php" ?>
	<div class="container">
		<div class="row box-padding">
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<div class="container">
	    <div class="omb_login">
	    	<h3 class="omb_authTitle">Login Account</h3>
			<div class="row omb_row-sm-offset-3 omb_socialButtons">
	    	    <div class="col-xs-6 col-sm-6">
			        <a href="#">
				        <center><img src="asset/frontend/img/login-fb.png" alt=""></center>
			        </a>
		        </div>
			</div>

			<div class="row omb_row-sm-offset-3 omb_loginOr">
				<div class="col-xs-12 col-sm-6">
					<hr class="omb_hrOr">
					<span class="omb_spanOr">or</span>
				</div>
			</div>

			<div class="row omb_row-sm-offset-3">
				<div class="col-xs-12 col-sm-6">	
				    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="email address">
						</div>
						<span class="help-block"></span>
											
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input  type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div class="br20"></div>
	            <span class="alert alert-danger">Password error</span>
						<div class="br20"></div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
					</form>
				</div>
	    	</div>
			<div class="row omb_row-sm-offset-3">
				<div class="col-xs-12 col-sm-3">
					<label class="checkbox">
						<input type="checkbox" value="remember-me">Remember Me
					</label>
				</div>
				<div class="col-xs-12 col-sm-3">
					<p class="omb_forgotPwd">
						<a href="#">Forgot password?</a>
					</p>
				</div>
			</div>	    	
			</div>
	  </div>
	</div>
	</div>
	<?php include "shareds/footer.php" ?>
	<?php include "shareds/javascript.php" ?>
</body>
</html>