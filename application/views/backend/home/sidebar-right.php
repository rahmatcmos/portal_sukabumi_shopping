<aside class="fixed skin-6">	
	<div class="sidebar-inner scrollable-sidebar">
		<div class="size-toggle">
			<a class="btn btn-sm" id="sizeToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
				<i class="fa fa-power-off"></i>
			</a>
		</div>
		<div class="user-block clearfix">
			<img src="<?php echo base_url('asset/backend/images/user.jpg'); ?>" alt="User Avatar">
			<div class="detail">
				<strong><?php echo $this->session->userdata('username');?></strong>
				<ul class="list-inline">
					<li><a href="#">Profile</a></li>
					<li><a href="#" class="no-margin">Inbox</a></li>
				</ul>
			</div>
		</div>
		<div class="main-menu">
			<ul>
				<li>
					<a href="<?php echo base_url('backend/home'); ?>">
						<span class="menu-icon"><i class="fa fa-desktop fa-lg"></i></span>
						<span class="text">Dashboard</span>
						<span class="menu-hover"></span>
					</a>
				</li>
				<li class="padding-10">USERS</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-users fa-lg"></i></span>
						<span class="text">Admins</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/users/add'); ?>"><span class="submenu-label">Create Admin</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/users/'); ?>"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-users fa-lg"></i></span>
						<span class="text">Members</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/users/add'); ?>"><span class="submenu-label">Create Member</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/users/'); ?>"><span class="submenu-label">View All</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/users/user_pending'); ?>"><span class="submenu-label">Member Pending</span></a></li>
					</ul>
				</li>

				<li class="padding-10">PRODUCTS</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-tags fa-lg"></i></span>
						<span class="text">Product Categories</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">Create New</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-tags fa-lg"></i></span>
						<span class="text">Brands</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">Create New</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-tags fa-lg"></i></span>
						<span class="text">Label Tags</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">Create New</span></a></li>
					</ul>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-comments fa-lg"></i></span>
						<span class="text">Comments</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-comments fa-lg"></i></span>
						<span class="text">Guest Books</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="#"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>

				<li class="padding-10">INFORMATION</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-map-marker fa-lg"></i></span>
						<span class="text">City/Agency</span>
						<span class="menu-hover"></span>
					</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url('backend/informations/'); ?>"><span class="submenu-label">View All</span></a></li>
					</ul>
				</li>
				
				<li class="padding-10">OTHERS</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-wrench fa-lg"></i></span>
						<span class="text">Web Setting</span>
						<span class="menu-hover"></span>
					</a>
				</li>
				<li class="openable open">
					<a href="#">
						<span class="menu-icon"><i class="fa fa-wrench fa-lg"></i></span>
						<span class="text">F.A.Q</span>
						<span class="menu-hover"></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</aside>