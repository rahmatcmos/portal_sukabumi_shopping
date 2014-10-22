<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ERROR 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend/css/endless.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend/css/endless-skin.css'); ?>">
  </head>
  <body>
	<div id="wrapper">
		<div class="padding-md" style="margin-top:50px;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
					<div class="h5">Oops, This Page Could Not Be Found!</div>
					<div class="h5"><?php echo $message; ?></div>
					<h1 class="m-top-none error-heading"><?php echo $heading; ?></h1>
					
					<h4>Search Our Website</h4>
					<div>Can't find what you need?</div>
					<div class="m-bottom-md">Try searching for the page here</div>
					<div class="input-group m-bottom-md">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
					<a class="btn btn-success m-bottom-sm" href="#"><i class="fa fa-home"></i> Back to Dashboard</a>
					<a class="btn btn-success m-bottom-sm" href="#"><i class="fa fa-envelope"></i> Contact Us</a>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('asset/backend/js/jquery-1.10.2.min.js'); ?>"></script>
	<!-- Bootstrap -->
  <script src="<?php echo base_url('asset/backend/js/bootstrap.min.js'); ?>"></script>
	<!-- Modernizr -->
	<script src='<?php echo base_url('asset/backend/js/modernizr.min.js'); ?>'></script>
	<!-- Pace -->
	<script src='<?php echo base_url('asset/backend/js/pace.min.js'); ?>'></script>
	<!-- Popup Overlay -->
	<script src='<?php echo base_url('asset/backend/js/jquery.popupoverlay.min.js'); ?>'></script>
	<!-- Slimscroll -->
	<script src='<?php echo base_url('asset/backend/js/jquery.slimscroll.min.js'); ?>'></script>
	<!-- Cookie -->
	<script src='<?php echo base_url('asset/backend/js/jquery.cookie.min.js'); ?>'></script>
	<!-- Endless -->
	<script src="<?php echo base_url('asset/backend/js/endless.js'); ?>"></script>
  </body>
</html>