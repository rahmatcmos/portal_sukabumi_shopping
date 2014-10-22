<div id="main-container">
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Simple Table
					</div>
					<div class="panel-body">
						Some default panel content here.
					</div>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Task</th>
								<th>Progress</th>
								<th></th>
								<th>Time</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Bug Fixes</td>
								<td>
									<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
										<div class="progress-bar" style="width: 45%">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
								</td>
								<td>45%</td>
								<td><span class="badge badge-warning">2hr</span></td>
							</tr>
							<tr>
								<td>Mobile Development</td>
								<td>
									<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
										<div class="progress-bar progress-bar-success" style="width: 61%">
											<span class="sr-only">61% Complete</span>
										</div>
									</div>
								</td>
								<td>61%</td>
								<td><span class="badge badge-warning">1hr</span></td>
							</tr>
							<tr>
								<td>Unit Tesing</td>
								<td>
									<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
										<div class="progress-bar progress-bar-danger" style="width: 97%">
											<span class="sr-only">97% Complete</span>
										</div>
									</div>
								</td>
								<td>97%</td>
								<td><span class="badge badge-warning">5m</span></td>
							</tr>
							<tr>
								<td>New Frontend Layout</td>
								<td>
									<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
										<div class="progress-bar progress-bar-warning" style="width: 18%">
											<span class="sr-only">18% Complete</span>
										</div>
									</div>
								</td>
								<td>18%</td>
								<td><span class="badge badge-warning">12hr</span></td>
							</tr>
						</tbody>
					</table>
				</div><!-- /panel -->
			</div><!-- /.col -->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Bordered Table
					</div>
					<div class="panel-body">
						<span>Total User</span><span class="badge m-left-xs">365</span>
						<span>Approved</span><span class="badge badge-success m-left-xs">321</span>
						<span>Pending</span><span class="badge badge-warning m-left-xs">37</span>
						<span>Banned</span><span class="badge badge-danger m-left-xs">7</span>
					</div>
					<table class="table table-bordered table-condensed table-hover table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									3242
								</td>
								<td>
									John Doe
								</td>
								<td>
									Oct 08,2013
								</td>
								<td>
									<span class="label label-warning">Pending</span>
								</td>
							</tr>
							<tr>
								<td>
									3243
								</td>
								<td>
									Jahn Doe
								</td>
								<td>
									Oct 07,2013
								</td>
								<td>
									<span class="label label-warning">Pending</span>
								</td>
							</tr>
							<tr>
								<td>
									3244
								</td>
								<td>
									Bill Doe
								</td>
								<td>
									29 Sep,2013
								</td>
								<td>
									<span class="label label-success">Approved</span>
								</td>
							</tr>
							<tr>
								<td>
									3245
								</td>
								<td>
									Kate Doe
								</td>
								<td>
									19 July,2013
								</td>
								<td>
									<span class="label label-success">Approved</span>
								</td>
							</tr>
							<tr>
								<td>
									3246
								</td>
								<td>
									Jame Doe
								</td>
								<td>
									18 July,2013
								</td>
								<td>
									<span class="label label-danger">Banned</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!-- /panel -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Responsive Table
				<span class="label label-info pull-right">790 Items</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<select class="input-sm form-control inline" style="width:130px;"> 
							<option value="0">All</option> 
							<option value="1">Men</option> 
							<option value="2">Women</option> 
							<option value="3">Accessary</option> 
						</select>
						<a class="btn btn-default btn-sm">Apply</a>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
			<table class="table table-striped" id="responsiveTable">
				<thead>
					<tr>
						<th>
							<label class="label-checkbox">
								<input type="checkbox" id="chk-all">
								<span class="custom-checkbox"></span>
							</label>
						</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Sales</th>
						<th>Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Leather Bag</td>
						<td>$89</td>
						<td>30</td>
						<td>187</td>
						<td>Oct 08,2013</td>
						<td><span class="label label-success">In Stock</span></td>
					</tr>
					<tr>
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Brown Sunglasses <span class="label label-success m-left-xs">Best Seller</span> </td>
						<td>$120</td>
						<td>0</td>
						<td>861</td>
						<td>Oct 07,2013</td>
						<td><span class="label label-danger">Sold Out</span></td>
					</tr>
					<tr>
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Casual Boots</td>
						<td>$99</td>
						<td>100</td>
						<td>12</td>
						<td>Oct 06,2013</td>
						<td><span class="label label-success">In Stock</span></td>
					</tr>
					<tr>
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Lambskin Sport Coat</td>
						<td>$4000</td>
						<td>7</td>
						<td>41</td>
						<td>Oct 06,2013</td>
						<td><span class="label label-success">In Stock</span></td>
					</tr>
					<tr>
						<td>
							<label class="label-checkbox">
								<input type="checkbox" class="chk-row">
								<span class="custom-checkbox"></span>
							</label>
						</td>
						<td>Summer Dress</td>
						<td>$310</td>
						<td>25</td>
						<td>39</td>
						<td>Oct 05,2013</td>
						<td><span class="label label-success">In Stock</span></td>
					</tr>
				</tbody>
			</table>
			<div class="panel-footer clearfix">
				<ul class="pagination pagination-xs m-top-none pull-right">
					<li class="disabled"><a href="#">Previous</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div><!-- /panel -->
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Data Table
				<span class="label label-info pull-right">790 Items</span>
			</div>
			<div class="padding-md clearfix">
				<table class="table table-striped" id="dataTable">
					<thead>
						<tr>
							<th>
								<label class="label-checkbox">
									<input type="checkbox" id="chk-all">
									<span class="custom-checkbox"></span>
								</label>
							</th>
							<th>No</th>
							<th>Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Sales</th>
							<th>Date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1001</td>
							<td>Leather Bag</td>
							<td>$89</td>
							<td>30</td>
							<td>187</td>
							<td>Oct 08,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1002</td>
							<td>Brown Sunglasses <span class="label label-success m-left-xs">Best Seller</span> </td>
							<td>$120</td>
							<td>0</td>
							<td>861</td>
							<td>Oct 07,2013</td>
							<td><span class="label label-danger">Sold Out</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1003</td>
							<td>Casual Boots</td>
							<td>$99</td>
							<td>100</td>
							<td>12</td>
							<td>Oct 06,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1004</td>
							<td>Lambskin Sport Coat</td>
							<td>$4000</td>
							<td>7</td>
							<td>41</td>
							<td>Oct 06,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1005</td>
							<td>Summer Dress</td>
							<td>$310</td>
							<td>25</td>
							<td>39</td>
							<td>Oct 05,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1006</td>
							<td>Duffle Coat</td>
							<td>$80</td>
							<td>0</td>
							<td>20</td>
							<td>Sep 30,2013</td>
							<td><span class="label label-danger">Sold out</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1007</td>
							<td>Universal Camera Case</td>
							<td>$35</td>
							<td>30</td>
							<td>3</td>
							<td>Sep 29,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1008</td>
							<td>Leopard Rose Dress</td>
							<td>$1500</td>
							<td>10</td>
							<td>1</td>
							<td>Sep 27,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1009</td>
							<td>Casual stripe</td>
							<td>$50</td>
							<td>30</td>
							<td>25</td>
							<td>Sep 27,2013</td>
							<td><span class="label label-success">Sold out</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1010</td>
							<td>Italian shirt</td>
							<td>$70</td>
							<td>40</td>
							<td>4</td>
							<td>Sep 27,2013</td>
							<td><span class="label label-info">Promotion</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1011</td>
							<td>Iphone 5</td>
							<td>$400</td>
							<td>300</td>
							<td>152</td>
							<td>Sep 27,2013</td>
							<td><span class="label label-danger">In stock</span></td>
						</tr>
						<tr>
							<td>
								<label class="label-checkbox">
									<input type="checkbox" class="chk-row">
									<span class="custom-checkbox"></span>
								</label>
							</td>
							<td>#1012</td>
							<td>Ipad</td>
							<td>$350</td>
							<td>46</td>
							<td>103</td>
							<td>Sep 25,2013</td>
							<td><span class="label label-success">In Stock</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>