@extends('layouts.layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên hệ với chúng tôi</h2>
					<div class="space20">&nbsp;</div>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani m id est laborum.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email của bạn (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Subject">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Tin nhắn của bạn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi đi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						Đường 3/2, phường 5<br>
						Thành phố Cà Mau <br>
						Việt Nam
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Fanpage</h6>
					<p>
						Liên hệ với Fanpage <br>
						<a href="https://www.facebook.com/C%C3%A0-Mau-Gaming-Gear-109128257927684">https://www.facebook.com/Cà-Mau-Gaming-Gear-109128257927684</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Gmail liên hệ</h6>
					<p>

						<a href="cmgear@gmail.com">cmgear@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection('content')