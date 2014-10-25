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
										<option value="gadget">Elektronik dan Gadget</option>
										<option value="food">Makanan dan Minuman</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="">Kota/Kabupaten</label>
									<select name="city" id="city" class="form-control" onChange="get_agency(this.value);">
										<option value="">Pilih Daerah ...</option>
										<?php  
											foreach ($city as $row) {
										?>
										<option value="<?php echo $row->id_search_city; ?>"><?php echo $row->city_name; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="">Kecamatan</label>
									<select class="form-control" name="agency_name" id="agency">
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