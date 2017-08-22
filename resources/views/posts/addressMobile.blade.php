@extends('layouts.mobilePost')
@section('title')
	<title>Địa chỉ phòng khám Nam Khang Hà Nội</title>
@endsection('title')
@section('css')
	<!-- <link href="{{ asset('public/css/mobile/post-detail.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-address.css') }}">
@endsection('css')
@section('content')
	<div class="container post">
		<h1>Địa chỉ phòng khám Nam Khang Hà Nội</h1>
		<div class="detail">
			<h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58029052751!2d105.84724954324604!3d21.00945489010672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8a5b96e8d5%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1svi!2s!4v1490176160826" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>
					
				</p>
			</h3>
			<h2>
				Các bạn thân mến, để thuận tiện hơn cho việc tìm đường đến khám bệnh, chúng tôi hướng dẫn chỉ đường đến phòng khám cho bạn!
			</h2>
			<div class="address-bus">
				<h4>
					<img src="{{ asset('public/css/desktop/imghome/icon-10.jpg') }}" alt=""> 
					Đi xe bus nào đến phòng khám? <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Bấm vào tư vấn >></a>
				</h4>
				<h3>Tuyến xe</h3>
				<table class="width-100">
					<tr>
						<td>Tuyến 08: </td>
						<td>
							Yên Phụ-Long Biên- Bà Triệu-Bạch Mai- Đại La- Giải Phóng- Giáp Bát- Quốc Lộ 1- Ngũ Hiệp- Đông Mỹ
						</td>
					</tr>
					<tr>
						<td>Tuyến 23: </td>
						<td>
							Nguyễn Công Trứ- Phố Huế- Bà Triệu- Phương Mai- La Thành- Giảng Võ- Nguyễn Thái Học- Long Biên- Ngô Thì Nhậm- Nguyễn Công Trứ
						</td>
					</tr>
					<tr>
						<td>Tuyến 31: </td>
						<td>
							ĐH Mỏ- Phú Thượng- Bà Triệu- Bách Khoa
						</td>
					</tr>
					<tr>
						<td>Tuyến 35: </td>
						<td>
							Trần Khánh Dư- Phạm Ngọc Thạch- Nguyễn Chí Thanh- Phạm Hùng- Nam Thăng Long
						</td>
					</tr>
					<tr>
						<td>Tuyến 36: </td>
						<td>
							Yên Phụ- Triệu Quốc Đạt- Bà Triệu- Bạch Mai- Trương Định- Giải Phóng- KĐT Linh Đàm
						</td>
					</tr>
					<tr>
						<td>Tuyến 38: </td>
						<td>
							BĐX Nam Thăng Long- ĐTC Cầu Giấy- Kim Mã- Lê Duẩn- Bạch Mai- Minh Khai- Tam Trinh- Mai Động
						</td>
					</tr>
					<tr>
						<td>Tuyến 52: </td>
						<td>
							CV Thống Nhất- Đại Cồ Việt- Minh Khai- Nguyễn Văn Linh- Lệ Chi
						</td>
					</tr>
					<tr>
						<td>Tuyến 52: </td>
						<td>
							CV Thống Nhất- Bà Triệu- Bạch Mai- Minh Khai- Thạch Bàn- KĐT Ecopark- Đường 179- Ỷ Lan- Đặng Xá (Gia Lâm).
						</td>
					</tr>
				</table>
				<h5>Đến Vincom Bà Triệu xuống xe, đi thẳng 50m là đến nơi.</h5>
			</div>
			<div class="address-bus">
				<h4>
					<img src="{{ asset('public/css/desktop/imghome/icon-11.jpg') }}" alt=""> 
					Làm thế nào để đi taxi hoặc tự lái xe đến phòng khám.Cung cấp chỗ đỗ xe miễn phí.? 
					<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Bấm vào tư vấn >></a>
				</h4>
				<h3>Đi taxi hoặc tự lái xe</h3>
				<p>Hãy trực tiếp đến 193C1 Bà Triệu- Quận Hai Bà Trưng- Hà Nội, nếu như không biết đường, có thể gọi đến điện thoại tư vấn 0868608106 để hỏi, phòng khám có chỗ đỗ xe miễn phí, thuận tiện cho bạn đỗ xe.</p>
			</div>
		</div>
		<div class="more">
			<div>Bài đọc thêm</div>
			<ul>
				<li><i class="fa fa-arrow-right"></i> <a href="{{ APIPost::getUrlByID(19) }}">Giới thiệu phòng khám</a></li>
			</ul>
		</div>
		<div class="row4">
			<div class="title text-uppercase">
				<span class="">Tự động đăng ký hẹn nhanh chóng</span>
			</div>
			<div class="bg">
				<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
					{{ csrf_field() }}
					<table class="width-100">
						<tr>
							<td>Tên :</td>
							<td><input name="ho_va_ten" required type="text" placeholder="Mời nhập họ và tên"></td>
						</tr>
						<tr>
							<td>Số điện thoại :</td>
							<td><input name="phone" required type="number" placeholder="Mời nhập số điện thoại của bạn"></td>
						</tr>
						<tr>
							<td>Ngày tháng :</td>
							<td><input name="thoigian" type="date" placeholder="Mời nhập ngày tới khám"></td>
						</tr>
						<tr>
							<td>Loại bệnh :</td>
							<td><input name="mieutabenh" type="text" placeholder="Mời nhập triệu trứng"></td>
						</tr>
					</table>
					<div class="button text-center">
						<button type="submit">Đăng ký</button>
						<button type="reset">Thiết lập lại</button>
					</div>
				</form>
				<script>
					$(document).ready(function() 
					{
						$('#formMailSend').ajaxForm(
						{
							beforeSubmit:function(){
								$("#myloadding").show();
							},
							success:function(){
				                alert("Cảm ơn bạn đã đăng ký!");
				                $("#myloadding").hide(); 
				                $('#formMailSend').resetForm();
							}
						});
					});
				</script>
			</div>
		</div>
	</div>
@endsection('content')