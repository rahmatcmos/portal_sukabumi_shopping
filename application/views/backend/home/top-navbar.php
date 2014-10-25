<div id="wrapper" class="preload">
<div id="top-nav" class="skin-1 fixed">
	<a href="<?php echo base_url('backend/home'); ?>">
	<div class="brand">
		<span>Sukabumi</span>
		<span class="text-toggle"> Shopping</span>
	</div>
	</a>
	<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<ul class="nav-notification clearfix">
		<li class="profile dropdown">
			<a class="dropdown-toggle" target="_blank" href="<?php echo base_url('home'); ?>">
				<strong>View Website</strong>
			</a>
		</li>
		<li class="profile dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<strong><?php echo $this->session->userdata('username');?></strong>
				<span><i class="fa fa-chevron-down"></i></span>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a class="clearfix" href="#">
						<img src="<?php echo base_url('asset/backend/images/user.jpg'); ?>" alt="User Avatar">
						<div class="detail">
							<strong>Fathan Rohman</strong>
							<p class="grey">fathan@email.com</p> 
						</div>
					</a>
				</li>
				<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
				<li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
				<li class="divider"></li>
				<li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
			</ul>
		</li>
	</ul>
</div>