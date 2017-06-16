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
	<!-- column -->
	<div class="row3">
		<div class="container">
			<i class="fa fa-home"></i>
			<a href="{{ url('/') }}">Trang chủ</a>
			<span>></span>
			<span>{{ $term->name }}</span>
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
					<div class="footer">
						<img src="{{ asset('public/css/desktop/imgterm/term-2.png') }}" alt="" class="img-responsive center-block">
					</div>
				</div>
				<div class="flex1col2">
					@include('layouts.slidebar')
				</div>
			</div>
		</div>
	</div>
@endsection('content')