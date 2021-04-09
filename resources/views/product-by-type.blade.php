@extends('layouts.layout')
@section('content')
	
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($products as $item)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="http://127.0.0.1:8000/products"><img src="{{asset('image/product/' . $item->image)}}" alt="ảnh thùng pc"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$item->name}}</p>
											<p class="single-item-price">
												<span>{{$item->unit_price}}vnd</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="http://127.0.0.1:8000/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="http://127.0.0.1:8000/product">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						
					</div>
				</div> <!-- end section with sidebar and main content -->

			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection