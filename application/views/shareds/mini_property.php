<section id="mini-property-search">
	<div class="container">
		<div class="row">
			<div class="property-list-search mini">
				<div class="col-sm-12 col-md-12">
					<div class="inner">
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

						<form class="form-inline form-search clearfix" role="form">
							<div class="form-group col-sm-3 col-lg-2">
								<label for="">Kategori barang baru</label>
								<select class="form-control">
									<option>Pilih kategori ...</option>
									<option>Mobil</option>
									<option>Motor</option>
									<option>Property</option>
									<option>Elektronik</option>
									<option>Perlengkapan & elektronik rumah tangga</option>
									<option>Fashion & Accesorris</option>
									<option>Perlengkapan bayi dan anak</option>
									<option>Hobi & Olahraga</option>
									<option>Hewan peliharaan</option>
									<option>Bisnis ke bisnis</option>
									<option>Pekerjaan dan jasa</option>
									<option>Makanan dan Minuman</option>
								</select>
							</div>
							<div class="form-group col-sm-3 col-lg-3">
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
							<div class="form-group col-sm-3 col-lg-3">
								<label for="">Kecamatan</label>
								<select class="form-control" name="name" id="sub_district">
									<option>Pilih Daerah ...</option>
								</select>
							</div>
							<div class="form-group col-sm-3 col-lg-3">
								<label for="">Kata Pencarian</label>
								<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan Kata Pencarian">
							</div>
							<div class="form-group col-sm-1 col-lg-1 margin-top">
								<button type="submit" class="btn btn-flat-asphalt btn-search2">Cari</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>