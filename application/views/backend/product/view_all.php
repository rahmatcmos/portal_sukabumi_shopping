<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#"> Home</a></li>
			<li>Admins</li>	 
			<li class="active">Data Product</li>	 
		</ul>
	</div>
	<div class="padding-md">
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Data Admin
				<span class="label label-success pull-right"><div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div></span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2 col-sm-4">
						<a href="<?php echo base_url('backend/users/add') ?>"><button class="btn btn-info btn-sm">Create New</button></a>
					</div>
					<div class="col-md-2 col-sm-4">
						<select id="columns" onchange="sorter.search('query')" class="form-control"></select>
					</div>
					<div class="col-md-3 col-sm-4">
						<input type="text" id="query" onkeyup="sorter.search('query')" class="form-control" placeholder="Kata Pencarian">
					</div>
				</div>
			</div>
			<table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover tinytable">
				<thead>
					<tr>
						<th class="nosort"><h5>ID</h5></th>
						<th><h5>Name</h5></th>
						<th><h5>Phone</h5></th>
						<th><h5>Email</h5></th>
						<th><h5>Birthdate</h5></th>
						<th><h5>Last Access</h5></th>
						<th><h5>Rating</h5></th>
						<th><h5>Done</h5></th>
						<th><h5>Salary</h5></th>
						<th><h5>Score</h5></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td class="name">Ezekiel Hart</td>
						<td>(627) 536-4760</td>
						<td><a href="#" class="button-email" title="tortor@est.ca">tortor@est.ca</a></td>
						<td>12/02/1962</td>
						<td>March 26, 2009</td>
						<td>-7</td>
						<td>7%</td>
						<td>$73,229</td>
						<td>6.9</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jaquelyn Pace</td>
						<td>(921) 943-5780</td>
						<td><a href="#" class="button-email" title="in@elementum.org">in@elementum.org</a></td>
						<td>06/03/1957</td>
						<td>October 20, 2006</td>
						<td>-7</td>
						<td>33%</td>
						<td>$130,752</td>
						<td>4.9</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Lois Pickett</td>
						<td>(835) 361-5993</td>
						<td><a href="#" class="button-email" title="arcu.ac@disse.ca">arcu.ac@disse.ca</a></td>
						<td>10/15/1983</td>
						<td>June 01, 1999</td>
						<td>4</td>
						<td>44%</td>
						<td>$48,684</td>
						<td>5.5</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Keane Raymond</td>
						<td>(605) 803-1561</td>
						<td><a href="#" class="button-email" title="at.Nunc@ipsum.com">at.Nunc@ipsum.com</a></td>
						<td>07/30/1982</td>
						<td>July 24, 1996</td>
						<td>5</td>
						<td>20%</td>
						<td>$7,023</td>
						<td>9.5</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Porter Thomas</td>
						<td>(666) 569-9894</td>
						<td><a href="#" class="button-email" title="non@Proin.ca">non@Proin.ca</a></td>
						<td>09/27/1986</td>
						<td>December 05, 2007</td>
						<td>1</td>
						<td>66%</td>
						<td>$69,875</td>
						<td>0.9</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Imani Murphy</td>
						<td>(771) 294-6690</td>
						<td><a href="#" class="button-email" title="Ae.sed@elit.ca">Ae.sed@elit.ca</a></td>
						<td>10/23/1970</td>
						<td>December 08, 1996</td>
						<td>-1</td>
						<td>30%</td>
						<td>$113,763</td>
						<td>4.9</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Zachery Guthrie</td>
						<td>(851) 784-4129</td>
						<td><a href="#" class="button-email" title="nunulla@vel.com">nunulla@vel.com</a></td>
						<td>12/22/1972</td>
						<td>September 20, 2002</td>
						<td>-5</td>
						<td>24%</td>
						<td>$130,248</td>
						<td>6.9</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Harper Bowen</td>
						<td>(810) 652-6704</td>
						<td><a href="#" class="button-email" title="dis@duinec.ca">dis@duinec.ca</a></td>
						<td>10/26/1973</td>
						<td>May 29, 1996</td>
						<td>5</td>
						<td>49%</td>
						<td>$73,197</td>
						<td>4.5</td>
					</tr>
				</tbody>
			</table>
			<div class="br5"></div>
			<div id="tablefooter">
				<div id="tablenav">
					<div class="row">
						<div class="col-sm-3 col-sm-3">
							<img src="<?php echo base_url('asset/backend/images/first.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
							<img src="<?php echo base_url('asset/backend/images/previous.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
							<img src="<?php echo base_url('asset/backend/images/next.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
							<img src="<?php echo base_url('asset/backend/images/last.gif'); ?>" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
						</div>
						<div class="col-sm-3 col-sm-3">
							<select class="form-control" id="pagedropdown"></select>
						</div>
						<div class="col-sm-3 col-sm-3">
							<div class="btn btn-info btn-sm"><a class="button blue" href="javascript:sorter.showall()">view all</a></div>
						</div>
					</div>
				</div>
					
				<div class="col-sm-3 col-sm-3">
					<select id="tablelocation" class="form-control" onchange="sorter.size(this.value)">
						<option value="5">5</option>
						<option value="10" selected="selected">10</option>
						<option value="20">20</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
					<span class="txt-page">Entries Per Page</span>
				</div>
			</div>
		</div>
	</div>
</div>