<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			<li class="active">Dashboard</li>	 
		</ul>
	</div>
	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Dashboard</h3>
			<span>Welcome back Mr.Fathan Rohman</span>
		</div>

		<ul class="page-stats">
			<li>
				<div class="value">
					<span>Total Users</span>
					<h4 id="currentVisitor">10000</h4>
				</div>
				<span id="visits" class="sparkline"></span>
			</li>
			<li>
				<div class="value">
					<span>Total Iklan</span>
					<h4><strong id="currentBalance">50453</strong></h4>
				</div>
				<span id="balances" class="sparkline"></span>
			</li>
		</ul>
	</div>

	<div class="grey-container shortcut-wrapper">
		<?php echo $this->session->flashdata('msg')?>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-bar-chart-o"></i>
			</span>
			<span class="text">Dashboard</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-envelope-o"></i>
				<span class="shortcut-alert">
					5
				</span>	
			</span>
			<span class="text">Messages</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-user"></i>
			</span>
			<span class="text">New Users</span>
		</a>
		<a href="#" class="shortcut-link">
			<span class="shortcut-icon">
				<i class="fa fa-cog"></i></span>
				<span class="text">Setting</span>
			</a>
		</div>

		<div class="padding-md">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="panel panel-default panel-stat1 bg-success">
						<div class="panel-body">
							<div class="value">99</div>
							<div class="title">
								<i class="fa fa-usd"></i>
								<span class="m-left-xs">Sales</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="panel panel-default panel-stat2 bg-warning">
						<div class="panel-body">
							<span class="stat-icon">
								<i class="fa fa-bar-chart-o"></i>
							</span>
							<div class="pull-right text-right">
								<div class="value">58</div>
								<div class="title">Visits</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="panel panel-default panel-stat2 bg-danger">
						<div class="panel-body">
							<span class="stat-icon">
								<i class="fa fa-shopping-cart"></i>
							</span>
							<div class="pull-right text-right">
								<div class="value">88</div>
								<div class="title">Orders</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="panel panel-default panel-stat2">
						<div class="panel-body">
							<span class="stat-icon">
								<i class="fa fa-user"></i>
							</span>
							<div class="pull-right text-right">
								<div class="value">45</div>
								<div class="title">Members</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>