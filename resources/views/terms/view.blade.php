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
					@if($term->term_id != 0)
					<div class="line1">
						<table>
							<tr>
								<td>
									<a href="#"><img src="{{ asset('public/css/desktop/imgterm/term-1.png') }}" alt=""></a>
								</td>
								<td>
									<h1>{{ $term->name }} là gì?</h1>
									<p>
										Bệnh trĩ hay còn gọi là bệnh lòi dom, là bệnh rất thường gặp ở đường hậu môn trực tràng, bệnh có thể gặp ở cả nam và nữ, nhất là những người thường xuyên bị táo bón, người làm những công việc phải đứng, ngồi quá nhiều, được hình thành do giãn nở quá mức các mạch máu. Vậy nguyên nhân, triệu chứng và cách điều trị  ... <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chi tiết</a>
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
					@endif
					<div class="line3">
						<div class="posts">
							@php $posts = $term->post()->orderBy('id','desc')->paginate(8);@endphp
							@foreach($posts as $post)
							<div class="post">
								<h2 class="clearfix">
									<a href="{{ APIPost::getUrlByObj($post) }}" title="{{ $post->name }}">{{ $post->name }}</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									{!! APIPost::getDescription($post->description,60) !!}...
									<a href="{{ APIPost::getUrlByObj($post) }}" title="Xem thêm">【 Xem thêm 】</a>
								</p>
							</div>
							@endforeach
							<div class="my_pagination">
								{{ $posts->links() }}
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