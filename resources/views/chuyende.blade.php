@extends('layouts.desktop')
@section('title')
	<title>Chuyên đề</title>
@endsection('title')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/chuyende1/chuyende1.css') }}">
@endsection('css')
@section('banner')
	<div class="myBanner">
		<div>
			<a href="#"><img src="{{ asset('public/css/chuyende1/chuyende-1.png') }}" alt="" class="center-block"></a>
		</div>
	</div>
@endsection('banner')
@section('content')
	<div class="row1">
		<div class="global1 text-center">
			<div class="dis-inline-block text-center border1">
				<div class="el1 text-center dis-inline-block">Q1</div>
				<div class="el2 text-center dis-inline-block text-uppercase">
					Bệnh trĩ rất có hứng thú với những nhóm người sau
				</div>
			</div>
		</div>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="line1">
						<img src="{{ asset('public/css/chuyende1/chuyende-2.png') }}" alt="" class="center-block">
					</div>
					<div class="line2">
						Đi vệ sinh phải mang theo điện thoại, 
						một khi đã đi là phải nửa tiếng
					</div>
					<div class="line3">
						<a href="#" class="link">Tình trạng của tôi như sau >></a>
					</div>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<div>
						<table>
							<tr>
								<td>
									<img src="{{ asset('public/css/chuyende1/chuyende-3.png') }}" alt="" class="center-block">
								</td>
								<td>
									<p>
										Lẩu cay nóng, các loại thực 
										phẩm cay, không cay không 
										chịu được
									</p>
									<a href="#" class="link">Tình trạng của tôi như sau >></a>
								</td>
							</tr>
						</table>
					</div>
					<div>
						<table>
							<tr>
								<td>
									<img src="{{ asset('public/css/chuyende1/chuyende-5.png') }}" alt="" class="center-block">
								</td>
								<td>
									<p>
										Ra ngoài có việc, chỉ có thể 
										nhịn đi đại tiện, táo bón mãn 
										tính
									</p>
									<a href="#" class="link">Tình trạng của tôi như sau >></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<div>
						<table>
							<tr>
								<td>
									<img src="{{ asset('public/css/chuyende1/chuyende-4.png') }}" alt="" class="center-block">
								</td>
								<td>
									<p>
										Tài xế lái xe ngồi cả ngày, 
										đau hậu môn, ngứa hậu môn
									</p>
									<a href="#" class="link">Tình trạng của tôi như sau >></a>
								</td>
							</tr>
						</table>
					</div>
					<div>
						<table>
							<tr>
								<td>
									<img src="{{ asset('public/css/chuyende1/chuyende-6.png') }}" alt="" class="center-block">
								</td>
								<td>
									<p>
										Ăn uống không có tổ chức, tiệc 
										tùng thiết đãi, bàn tiệc lúc nào 
										cũng phải có rượu
									</p>
									<a href="#" class="link">Tình trạng của tôi như sau >></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="global2 text-center">
				<div class="border1 dis-inline-block text-center">
					<div class="margin1 text-uppercase text-center"><span>Tôi thuộc nhóm trên, tôi phải làm gì để phòng tránh bệnh trĩ?</span></div>
					<table>
						<tr>
							<td>
								<a href="#" class="dis-table table1">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-7.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">Click tư vấn trực tuyến</span>
								</a>
							</td>
							<td>
								<a href="#" class="dis-table table2">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-8.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">1800 - 6181</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row2">
		<div class="global1 text-center">
			<div class="dis-inline-block text-center border1">
				<div class="el1 text-center dis-inline-block">Q2</div>
				<div class="el2 text-center dis-inline-block text-uppercase">
					Có những triệu chứng sau, có phải đã bị bệnh trĩ?
				</div>
			</div>
		</div>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-9.png') }}" alt="">
					<div class="text-uppercase name">TRĨ NỘI</div>
					<div class="padding">
						<table>
							<tr>
								<td><span>1</span></td>
								<td>Đại tiện xong giấy vệ sinh có máu</td>
							</tr>
							<tr>
								<td><span>2</span></td>
								<td>Khi đại tiện thấy một cục thịt lồi ra</td>
							</tr>
							<tr>
								<td><span>3</span></td>
								<td>Vài ngày mới đại tiện một lần</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-10.png') }}" alt="">
					<div class="text-uppercase name">TRĨ NGOẠI</div>
					<div class="padding">
						<table>
							<tr>
								<td><span>1</span></td>
								<td>Bên ngoài hậu môn sờ thấy một mụn thịt</td>
							</tr>
							<tr>
								<td><span>2</span></td>
								<td>Hậu môn sưng tấy đau nhức, ngồi thẳng đi lại không tiện</td>
							</tr>
							<tr>
								<td><span>3</span></td>
								<td>Hay có chất dính và nhầy chảy ra ngoài</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-11.png') }}" alt="">
					<div class="text-uppercase name">TRĨ HỖN HỢP</div>
					<div class="padding">
						<table>
							<tr>
								<td><span>1</span></td>
								<td>Đi đại tiện ra máu, như đến kì kinh nguyệt vậy</td>
							</tr>
							<tr>
								<td><span>2</span></td>
								<td>Hậu môn ướt dính, vô cùng ngứa, không chịu được phải cấu</td>
							</tr>
							<tr>
								<td><span>3</span></td>
								<td>Miệng hậu môn có mụn thịt, ma sát khi đi lại đau vô cùng</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="global2 text-center">
				<div class="border1 dis-inline-block text-center">
					<div class="margin1 text-uppercase text-center"><span>Không tự phân biệt được các loại trĩ, phải làm sao?</span></div>
					<table>
						<tr>
							<td>
								<a href="#" class="dis-table table1">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-7.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">Click tư vấn trực tuyến</span>
								</a>
							</td>
							<td>
								<a href="#" class="dis-table table2">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-8.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">1800 - 6181</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row3">
		<div class="global1 text-center">
			<div class="dis-inline-block text-center border1">
				<div class="el1 text-center dis-inline-block">Q3</div>
				<div class="el2 text-center dis-inline-block text-uppercase">
					Sờ thử và so sánh hình ảnh xem bệnh trĩ của bạn thuộc loại nào?
				</div>
			</div>
		</div>
		<div class="container">
			<div class="flex flex1 justify-content-between flex-wrap-wrap">
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-12.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ nội giai đoạn 1</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-13.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ nội giai đoạn 2</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-14.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ nội giai đoạn 3</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-15.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ nội giai đoạn 4</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<!--  -->
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-16.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ ngoại do viêm</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-17.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ ngoại do tĩnh mạch phình to</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-18.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ ngoại huyết khối</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-19.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ ngoại do tổ chức kết đế</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<!--  -->
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-20.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ hỗn hợp thường</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-21.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ hỗn hợp đa phát</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-22.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ hỗn hợp vòng</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/css/chuyende1/chuyende-23.png') }}" alt="" class="center-block">
					<div class="name text-uppercase text-center">Trĩ hỗn hợp phức tạp</div>
					<div class="border text-center">
						<table>
							<tr>
								<td>Nghi ngờ là bệnh này làm sao để chẩn đoán chính xác?</td>
								<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="global2 text-center">
				<div class="border1 dis-inline-block text-center">
					<div class="margin1 text-uppercase text-center"><span>Phương pháp chữa trị các loại bệnh trĩ</span></div>
					<table>
						<tr>
							<td>
								<a href="#" class="dis-table table1">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-7.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">Click tư vấn trực tuyến</span>
								</a>
							</td>
							<td>
								<a href="#" class="dis-table table2">
									<span class="table-cell"><img src="{{ asset('public/css/chuyende1/chuyende-8.png') }}" alt=""></span>
									<span class="table-cell text-uppercase">1800 - 6181</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row4">
		<div class="global1 text-center">
			<div class="dis-inline-block text-center border1">
				<div class="el1 text-center dis-inline-block">Q4</div>
				<div class="el2 text-center dis-inline-block text-uppercase">
					Đối chứng kỹ lưỡng mức độ nghiêm trọng của bệnh trĩ
				</div>
			</div>
		</div>
		<div class="container">
			<div class="flex flex1">
				<div class="flex1col1 bg1">
					<div class="name">Bệnh trĩ giai đoạn đầu</div>
					<div class="border">
						<div>
							<table class="table1">
								<tr>
									<td><img src="{{ asset('public/css/chuyende1/chuyende-24.png') }}" alt=""></td>
									<td>
										<table class="table2">
											<tr>
												<td><span>1</span></td>
												<td>Đại tiện ra máu</td>
											</tr>
											<tr>
												<td><span>2</span></td>
												<td>Hơi đau nhức</td>
											</tr>
											<tr>
												<td><span>3</span></td>
												<td>Vùng trĩ không lồi ra</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<div class="border2"></div>
						<div class="des">
							Diện tích búi trĩ nhỏ, mềm, bề mặt vùng trĩ có màu đỏ tươi, do khi đại tiện có ma sát mà búi trĩ chảy máu, phần máu chảy ra hoặc là sợi máu nhỏ, hoặc là các giọt máu nhỏ, không đau đớn, không lồi ra, đặc điểm nổi bật là đi ngoài ra máu.
						</div>
					</div>
					<div class="footer">
						<a href="#">Bác sĩ tư vấn</a>
					</div>
				</div>
				<div class="flex1col1 bg2">
					<div class="name">Bệnh trĩ giai đoạn giữa</div>
					<div class="border">
						<div>
							<table class="table1">
								<tr>
									<td><img src="{{ asset('public/css/chuyende1/chuyende-25.png') }}" alt=""></td>
									<td>
										<table class="table2">
											<tr>
												<td><span>1</span></td>
												<td>Lau chùi ra máu</td>
											</tr>
											<tr>
												<td><span>2</span></td>
												<td>Đại tiện xong đau nhức</td>
											</tr>
											<tr>
												<td><span>3</span></td>
												<td>Vùng trĩ tự động thu về</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<div class="border2"></div>
						<div class="des">
							Diện tích nốt trĩ lồi ra khá to, mềm, bề mặt vùng trĩ màu đỏ tươi hoặc tím nhạt, khi đại tiện vùng trĩ lồi ra ngoài hậu môn, đại tiện xong phần trĩ tự động thu về, triệu chứng nổi bật của bệnh trĩ ở giai đoạn này là chảy máu sau khi đại tiện, hoặc ít hoặc nhiều.
						</div>
					</div>
					<div class="footer">
						<a href="#">Bác sĩ tư vấn</a>
					</div>
				</div>
				<div class="flex1col1 bg3">
					<div class="name">Bệnh trĩ giai đoạn cuối</div>
					<div class="border">
						<div>
							<table class="table1">
								<tr>
									<td><img src="{{ asset('public/css/chuyende1/chuyende-26.png') }}" alt=""></td>
									<td>
										<table class="table2">
											<tr>
												<td><span>1</span></td>
												<td>Đi đại tiện phun ra máu</td>
											</tr>
											<tr>
												<td><span>2</span></td>
												<td>Đau nhức vô cùng</td>
											</tr>
											<tr>
												<td><span>3</span></td>
												<td>Dùng tay đẩy vùng trĩ về chỗ cũ</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<div class="border2"></div>
						<div class="des">
							Diện tích vùng trĩ to hơn, cứng hơn, bề mặt vùng trĩ có màu xám trắng, khi đại tiện vùng trĩ lồi ra ngoài hậu môn, thậm chí khi đi lại, ho, hắt xì, đứng thẳng cũng lồi ra, vùng trĩ không thể tự động thu về.
						</div>
					</div>
					<div class="footer">
						<a href="#">Bác sĩ tư vấn</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')
