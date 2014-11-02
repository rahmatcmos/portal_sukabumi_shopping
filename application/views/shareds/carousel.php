<script src="<?php echo base_url('asset/frontend/js/jquery-2.0.0.js') ?>"></script>
<script type="text/javascript">
	function get_agency(nilai){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('home/Get_Agency');?>",
			data:"key="+nilai,
			success: function(data){
				$("#agency").html(data);
			},

			error:function(XMLHttpRequest){
				alert(XMLHttpRequest.responseText);
			}

		})

	};
</script>

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
									<div class="form-group col-sm-3 col-lg-2">
										<label for="">Kategori barang baru</label>
										<select class="form-control">
											<option>Pilih kategori ...</option>
											<option>Mobil</option>
											<option>Motor</option>
											<option>Property</option>
											<option>Elektronik dan Gadget</option>
											<option>Makanan dan Minuman</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-lg-3">
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
									<div class="form-group col-sm-3 col-lg-3">
										<label for="">Kecamatan</label>
										<select class="form-control" name="agency_name" id="agency">
											<option>Pilih Daerah ...</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-lg-3">
										<label for="">Kata Pencarian</label>
										<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan Kata Pencarian">
									</div>
									<div class="form-group col-sm-2 col-lg-1">
										<button type="submit" class="btn btn-flat-asphalt btn-search2">Cari</button>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="bekas">
								<form class="form-inline form-search clearfix" role="form">
									<div class="form-group col-sm-3 col-lg-2">
										<label for="">Kategori barang bekas</label>
										<select class="form-control">
											<option>Pilih kategori ...</option>
											<option>Mobil</option>
											<option>Motor</option>
											<option>Property</option>
											<option>Elektronik dan Gadget</option>
											<option>Makanan dan Minuman</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-lg-3">
										<label for="">Kota/Kabupaten</label>
										<select name="city" id="city" class="form-control" onChange="get_agency(this.value);">
											<option value="">Pilih Daerah ...</option>
											<?php  
												foreach ($city as $rows) {
											?>
											<option value="<?php echo $rows->id_search_city; ?>"><?php echo $rows->city_name; ?></option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="form-group col-sm-3 col-lg-3">
										<label for="">Kecamatan</label>
										<select class="form-control" name="agency_name" id="agency">
											<option>Pilih Daerah ...</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-lg-3">
										<label for="">Kata Pencarian</label>
										<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan Kata Pencarian">
									</div>
									<div class="form-group col-sm-2 col-lg-1">
										<button type="submit" class="btn btn-flat-asphalt btn-search2">Cari</button>
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

<section class="property-search-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				Apa itu Sukabumi shopping?
				<div class="br10"></div>
				sukabumishopping.com merupakan situs online classified terbesar di Kota Sukabumi Jawa barat. Sukabumi shopping menyediakan media yang mudah, cepat dan gratis bagi para penjual untuk memasang iklan dan sekaligus bagi pembeli untuk mencari beragam produk barang bekas dan barang baru untuk kebutuhan sehari-hari.
			</div>
		</div>
	</div>
</section>