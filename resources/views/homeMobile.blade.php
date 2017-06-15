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
						<div><a href="{{ APITerm::getUrlByID(3) }}"><img src="{{ asset('public/css/mobile/imghome/home-10.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(3) }}">Trĩ nội</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(2) }}"><img src="{{ asset('public/css/mobile/imghome/home-11.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(2) }}">Trĩ ngoại</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(4) }}"><img src="{{ asset('public/css/mobile/imghome/home-12.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(4) }}">Trĩ hỗn hợp</a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="{{ APITerm::getUrlByID(13) }}"><img src="{{ asset('public/css/mobile/imghome/home-13.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(13) }}">Nứt kẽ hậu môn</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(14) }}"><img src="{{ asset('public/css/mobile/imghome/home-14.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(14) }}">Sa hậu môn</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(8) }}"><img src="{{ asset('public/css/mobile/imghome/home-15.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(8) }}">Polyp hậu môn</a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="{{ APITerm::getUrlByID(12) }}"><img src="{{ asset('public/css/mobile/imghome/home-16.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(12) }}">Rò hậu môn </a></div>
					</td>
					<td>
						<div><a href="#"><img src="{{ asset('public/css/mobile/imghome/home-17.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bệnh khác</a></div>
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
						<div><a href="{{ APITerm::getUrlByID(16) }}"><img src="{{ asset('public/css/mobile/imghome/home-18.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(16) }}">Đi ngoài ra máu</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(6) }}"><img src="{{ asset('public/css/mobile/imghome/home-19.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(6) }}">Áp xe hậu môn</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(7) }}"><img src="{{ asset('public/css/mobile/imghome/home-20.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(7) }}">Ngứa hậu môn</a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="{{ APITerm::getUrlByID(10) }}"><img src="{{ asset('public/css/mobile/imghome/home-21.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(10) }}">Hậu môn có vật thể lạ</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(9) }}"><img src="{{ asset('public/css/mobile/imghome/home-22.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(9) }}">Đau hậu môn</a></div>
					</td>
					<td>
						<div><a href="{{ APITerm::getUrlByID(17) }}"><img src="{{ asset('public/css/mobile/imghome/home-23.png') }}" alt="" class="img-responsive"></a></div>
						<div class="text-center"><a href="{{ APITerm::getUrlByID(17) }}">Táo bón</a></div>
					</td>
				</tr>
			</table>
		</div>
		<div class="row3">
			<div class="title text-uppercase">
				<span class="">Câu hỏi thường gặp</span>
			</div>
			<div class="dis-table width-100">
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Hình ảnh triệu chứng bệnh trĩ
	            </a>
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Đau hậu môn
	            </a>
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Ngứa hậu môn
	            </a>
	        </div>
	        <div class="dis-table width-100">
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Đi ngoài ra máu <br>do nguyên nhân nào  
	            </a>
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	               Táo bón 
	            </a>
	        </div>
	        <div class="dis-table width-100">
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Gói dài hậu môn
	            </a>
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
	                Cách điều trị bệnh trĩ 
	            </a>
	            <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
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