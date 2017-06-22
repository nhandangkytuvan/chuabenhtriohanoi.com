@extends('layouts.desktop')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
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
	<div class="row3">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-float-shadow"><img src="{{ asset('public/css/desktop/imghome/home-9.png') }}" alt="" class="center-block"></a></div>
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
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/desktop/imghome/home-11.png') }}" alt="" class="center-block hvr-glow"></a>
					</div>
					<div class="posts">
						<div class="active">
							@if(isset($post_clicks[0]))
							<div class="post-first">
								<div class="name text-uppercase text-center"><a title="{{ $post_clicks[0]->name }}" href="{{ APIPost::getUrlByObj($post_clicks[0]) }}">{{ $post_clicks[0]->name }}</a></div>
								<div class="des1 text-justify">
									{{ APIPost::getDescription($post_clicks[0]->description,40) }}... <a href="{{ APIPost::getUrlByObj($post_clicks[0]) }}">Chi tiết</a>
								</div>
							</div>
							@php unset($post_clicks[0]); @endphp
							@endif
							<table class="width-100">
								@foreach($post_clicks as $post)
								<tr>
									<td>[ Click nhiều ]</td>
									<td><a href="{{ APIPost::getUrlByObj($post) }}" title="{{ $post->name }}">{{ $post->name }}</a></td>
								</tr>
								@endforeach
							</table>
						</div>
						<div>
							@if(isset($post_kythuats[0]))
							<div class="post-first">
								<div class="name text-uppercase text-center"><a title="{{ $post_kythuats[0]->name }}" href="{{ APIPost::getUrlByObj($post_kythuats[0]) }}">{{ $post_kythuats[0]->name }}</a></div>
								<div class="des1 text-justify">
									{{ APIPost::getDescription($post_kythuats[0]->description,40) }}... <a href="{{ APIPost::getUrlByObj($post_kythuats[0]) }}">Chi tiết</a>
								</div>
							</div>
							@php unset($post_kythuats[0]); @endphp
							@endif
							<table class="width-100">
								@foreach($post_kythuats as $post)
								<tr>
									<td>[ Kỹ thuật ]</td>
									<td><a href="{{ APIPost::getUrlByObj($post) }}" title="{{ $post->name }}">{{ $post->name }}</a></td>
								</tr>
								@endforeach
							</table>
						</div>
						<div>
							@if(isset($post_shares[0]))
							<div class="post-first">
								<div class="name text-uppercase text-center"><a title="{{ $post_shares[0]->name }}" href="{{ APIPost::getUrlByObj($post_shares[0]) }}">{{ $post_shares[0]->name }}</a></div>
								<div class="des1 text-justify">
									{{ APIPost::getDescription($post_shares[0]->description,40) }}... <a href="{{ APIPost::getUrlByObj($post_shares[0]) }}">Chi tiết</a>
								</div>
							</div>
							@php unset($post_shares[0]); @endphp
							@endif
							<table class="width-100">
								@foreach($post_shares as $post)
								<tr>
									<td>[ Chia sẻ ]</td>
									<td><a href="{{ APIPost::getUrlByObj($post) }}" title="{{ $post->name }}">{{ $post->name }}</a></td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="flex1col3">
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/desktop/imghome/home-12.png') }}" alt="" class="center-block hvr-glow"></a></div>
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
							<td>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg1"></i></a>
							</td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia giải đáp </a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg2"></i></a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến</a></td>
						</tr>
						<tr>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg3"></i></a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Điều trị cần biết </a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg4"></i></a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Điện thoại miễn phí</a></td>
						</tr>
						<tr>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg5"></i></a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đăng ký đặt hẹn</a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg6"></i></a></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia tư vấn</a></td>
						</tr>
						<tr>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg7"></i></td>
							<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Ý kiến khiếu nại</a></td>
							<td><a href="https://goo.gl/maps/YP8cFNyYZFP2"><i class="bg8"></i></td>
							<td><a href="https://goo.gl/maps/YP8cFNyYZFP2">Chỉ đường</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row4">
		<div class="container">
			<div class="title text-uppercase text-center">Hình ảnh nhân viên</div>
			<div class="slogan text-center"><span>Chúng tôi luôn nỗ lực hết mình</span></div>
			<div class="slick-pk">
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-15.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-16.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-17.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-18.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-19.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-20.png') }}" alt="" class="center-block"></a></div>
				<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-box-shadow-inset"><img src="{{ asset('public/css/desktop/imghome/home-21.png') }}" alt="" class="center-block"></a></div>
			</div>
			<script>
				$('.slick-pk').slick({
				  	slidesToShow: 4,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
		</div>
	</div>
	<div class="row5">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="tabs2">
								<table>
									<tr>
										<td class="active arrow_box"><div>Chuyên khoa trĩ</div></td>
										<td><div><span>Trĩ nội</span></div></td>
										<td><div><span>Trĩ ngoại</span></div></td>
										<td><div><span>Trĩ hỗn hợp</span></div></td>
									</tr>
								</table>
							</div>
							<div class="contents2">
								<div class="active">
									<div class="bg">
										<div class="title text-uppercase">Bệnh trĩ là gì?</div>
										<div class="des1 text-justify">
											Bệnh trĩ hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá  <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Trĩ nội là gì?</div>
										<div class="des1 text-justify">
											Trĩ nội hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá  <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Trĩ ngoại là gì?</div>
										<div class="des1 text-justify">
											Trĩ ngoại hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá  <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Trĩ hỗn hợp là gì?</div>
										<div class="des1 text-justify">
											Trĩ hỗn hợp hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá  <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="flex2col2">
							<div class="dis-table table1">
								<div class="table-cell cell1"><i class="fa fa-user"></i></div>
								<div class="table-cell cell2"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến<br>với chuyên gia</a></div>
							</div>
							<div class="img1">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-float"><img src="{{ asset('public/css/desktop/imghome/home-23.png') }}" alt="" class="center-block"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col2">
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
						Hôm nay đã có <span style="color: red;">46</span> người đặt lịch hẹn
					</div>
				</div>
			</div>
			<div class="flex flex1 margin1 justify-content-between">
				<div class="flex1col1">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="tabs2">
								<table>
									<tr>
										<td class="active arrow_box"><div>Bệnh xung<br>quanh hậu môn</div></td>
										<td><div><span>Áp xe<br>hậu môn</span></div></td>
										<td><div><span>Ngứa rát<br>hậu môn</span></div></td>
										<td><div><span>Polyp<br>hậu môn</span></div></td>
										<td><div><span>Đau hậu<br>môn</span></div></td>
										<td><div><span>Hậu môn có<br>vật thể lạ</span></div></td>
									</tr>
								</table>
							</div>
							<div class="contents2">
								<div class="active">
									<div class="bg">
										<div class="title text-uppercase">Ngứa hậu môn là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Áp xe hậu môn là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Ngứa rát hậu môn là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Polyp hậu môn là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Đau hậu môn là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Hậu môn có vật thể lạ là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Hậu môn phình to là gì?</div>
										<div class="des1 text-justify">
											Theo các bác sĩ Phòng khám đa khoa Giải Phóng, bệnh ngứa hậu môn là tình trạng bị ngứa quanh vùng hậu môn vì đây cũng là lối thoát cho trực tràng. Vị trí ngứa hậu môn thường nằm trên da xung ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="flex2col2">
							<div class="dis-table table1">
								<div class="table-cell cell1"><i class="fa fa-user"></i></div>
								<div class="table-cell cell2"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến<br>với chuyên gia</a></div>
							</div>
							<div class="img1">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-float"><img src="{{ asset('public/css/desktop/imghome/home-25.png') }}" alt="" class="center-block"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<div class="bg">
						<table>
							<tr>
								<td><i class="bg2"></i></td>
								<td class="text-uppercase">Trực tràng hậu môn</td>
							</tr>
						</table>
					</div>					
					<div class="img1">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow dis-block"><img src="{{ asset('public/css/desktop/imghome/home-26.png') }}" alt="" class="center-block"></a>
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
			<div class="flex flex1 margin1 justify-content-between">
				<div class="flex1col1">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="tabs2">
								<table>
									<tr>
										<td class="active arrow_box"><div>Chấn thương<br>hậu môn</div></td>
										<td><div><span>Rò hậu môn</span></div></td>
										<td><div><span>Nứt kẽ hậu môn</span></div></td>
										<td><div><span>Sa trực tràng</span></div></td>
										<td><div><span>Đi ngoài ra máu</span></div></td>
									</tr>
								</table>
							</div>
							<div class="contents2">
								<div class="active">
									<div class="bg">
										<div class="title text-uppercase">Hậu môn xuất hiện búi thịt là làm sao?</div>
										<div class="des1 text-justify">
											Hâu môn là một trong những khu vực chịu nhiều tác động từ môi trường bên trong cơ thể lẫn môi trường bên ngoài. Ngoài ra, hậu môn không chỉ là nơi cuối cùng tiếp xúc trực tiếp với chất thải của cơ thể mà còn tiếp ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Rò hậu môn hiện búi thịt là làm sao?</div>
										<div class="des1 text-justify">
											Hâu môn là một trong những khu vực chịu nhiều tác động từ môi trường bên trong cơ thể lẫn môi trường bên ngoài. Ngoài ra, hậu môn không chỉ là nơi cuối cùng tiếp xúc trực tiếp với chất thải của cơ thể mà còn tiếp ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Nứt kẽ hậu môn hiện búi thịt là làm sao?</div>
										<div class="des1 text-justify">
											Hâu môn là một trong những khu vực chịu nhiều tác động từ môi trường bên trong cơ thể lẫn môi trường bên ngoài. Ngoài ra, hậu môn không chỉ là nơi cuối cùng tiếp xúc trực tiếp với chất thải của cơ thể mà còn tiếp ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Sa trực tràng hiện búi thịt là làm sao?</div>
										<div class="des1 text-justify">
											Hâu môn là một trong những khu vực chịu nhiều tác động từ môi trường bên trong cơ thể lẫn môi trường bên ngoài. Ngoài ra, hậu môn không chỉ là nơi cuối cùng tiếp xúc trực tiếp với chất thải của cơ thể mà còn tiếp ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
								<div>
									<div class="bg">
										<div class="title text-uppercase">Đi ngoài ra máu hiện búi thịt là làm sao?</div>
										<div class="des1 text-justify">
											Hâu môn là một trong những khu vực chịu nhiều tác động từ môi trường bên trong cơ thể lẫn môi trường bên ngoài. Ngoài ra, hậu môn không chỉ là nơi cuối cùng tiếp xúc trực tiếp với chất thải của cơ thể mà còn tiếp ... <a href="#">(chi tiết)</a>
										</div>
									</div>
									<table>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
										<tr>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
											<td><i class="fa fa-circle"></i> <a href="#">Nguyên nhân gây bệnh trĩ</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="flex2col2">
							<div class="dis-table table1">
								<div class="table-cell cell1"><i class="fa fa-user"></i></div>
								<div class="table-cell cell2"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến<br>với chuyên gia</a></div>
							</div>
							<div class="img1">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-float"><img src="{{ asset('public/css/desktop/imghome/home-29.png') }}" alt="" class="center-block"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<div class="bg">
						<table>
							<tr>
								<td><i class="bg3"></i></td>
								<td class="text-uppercase">Táo bón</td>
							</tr>
						</table>
					</div>					
					<div class="img1">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow dis-block"><img src="{{ asset('public/css/desktop/imghome/home-27.png') }}" alt="" class="center-block"></a>
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
	<div class="row6">
		<div class="container">
			<div class="bg">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<div class="bg1">
							<table>
								<tr>
									<td class="text-uppercase td1">Tương tác với bệnh nhân</td>
									<td class="td2">Interraction</td>
									<td class="link"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tôi muốn đặt lịch hẹn</a></td>
									<td class="link"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tôi muốn đặt câu hỏi</a></td>
									<td class="link"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi chuyên gia</a></td>
								</tr>
							</table>
						</div>
						<table class="table1">
							<tr>
								<td>
									<div>
										<table class="table2">
											<tr>
												<td class="td1"></td>
												<td class="text-uppercase">Đặt lịch trực tuyến</td>
												<td>Online message</td>
												<td><i></i></td>
											</tr>
										</table>
									</div>
								</td>
								<td>
									<div>
										<table class="table2">
											<tr>
												<td class="td1"></td>
												<td class="text-uppercase">Câu hỏi mới nhất</td>
												<td>Question</td>
												<td><i></i></td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<table class="table3">
										<tr>
											<td class="text"><span class="red">*</span> Họ tên :</td>
											<td><input type="text"></td>
											<td class="text"><span class="red">*</span> Giới tính :</td>
											<td>
												<select name="">
													<option value="Nam">Nam</option>	
													<option value="Nữ">Nữ</option>	
												</select>
											</td>
										</tr>
										<tr>
											<td class="text"><span class="red">*</span> Tuổi :</td>
											<td><input type="number"></td>
											<td class="text"><span class="red">*</span> Điện thoại :</td>
											<td><input type="number"></td>
										</tr>
										<tr>
											<td class="text"><span class="red">*</span> <span class="text-center dis-inline-block">Nội dung<br>đặt hẹn</span></td>
											<td colspan="3">
												<textarea name="" rows="10" class="width-100"></textarea>
											</td>
										</tr>
										<tr>
											<td class="text-center"><span class="red">*</span> <span class="text-center  dis-inline-block">Thời gian<br>đặt hẹn</span></td>
											<td colspan="2">
												<input type="date">
											</td>
											<td>
												<button>Đăng ký thành công</button>
											</td>
										</tr>
									</table>
								</td>
								<td>
									<ul class="posts">
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
										<li><a href="#"> Bên trong hậu môn cảm giác có vật thể lạ là bị trĩ phải không?</a></li>
										<li><a href="#"> Ngứa hậu môn là bị làm sao?</a></li>
										<li><a href="#"> Phòng khám nam khoa mổ trĩ giá cao không?</a></li>
										<li><a href="#"> Mổ trĩ có đau không?</a></li>
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
										<li><a href="#"> Đi ngoài ra máu là bị làm sao?</a></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
					<div class="flex1col2">
						<div class="bg">
							<table>
								<tr>
									<td><i class="bg3"></i></td>
									<td class="text-uppercase">Cách thức liên lạc</td>
								</tr>
							</table>
						</div>	
						<div class="maps1">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d119186.56920908566!2d105.84909!3d21.009455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1sen!2sus!4v1496979349608" width="373" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="footer">
							<table>
								<tr>
									<td><a href="tel:1800 6181"></a><img src="{{ asset('public/css/desktop/imghome/home-31.png') }}" alt=""></td>
									<td>
										<div class="hotline">Hotline sức khỏe :</div>
										<div class="phone">1800 - 6181 . 043 - 9656999</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')
