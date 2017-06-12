@extends('layouts.desktop')
@section('title')
	<title>{{ $post->name }}</title>
@endsection('title')
@section('css')
	<link rel="canonical" href="{{ APIPost::getUrlByObj($post) }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
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
			<a href="#">Bệnh trĩ</a>
		</div>
	</div>
	<div class="row4">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="line1">
						<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
						<div class="description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sit. Soluta, ad, dolorum. Provident delectus officiis doloremque tenetur nihil non debitis, natus quod et cupiditate vero sapiente illum ut est repellat placeat recusandae molestiae eius voluptate ipsum. Neque, expedita. Labore.
						</div>
						<div class="detail">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam in suscipit numquam, earum magni voluptatem porro dolorum blanditiis, reprehenderit qui nulla tenetur odio quos deserunt aliquam deleniti dolore. Ex maiores animi nostrum, ut aspernatur. Incidunt, ut perferendis modi eos cumque animi atque esse expedita mollitia debitis, blanditiis deleniti aut, sapiente consequatur quae ullam a aspernatur labore. Voluptatibus magni similique ad non quaerat quam aut, impedit perferendis corrupti natus nisi, asperiores, voluptatum necessitatibus odit. Illo sunt dolor vero placeat itaque adipisci eius officiis magnam quibusdam! Quasi id fugiat vero, harum eveniet, delectus, repellat dolores maiores deserunt praesentium vel esse? Similique dolorem at porro sint et voluptas aliquam tempore error ratione maiores odit id, quidem earum, nesciunt illum sunt est soluta officiis nostrum ipsa unde ea quas? Error hic nesciunt eum, vero sit tempora reprehenderit fuga numquam repellat rem eaque eius ab, ipsum sequi esse est? Illo ea voluptates dolores mollitia nihil, modi laudantium commodi similique pariatur animi, tenetur voluptatum rerum, expedita delectus necessitatibus dolor. Ut, sint asperiores nam error laborum. Ex deserunt repellendus illum doloribus facere nulla impedit ratione enim aliquam, quasi architecto iusto voluptate doloremque aut esse unde eligendi ipsum quae quam magnam ut at. Vero corrupti eveniet expedita alias repellat ipsam dignissimos nemo molestias laborum, pariatur animi est asperiores at. Omnis quidem, animi blanditiis esse voluptate mollitia, perspiciatis quam aliquam nam pariatur aperiam itaque facilis. Inventore tempora est qui odio eaque, quos iusto amet impedit dicta quia asperiores molestias placeat non ratione voluptatibus at nesciunt obcaecati, nostrum excepturi doloremque laboriosam? Quidem ratione quos aut! Quasi labore quidem in, ipsa accusantium eum ab, obcaecati ipsam iste odio, enim quibusdam nesciunt minima culpa? Natus mollitia itaque iste vel laudantium corrupti sint illum deleniti quos quas rem repudiandae ipsum, voluptatum ea debitis eos ut deserunt reprehenderit voluptatibus beatae fuga amet iusto. Voluptatem!
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
									<td><a href="#"><i class="fa fa-angle-right"></i> Không cần xếp hàng để khám</a></td>
									<td><a href="#"><i class="fa fa-angle-right"></i> Tư vẫn miến phí</a></td>
									<td><a href="#"><i class="fa fa-angle-right"></i> Khám ưu tiên</a></td>
								</tr>
							</table>
							<div class="text-center footer">
								<a href="#">Tư vẫn trực tuyến</a>
								<a href="#">Liên hệ bác sĩ</a>
							</div>
						</div>
					</div>
					<div class="line4">
						<table class="width-100 table1">
							<tr>
								<td>Trang trước : <a href="#">Lorem ipsum dolor sit amet, consectetur.</a></td>
								<td>Trang sau : <a href="#">Lorem ipsum dolor sit amet, consectetur.</a></td>
							</tr>
						</table>
					</div>
					<div class="line5">
						<div class="dis-inline-block bg1">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur. ipsum dolor sit amet, consectetur. ipsum dolor sit amet, consectetur.</a></li>
							</ul>
						</div>
						<div class="dis-inline-block bg2">
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