@extends('layouts.layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{{asset('image/product/' .$product->image)}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$product->name}}</p>
								<p class="single-item-price">
									<span>{{$product->unit_price}} vnđ</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$product->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Color</option>
									<option value="Red">Red</option>
									<option value="Green">Green</option>
									<option value="Yellow">Yellow</option>
									<option value="Black">Black</option>
									<option value="White">White</option>
								</select>
								<select class="wc-select" name="color">
									<option>Qty</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
						{{$product->description}}
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						<div class="row">
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets\dest\picture\sanpham\Asus Tuf Gaming GT501.png" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Asus Tuf Gaming GT501</p>
										<p class="single-item-price">
											<span>2.500.000đ</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets\dest\picture\sanpham\Asus ROG Swift PG43UQ.png" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Asus ROG Swift PG43UQ</p>
										<p class="single-item-price">
											<span>39.990.000đ</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

									<div class="single-item-header">
										<a href="#"><img src="assets\dest\picture\sanpham\ASUS ROG Rapture GT-AC2900.png" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">ASUS ROG Rapture GT-AC2900</p>
										<p class="single-item-price">
											<span class="flash-del">6.200.000đ</span>
											<span class="flash-sale">5.990.000đ</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/AsRock B550 Steel Legend.png" alt=""></a>
									<div class="media-body">
										Mainboard AsRock B550 Steel Legend
										<span class="beta-sales-price">5.000.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/Gigabyte B460M  Aorus Pro.png" alt=""></a>
									<div class="media-body">
										Mainboard Gigabyte B460M  Aorus Pro
										<span class="beta-sales-price">2.600.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/Corsair RM650 80 Gold.png" alt=""></a>
									<div class="media-body">
										Nguồn Corsair RM650 80+ Gold
										<span class="beta-sales-price">2.990.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/Logitech G502 Hero.png" alt=""></a>
									<div class="media-body">
										Chuột Logitech G502 Hero
										<span class="beta-sales-price">980.000đ</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/newest/Razer Mamba Wireless.png" alt=""></a>
									<div class="media-body">
										Chuột Razer Mamba Wireless
										<span class="beta-sales-price">3.990.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/newest/Akko Dragon Ball Z.png" alt=""></a>
									<div class="media-body">
										Bàn phím Akko Dragon Ball Z
										<span class="beta-sales-price">1.790.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/newest/Gigabyte AORUS 1TB NVMe.png" alt=""></a>
									<div class="media-body">
										SSD Gigabyte AORUS 1TB NVMe
										<span class="beta-sales-price">5.200.000đ</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/picture/sanpham/newest/SamSung 980 Pro 1TB NVMe.png" alt=""></a>
									<div class="media-body">
										SSD SamSung 980 Pro 1TB NVMe
										<span class="beta-sales-price">5.700.000đ</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection('content')