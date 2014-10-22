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
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-envelope fa-lg"></i>
				<span class="notification-label bounceIn animation-delay4">7</span>
			</a>
			<ul class="dropdown-menu message dropdown-1">
				<li><a>You have 4 new unread messages</a></li>					  
				<li>
					<a class="clearfix" href="#">
						<img src="../asset/backend/images/user.jpg" alt="User Avatar">
						<div class="detail">
							<strong>Fathan Rohman</strong>
							<p class="no-margin">
								Lorem ipsum dolor sit amet...
							</p>
							<small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
						</div>
					</a>	
				</li>
				<li><a href="#">View all messages</a></li>					  
			</ul>
		</li>
		<li class="dropdown hidden-xs">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-tasks fa-lg"></i>
				<span class="notification-label bounceIn animation-delay5">4</span>
			</a>
			<ul class="dropdown-menu task dropdown-2">
				<li><a href="#">You have 4 tasks to complete</a></li>					  
				<li>
					<a href="#">
						<div class="clearfix">
							<span class="pull-left">Bug Fixes</span>
							<small class="pull-right text-muted">78%</small>
						</div>
						<div class="progress">
							<div class="progress-bar" style="width:78%"></div>
						</div>
					</a>
				</li>
				<li><a href="#">View all tasks</a></li>					  
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-bell fa-lg"></i>
				<span class="notification-label bounceIn animation-delay6">5</span>
			</a>
			<ul class="dropdown-menu notification dropdown-3">
				<li><a href="#">You have 5 new notifications</a></li>					  
				<li>
					<a href="#">
						<span class="notification-icon bg-warning">
							<i class="fa fa-warning"></i>
						</span>
						<span class="m-left-xs">Server #2 not responding.</span>
						<span class="time text-muted">Just now</span>
					</a>
				</li>
				<li><a href="#">View all notifications</a></li>					  
			</ul>
		</li>
		<li class="profile dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<strong>Fathan Rohman</strong>
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