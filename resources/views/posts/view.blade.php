@extends('layouts.desktop')
@section('title')
	<title>{{ $post->name }}</title>
	@include('seo.seo_post')
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
								@if($post->id==19)
									@php $posts = App\Post::whereTermId(18)->limit(3)->inRandomOrder()->get();@endphp
								@else
									@php  
										$posts = $term->post()->where('id','<>',$post->id)->limit(3)->get();
									@endphp
								@endif
								@foreach($posts as $post)
								<li><a href="{{ APIPost::getUrlByObj($post) }}">{{ $post->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="table-cell bg2">
							<ul>
								<li><a href="{{ APIPost::getUrlByID(19) }}" title="Sơ lược về phòng khám">Sơ lược về phòng khám</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					@include('layouts.slidebar')
				</div>
			</div>
		</div>
	</div>
@endsection('content')