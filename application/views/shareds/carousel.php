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
							<li data-target="#carousel" data-slide-to="3"></li>
						</ol>
					
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo base_url('asset/frontend/img/home-banners1.jpg'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Temukan Barang Anda Disini</a>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url('asset/frontend/img/home-banners2.jpg'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Cepat, Hemat, Terpercaya</a>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url('asset/frontend/img/home-banners3.jpg'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Cepat, Hemat, Terpercaya</a>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url('asset/frontend/img/home-banners4.jpg'); ?>" alt="...">
								<div class="carousel-caption">
									<a href="#">Situs Jual Barang Baru dan Bekas no. 1</a>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel" data-slide="prev">
							<span class="fa fa-angle-left carousel-40 padding-size-carousel"></span>
						</a>
						<a class="right carousel-control" href="#carousel" data-slide="next">
							<span class="fa fa-angle-right carousel-40 padding-size-carousel"></span>
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
			<div class="col-md-12 padding-170">
			<img src="<?php echo base_url(); ?>/asset/frontend/img/ads_top.png" alt="Ads Top" class="img-thumbnail">
			</div>
		</div>
	</div>
</section>