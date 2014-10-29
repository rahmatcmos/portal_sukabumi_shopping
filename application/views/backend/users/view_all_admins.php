<script src="<?php echo base_url('asset/backend/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $("#publish").click(function(){
    var ids=new Array()
     var a=0;
     $(".checkid:checked").each(function(){
      ids +=$(this).val()+',';
      a++;
     })
     if(a>0){
       if(confirm("Are you sure want to publish?")){
        $.post("<?php echo base_url(); ?>backend/users/publish_admins/yes/",{checkid:ids});
        setTimeout(function(){ location.reload(); $('.checkid').removeAttr('checked'); }, 1000);
       }
      }else{
      	alert('No data has choosen!');
      }
   });
   $("#unpublish").click(function(){
    var ids=new Array()
     var a=0;
     $(".checkid:checked").each(function(){
      ids +=$(this).val()+',';
      a++;
     })
     if(a>0){
       if(confirm("Are you sure want to unpublish?")){
        $.post("<?php echo base_url(); ?>backend/users/publish_admins/no/",{checkid:ids});
        setTimeout(function(){ location.reload(); $('.checkid').removeAttr('checked'); }, 1000);
       }
      }else{
      alert('No data has choosen!');
      }
   });
   $("#delete").click(function(){
    var ids=new Array()
     var a=0;
     $(".checkid:checked").each(function(){
      ids +=$(this).val()+',';
      a++;
     })
     if(a>0){
       if(confirm("Are you sure want to Delete?")){
        $.post("<?php echo base_url(); ?>backend/users/delete_data_admins/all/",{checkid:ids});
        setTimeout(function(){ location.reload(); $('.checkid').removeAttr('checked'); }, 1000);
       }
      }else{
      alert('No data has choosen!');
      }
    });
  });
</script>

<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#"> Home</a></li>
			<li>Admins</li>	 
			<li class="active">Data Users Admins</li>	 
		</ul>
	</div>
	<div class="padding-md">
		<div class="panel panel-default table-responsive">
			<div class="panel-heading">
				Data Users Admin
				<div class="btn-group pull-right">
					<a href="<?php echo base_url('backend/users/add_admins') ?>"><button class="btn btn-info">Create New</button></a>
					<a href="#" id="publish"><button class="btn btn-info">Publish</button></a>
					<a href="#" id="unpublish"><button class="btn btn-info">Unpublish</button></a>
					<a href="#" id="delete"><button class="btn btn-info">Delete</button></a>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
					<div class="col-md-2 col-sm-3">
						<span class="label label-success pull-right"><div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div></span>
					</div>
					<div class="col-md-2 col-sm-3">
						<select id="columns" onchange="sorter.search('query')" class="form-control"></select>
					</div>
					<div class="col-md-2 col-sm-3">
						<select id="tablelocation" class="form-control" onchange="sorter.size(this.value)">
							<option value="5">5</option>
							<option value="10" selected="selected">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-3">
						<input type="text" id="query" onkeyup="sorter.search('query')" class="form-control" placeholder="Masukan Kata Pencarian">
					</div>
				</div>
			</div>
			<div class="padding-md clearfix">
			<table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover tinytable">
				<thead>
					<tr>
						<th><h5></h5></th>
						<th class="nosort"><h5>No</h5></th>
						<th><h5>Username</h5></th>
						<th><h5>Email</h5></th>
						<th><h5>Status</h5></th>
						<th><h5>Action</h5></th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($users->num_rows()>0){
							foreach ($users->result() as $key => $row) {
								$id = $row->id_users;
					?>
					<tr>
						<td><label class="label-checkbox"><input type="checkbox" name="checkid[]" class='checkid chk-row' value="<?php echo $id; ?>"><span class="custom-checkbox"></span></label></td>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $row->username ?></td>
						<td><?php echo $row->email ?></td>
						<td>
							<?php if($row->active==0){ ?>
                <a href="<?php echo base_url().'backend/users/publish_admins/yes/'.$id; ?>" onclick="return confirm('Do you want to active this Article?');"><span class="label label-danger">Pending</span></a>
              <?php }else{ ?>
                <a href="<?php echo base_url().'backend/users/publish_admins/no/'.$id; ?>" onclick="return confirm('Do you want to nonactive this Article');"><span class="label label-info">Active</span></a>                    
              <?php } ?>
						</td>
						<td>
							<a href="<?php echo base_url().'backend/users/update_admins/'.$id; ?>"><button class="btn btn-warning btn-xs">Edit</button></a>
							<a href="<?php echo base_url().'backend/users/delete_data_admins/'.$id; ?>" onclick="return confirm('Do you want to delete this row?')"><button class="btn btn-danger btn-xs">Delete</button></a>
						</td>
					</tr>
					 <?php } }else{ echo information('Data Belum Ada!'); } ?>
				</tbody>
			</table>
			<div class="br5"></div>
			<div id="tablefooter">
				<div id="tablenav">
					<div class="row">
						<div class="col-md-10 col-xs-3">
							<img src="<?php echo base_url('asset/backend/images/first.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
							<img src="<?php echo base_url('asset/backend/images/previous.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
							<img src="<?php echo base_url('asset/backend/images/next.gif'); ?>" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
							<img src="<?php echo base_url('asset/backend/images/last.gif'); ?>" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
						</div>
						<div class="col-md-1 col-xs-3">
							<select class="form-control" id="pagedropdown"></select>
						</div>
						<div class="col-md-1 col-xs-3">
							<a class="button blue" href="javascript:sorter.showall()"><div class="btn btn-info btn-xs">View all</div></a>
						</div>
					</div>
					<div class="br5"></div>
					<div class="br5"></div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>