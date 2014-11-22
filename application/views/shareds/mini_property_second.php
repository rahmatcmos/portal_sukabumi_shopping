<script src="<?php echo base_url('asset/frontend/js/jquery-2.0.0.js') ?>"></script>
<script type="text/javascript">
	function get_agency(nilai){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('home/get_sub_district');?>",
			data:"id="+nilai,
			success: function(data){
				$("#sub_district").html(data);
			},

			error:function(XMLHttpRequest){
				alert(XMLHttpRequest.responseText);
			}
		})
	};
</script>

<section id="mini-property-search">
	<div class="container">
		<div class="row">
			<div class="property-list-search mini">
				<div class="col-sm-12 col-md-12">
					<div class="inner">
						<form class="form-inline form-search clearfix" role="form">
							<div class="row">
								<div class="form-group col-md-3">
									<label for="">Kategori barang baru</label>
									<select onchange="optionCheck()" class="form-control" id="populateList">
										<option>Pilih kategori ...</option>
										<option value="car">Mobil</option>
										<option value="bike">Motor</option>
										<option value="property">Property</option>
										<option value="gadget">Elektronik</option>
										<option value="pert">Perlengkapan & elektronik rumah tangga</option>
										<option value="fashion">Fashion & Accesorris</option>
										<option value="baby_children">Perlengkapan bayi dan anak</option>
										<option value="sport">Hobi & Olahraga</option>
										<option value="animal">Hewan peliharaan</option>
										<option value="business">Bisnis ke bisnis</option>
										<option value="services">Pekerjaan dan jasa</option>
										<option value="food">Makanan dan Minuman</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="">Kota/Kabupaten</label>
									<select name="location" id="location" class="form-control" onChange="get_agency(this.value);">
										<option value="">Pilih Daerah ...</option>
										<?php  
											foreach ($location->result() as  $row) {
										?>
										<option value="<?php echo $row->id_location; ?>"><?php echo $row->name; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="">Kecamatan</label>
									<select class="form-control" name="name" id="sub_district">
										<option>Pilih Daerah ...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="">Kata Pencarian</label>
									<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan Kata Pencarian">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>