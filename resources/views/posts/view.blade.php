@extends('layouts.desktop')
@section('title')
	<title>{{ $post->name }}</title>
@endsection('title')
@section('css')
	<link rel="canonical" href="{{ APIPost::getUrlByObj($post) }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
	<link href="{{ asset('public/css/desktop/post-detail-css.css') }}" rel="stylesheet">
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
	@php $term = $post->term ? $post->term : null;@endphp
	<!-- column -->
	<div class="row3">
		<div class="container">
			<i class="fa fa-home"></i>
			<a href="{{ url('/') }}">Trang chủ</a>
			<span>></span>
			<a href="{{ APITerm::getUrlByObj($term) }}">{{ isset($term) ? $term->name : '' }}</a>
		</div>
	</div>
	<div class="row4">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="line1">
						<h1>{{ $post->name }}</h1>
						<div class="detail">
							{!! $post->content !!}
						</div>
					</div>
					<div class="line2"></div>
					<div class="line3">
						<div class="bg">
							<table class="table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt="" width="50"></td>
									<td>PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</td>
								</tr>
							</table>
							<div class="border"></div>
							<div class="des text-center">
								Nếu bạn vẫn còn thắc mắc, mời nhấp vào bên dưới<br>
								<span>liên hệ với bác sĩ tư vấn trực tuyến bấm chuông</span>
							</div>
							<table class="table2 width-100">
								<tr>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-angle-right"></i> Không cần xếp hàng để khám</a></td>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-angle-right"></i> Tư vẫn miến phí</a></td>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-angle-right"></i> Khám ưu tiên</a></td>
								</tr>
							</table>
							<div class="text-center footer">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Liên hệ bác sĩ</a>
							</div>
						</div>
					</div>
					<div class="line4">
						<table class="width-100 table1">
							<tr>
								@php $post_pre = $term->post()->where('id','<',$post->id)->orderBy('id','desc')->first(); @endphp
								@if($post_pre)
								<td>Trang trước : <a href="{{ APIPost::getUrlByObj($post_pre) }}">{{ $post_pre->name }}</a></td>
								@endif
								@php $post_next = $term->post()->where('id','>',$post->id)->orderBy('id','asc')->first(); @endphp
								@if($post_next)
								<td>Trang sau : <a href="{{ APIPost::getUrlByObj($post_next) }}">{{ $post_next->name }}</a></td>
								@endif
							</tr>
						</table>
					</div>
					<div class="line5 dis-table width-100">
						<div class="table-cell bg1">
							<ul>
								@php  
									$posts = $term->post()->where('id','<>',$post->id)->limit(3)->get();
								@endphp
								@foreach($posts as $post)
								<li><a href="{{ APIPost::getUrlByObj($post) }}">{{ $post->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="table-cell bg2">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur. ipsum dolor sit amet, consectetur. ipsum dolor sit amet, consectetur.</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<div class="line1">
						<div><img src="{{ asset('public/css/desktop/imghome/home-12.png') }}" alt="" class="center-block"></div>
						<div class="des1 text-justify">
							Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao ... <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">tìm hiểu thêm</a>
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