<section id="property-carousel">
	<div class="container-fluid">
		<div class="row">
			<div class="property-main-slider">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1"></li>
							<li data-target="#carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo base_url('asset/frontend/img/home-banners1.png'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Temukan Barang Anda Disini</a>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url('asset/frontend/img/home-banners3.png'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Cepat, Hemat, Terpercaya</a>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url('asset/frontend/img/bg-01.jpg'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Situs Jual Barang Baru dan Bekas no. 1</a>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left carousel-40"></span>
						</a>
						<a class="right carousel-control" href="#carousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right carousel-40"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="property-search">
	<div class="container">
		<div class="row">
			<div class="property-list-search shadow-bawah-navbar">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="inner">
						<ul class="nav nav-tabs nav-tabs-search">
							<li class="active">
								<a href="#baru" data-toggle="tab">Barang Baru</a>
							</li>
							<li>
								<a href="#bekas" data-toggle="tab">Barang Bekas</a>
							</li>
						</ul>
						<div class="tab-content tab-content-search">
							<div class="tab-pane active" id="baru">
								<form class="form-inline form-search clearfix" role="form">
									<div class="form-group col-sm-6 col-lg-2">
										<label for="">Kategori Barang Baru</label>
										<select class="form-control input-large-search">
											<option>Kategori Barang</option>
											<option>Mobil</option>
											<option>Motor</option>
											<option>Perlengkapan Rumah Tangga</option>
											<option>Elektronik & Gadget</option>
											<option>Properti</option>
										</select>	
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Kota/Kabupaten</label>
										<select class="form-control input-large-search">
											<option>Cari Daerah Kota/Kabupaten</option>
											<option>Kota Sukabumi</option>
											<option>Kabupaten Sukabumi</option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Kecamatan</label>
										<select class="form-control input-large-search" data-bootstrap="tooltip" data-original-title="Pilih Lokasi Kecamatan">
											<option>Cari Daerah Kecamatan</option>
											<option>Kecamatan Gunung Puyuh</option>
											<option>Kecamatan Cibeureum</option>
											<option>Kecamatan Lembur Situ</option>
											<option>Kecamatan Baros</option>
											<option>Kecamatan Warudoyong</option>
											<option>Kecamatan Cikole</option>
											<option>Kecamatan Citamiang</option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Keyword Search</label>
										<input type="text" class="form-control input-large-search" placeholder="Masukan Kata Pencarian">
									</div>
									<div class="form-group col-sm-2 col-lg-1">
										<button type="submit" class="btn btn-flat-asphalt btn-search2">SEARCH</button>
									</div>
								</form>
							</div>

							<div class="tab-pane" id="bekas">
								<form class="form-inline form-search clearfix" role="form">
									<div class="form-group col-sm-6 col-lg-2">
										<label for="">Kategori Barang Bekas</label>
										<select class="form-control input-large-search">
											<option>Kategori Barang</option>
											<option>Mobil</option>
											<option>Motor</option>
											<option>Perlengkapan Rumah Tangga</option>
											<option>Elektronik & Gadget</option>
											<option>Properti</option>
										</select>	
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Kota/Kabupaten</label>
										<select class="form-control input-large-search">
											<option>Cari Daerah Kota/Kabupaten</option>
											<option>Kota Sukabumi</option>
											<option>Kabupaten Sukabumi</option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Kecamatan</label>
										<select class="form-control input-large-search" data-bootstrap="tooltip" data-original-title="Pilih Lokasi Kecamatan">
											<option>Cari Daerah Kecamatan</option>
											<option>Kecamatan Gunung Puyuh</option>
											<option>Kecamatan Cibeureum</option>
											<option>Kecamatan Lembur Situ</option>
											<option>Kecamatan Baros</option>
											<option>Kecamatan Warudoyong</option>
											<option>Kecamatan Cikole</option>
											<option>Kecamatan Citamiang</option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-lg-3">
										<label for="">Kata Pencarian</label>
										<input type="text" class="form-control input-large-search" placeholder="Masukan Kata Pencarian">
									</div>
									<div class="form-group col-sm-2 col-lg-1">
										<button type="submit" class="btn btn-flat-asphalt btn-search2">SEARCH</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>