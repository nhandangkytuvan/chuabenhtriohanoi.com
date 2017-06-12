@extends('layouts.desktop')
@section('title')
	<title>{{ $term->name }}</title>
@endsection('title')
@section('css')
	<link rel="canonical" href="{{ APITerm::getUrlByObj($term) }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
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
				<div class="item active">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg1">
							<a href="#">chuyên khoa<br>trĩ</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ nội</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg2">
							<a href="#">bệnh quanh<br>hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left" style="vertical-align: top;"><a href="#"><i class="fa fa-circle"></i> Áp xe hậu môn</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Ngứa rát hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Polyp hậu môn</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Đau hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Hậu môn có vật thể lạ</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg3">
							<a href="#">chấn thương<br>hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Rò hậu môn</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Nứt kẽ hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Sa hậu môn</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg4">
							<a href="#">biểu hiện<br>thường gặp</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Đi ngoài ra máu</a></td>
									<td class="text-left"><a href="#"><i class="fa fa-circle"></i> Táo bón</a></td>
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
	<!-- column -->
	<div class="row3">
		<div class="container">
			<i class="fa fa-home"></i>
			<a href="#">Trang chủ</a>
			<span>></span>
			<span>Bệnh trĩ là gì</span>
		</div>
	</div>
	<div class="row4">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="line1">
						<table>
							<tr>
								<td>
									<a href="#"><img src="{{ asset('public/css/desktop/imgterm/term-1.png') }}" alt=""></a>
								</td>
								<td>
									<h1>Bệnh trĩ là gì?</h1>
									<p>
										Bệnh trĩ hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá nhiều, được hình thành do giãn nở quá mức các mạch máu. Vậy nguyên nhân, triệu chứng và cách điều trị  ... <a href="#">Chi tiết</a>
									</p>
								</td>
							</tr>
						</table>
					</div>
					<div class="line2">
						<table class="width-100 table1">
							<tr>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Nguyên nhân</td>
											<td><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Triệu trứng</td>
											<td><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Nguy hại</td>
											<td><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Điều trị</td>
											<td><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="line3">
						<div class="posts">
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="post">
								<h2 class="clearfix">
									<a href="#">Lorem ipsum dolor sit amet.</a>
									<a href="#" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam? laboriosam?Reiciendis temporibus nihil aliquam, laboriosam?
									<a href="#">【 Xem thêm 】</a>
								</p>
							</div>
							<div class="my_pagination">
								<nav aria-label="Page navigation">
								  <ul class="pagination">
								    <li>
								      <a href="#" aria-label="Previous">
								        <span aria-hidden="true">&laquo;</span>
								      </a>
								    </li>
								    <li><a href="#">1</a></li>
								    <li><a href="#">2</a></li>
								    <li><a href="#">3</a></li>
								    <li><a href="#">4</a></li>
								    <li><a href="#">5</a></li>
								    <li>
								      <a href="#" aria-label="Next">
								        <span aria-hidden="true">&raquo;</span>
								      </a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="line4"></div>
				</div>
				<div class="flex1col2">
					<div class="line1">
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
								<td><a href="#">Hỏi đáp trực tuyến</a></td>
							</tr>
							<tr>
								<td><i class="bg3"></i></td>
								<td><a href="#">Điều trị cần biết </a></td>
								<td><i class="bg4"></i></td>
								<td><a href="#">Điện thoại miễn phí</a></td>
							</tr>
							<tr>
								<td><i class="bg5"></i></td>
								<td><a href="#">Đăng ký đặt hẹn</a></td>
								<td><i class="bg6"></i></td>
								<td><a href="#">Chuyên gia tư vấn</a></td>
							</tr>
							<tr>
								<td><i class="bg7"></i></td>
								<td><a href="#">Ý kiến khiếu nại</a></td>
								<td><i class="bg8"></i></td>
								<td><a href="#">Chỉ đường</a></td>
							</tr>
						</table>
						<script>
							$(document).ready(function($) {
								//
							    $("div.flex1col2 .line1 table.footer tr td").hover(function() {
							    	$(this).find('i').addClass('active');
							    }, function() {
							    	$(this).find('i').removeClass('active');
							    });
							    //
							    $("div.flex1col2 .line1 table.footer tr td:nth-child(2n+2)").hover(function() {
							    	$(this).prev('td').find('i').addClass('active');
							    }, function() {
							    	$(this).prev('td').find('i').removeClass('active');
							    });
							});	
						</script>
					</div>
					<div class="line2">
						<div class="bg">
							<table>
								<tr>
									<td><i class="bg1"></i></td>
									<td class="text-uppercase">Đặt lịch trực tuyến</td>
								</tr>
							</table>
						</div>
						<div class="dathen">
							<div id="demo">
								<div id="demo1">
									{!! APIGlobal::getRandomeName() !!}
								</div>
							</div>
							<script type="text/javascript">
						        new Marquee(
								{
									MSClassID : "demo",
									ContentID : "demo1",
								 	Direction : 0,
									Step	  : 0,
									Height	  : 178,
									Timer	  : 4,
									DelayTime : 5000,
									WaitTime  : 0,
									ScrollStep: 5000,
									SwitchType: 0,
									AutoStart : 1
								})
						    </script>
						</div>
						<div class="footer">
							Hôm nay đã có 46 người đặt lịch hẹn
						</div>
					</div>
					<div class="line3">
						<div class="bg">
							<table>
								<tr>
									<td><i class="bg2"></i></td>
									<td class="text-uppercase">Trực tràng hậu môn</td>
								</tr>
							</table>
						</div>					
						<div class="img1">
							<img src="{{ asset('public/css/desktop/imghome/home-26.png') }}" alt="" class="center-block">
						</div>
						<div class="posts">
							<ul>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
							</ul>
						</div>
					</div>
					<div class="line4">
						<div class="bg">
							<table>
								<tr>
									<td><i class="bg3"></i></td>
									<td class="text-uppercase">Táo bón</td>
								</tr>
							</table>
						</div>					
						<div class="img1">
							<img src="{{ asset('public/css/desktop/imghome/home-27.png') }}" alt="" class="center-block">
						</div>
						<div class="posts">
							<ul>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
								<li><a href="#"><i class="fa fa-circle"></i> Ngứa hậu môn là gì ?</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')