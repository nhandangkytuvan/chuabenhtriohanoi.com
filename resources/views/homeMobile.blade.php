@extends('layouts.mobile')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
	<div class="container home">
		<div class="row1">
			<div class="border">
				<span class="table-cell"><img src="{{ asset('public/css/mobile/imghome/home-9.png') }}" alt="" class=""></span>
				<span class="text-uppercase table-cell">Các bệnh trực tràng thường gặp</span>
			</div>
		</div>
		<div class="row2">
			<table class="width-100">
				<tr>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-10.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Trĩ nội</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-11.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Trĩ ngoại</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-12.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Trĩ hỗn hợp</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-13.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Nứt kẽ hậu môn</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-14.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Sa hậu môn</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-15.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Polyp hậu môn</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-16.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Rò hậu môn </div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-17.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Bệnh khác</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="row1">
			<div class="border">
				<span class="table-cell"><img src="{{ asset('public/css/mobile/imghome/home-9.png') }}" alt="" class=""></span>
				<span class="text-uppercase table-cell">Triệu chứng thường gặp của bệnh hậu môn trực tràng</span>
			</div>
		</div>
		<div class="row2">
			<table class="width-100">
				<tr>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-18.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Đi ngoài ra máu</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-19.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Áp xe hậu môn</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-20.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Ngứa hậu môn</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-21.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Hậu môn có vật thể lạ</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-22.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Đau hậu môn</div>
					</td>
					<td>
						<div><img src="{{ asset('public/css/mobile/imghome/home-23.png') }}" alt="" class="img-responsive"></div>
						<div class="text-center">Táo bón</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="row3">
			<div class="title text-uppercase">
				<span class="">Câu hỏi thường gặp</span>
			</div>
			<div class="dis-table width-100">
	            <a href="#" class="table-cell">
	                Hình ảnh triệu chứng bệnh trĩ
	            </a>
	            <a href="#" class="table-cell">
	                Đau hậu môn
	            </a>
	            <a href="#" class="table-cell">
	                Ngứa hậu môn
	            </a>
	        </div>
	        <div class="dis-table width-100">
	            <a href="#" class="table-cell">
	                Đi ngoài ra máu <br>do nguyên nhân nào  
	            </a>
	            <a href="#" class="table-cell">
	               Táo bón 
	            </a>
	        </div>
	        <div class="dis-table width-100">
	            <a href="#" class="table-cell">
	                Gói dài hậu môn
	            </a>
	            <a href="#" class="table-cell">
	                Cách điều trị bệnh trĩ 
	            </a>
	            <a href="#" class="table-cell">
	                Phòng khám điều trị bệnh trĩ ở Hà Nội
	            </a>
	        </div>
		</div>
		<div class="row4">
			<div class="title text-uppercase">
				<span class="">Tự động đăng ký hẹn nhanh chóng</span>
			</div>
			<div class="bg">
				<form action="#">
					<table class="width-100">
						<tr>
							<td>Tên :</td>
							<td><input type="text" placeholder="Mời nhập họ và tên"></td>
						</tr>
						<tr>
							<td>Số điện thoại :</td>
							<td><input type="text" placeholder="Mời nhập số điện thoại của bạn"></td>
						</tr>
						<tr>
							<td>Ngày tháng :</td>
							<td><input type="text" placeholder="Mời nhập ngày tới khám"></td>
						</tr>
						<tr>
							<td>Loại bệnh :</td>
							<td><input type="text" placeholder="Mời nhập triệu trứng"></td>
						</tr>
					</table>
					<div class="button text-center">
						<button type="submit">Đăng ký</button>
						<button type="reset">Thiết lập lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection('content')