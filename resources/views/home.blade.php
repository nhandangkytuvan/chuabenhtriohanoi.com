@extends('layouts.desktop')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('banner')
	@include('layouts.bannerDesktop')
@endsection('banner')
@section('menu')
	@include('layouts.menuDesktop')
@endsection('menu')
@section('content')
	<div class="row1">
		<div class="container">
			<div class="items">
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg1">
							<a href="#">chuyên khoa trĩ</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Bệnh trĩ</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ nội</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg2">
							<a href="#">bệnh quanh hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Bệnh trĩ</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ nội</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg3">
							<a href="#">chấn thương hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Bệnh trĩ</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ nội</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg4">
							<a href="#">biểu hiện thường gặp</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Bệnh trĩ</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ nội</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row2">
		<div class="container">
			<table class="width-100">
				<tr>
					<td>
						<span class="text-uppercase">tìm kiếm</span>
						<input type="text">
						<button><i class="fa fa-search" aria-hidden="true"></i></button>
					</td>
					<td class="text-right">
						<span class="text-uppercase">từ khóa hót :</span>
						<span> đi ngoài ra máu  ngứa hậu môn  trĩ nội  trĩ ngoại  bệnh xung quanh hậu môn  nguyên nhân dẫn đến bệnh trĩ</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row3">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><img src="{{ asset('public/css/desktop/imghome/home-9.png') }}" alt="" class="center-block"></div>
				</div>
				<div class="flex1col2">
					<div class="tabs">
						<div class="flex flex2 justify-content-between">
							<div class="flex2col1 active">
								<table>
									<tr>
										<td><i class="bg bg1 active"></i></td>
										<td>Lượt kích nhiều</td>
									</tr>
								</table>
							</div>
							<div class="flex2col1">
								<table>
									<tr>
										<td><i class="bg bg2"></i></td>
										<td>Kỹ thuật chuẩn đoán</td>
									</tr>
								</table>
							</div>
							<div class="flex2col1">
								<table>
									<tr>
										<td><i class="bg bg3"></i></td>
										<td>Chia sẻ nhiều</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="img1">
						<img src="{{ asset('public/css/desktop/imghome/home-11.png') }}" alt="" class="center-block">
					</div>
					<div class="posts">
						<div class="post-first">
							<div class="name text-uppercase text-center">Bệnh trĩ là gì?</div>
							<div class="des1 text-justify">
								Bệnh trĩ hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những ... <a href="#">Chi tiết</a>
							</div>
						</div>
						<table class="width-100">
							<tr>
								<td>[ Click nhiều ]</td>
								<td><a href="#">Nguyên nhân bệnh trĩ</a></td>
							</tr>
							<tr>
								<td>[ Click nhiều ]</td>
								<td><a href="#">Nguyên nhân bệnh trĩ</a></td>
							</tr>
							<tr>
								<td>[ Click nhiều ]</td>
								<td><a href="#">Nguyên nhân bệnh trĩ</a></td>
							</tr>
							<tr>
								<td>[ Click nhiều ]</td>
								<td><a href="#">Nguyên nhân bệnh trĩ</a></td>
							</tr>
							<tr>
								<td>[ Click nhiều ]</td>
								<td><a href="#">Nguyên nhân bệnh trĩ</a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col3">
					<div><img src="{{ asset('public/css/desktop/imghome/home-12.png') }}" alt="" class="center-block"></div>
					<div class="des1 text-justify">
						Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao ... <a href="#">tìm hiểu thêm</a>
					</div>
					<div class="bg">
						<table>
							<tr>
								<td><img src="{{ asset('public/css/desktop/imghome/home-13.png') }}" alt=""></td>
								<td class="text-uppercase">Tìm hiểu bệnh tình nhanh chóng</td>
							</tr>
						</table>
					</div>
					<table class="footer">
						<tr>
							<td><i class="bg1"></i></td>
							<td><a href="#">Chuyên gia giải đáp </a></td>
							<td><i class="bg2"></i></td>
							<td>Hỏi đáp trực tuyến</td>
						</tr>
						<tr>
							<td><i class="bg3"></i></td>
							<td><a href="#">Điều trị cần biết </a></td>
							<td><i class="bg4"></i></td>
							<td>Điện thoại miễn phí</td>
						</tr>
						<tr>
							<td><i class="bg5"></i></td>
							<td><a href="#">Đăng ký đặt hẹn</a></td>
							<td><i class="bg6"></i></td>
							<td>Chuyên gia tư vấn</td>
						</tr>
						<tr>
							<td><i class="bg7"></i></td>
							<td><a href="#">Ý kiến khiếu nại</a></td>
							<td><i class="bg8"></i></td>
							<td>Chỉ đường</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection('content')
